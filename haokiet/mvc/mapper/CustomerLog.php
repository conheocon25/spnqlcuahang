<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class CustomerLog extends Mapper implements \MVC\Domain\CustomerLogFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("select * from haokiet_customer_log");
        $this->selectStmt = self::$PDO->prepare("select * from haokiet_customer_log where id=?");
        $this->updateStmt = self::$PDO->prepare("update haokiet_customer_log set id_customer=?, datetime=?, ticket1=?, ticket2=?, paid1=?, paid2=?, debt=?, paid1_remain=?, paid2_remain=? where id=?");
        $this->insertStmt = self::$PDO->prepare("insert into haokiet_customer_log (id_customer, `datetime`, ticket1, ticket2, paid1, paid2, debt, paid1_remain, paid2_remain) values( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare("delete from haokiet_customer_log where id=?");		
		
		$this->findByCustomerStmt 	= self::$PDO->prepare("select * from haokiet_customer_log where id_customer=? order by datetime desc");
		$this->findByDateStmt 		= self::$PDO->prepare("			
			select * 
			from 				
				haokiet_customer_log 	CL				
			where
			date(`datetime`)=?
		");
		
		$this->findByDate1Stmt 		= self::$PDO->prepare("			
			select * 
			from 
				haokiet_customer 		CU 
					inner join
				haokiet_customer_log 	CL
					on
				CU.id = CL.id_customer
			where 
			CU.id_domain=? AND date(`datetime`)=?
			order by name
		");
		$this->findActiveStmt 		= self::$PDO->prepare("select * from haokiet_customer_log where date(`datetime`)=? AND id_customer=?");
		$this->findPreStmt 			= self::$PDO->prepare("select * from haokiet_customer_log where date(`datetime`) < date(?) AND id_customer=? ORDER BY `datetime` DESC LIMIT 1");
    } 
    function getCollection( array $raw ) {return new CustomerLogCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\CustomerLog( 
			$array['id'],  
			$array['id_customer'],
			$array['datetime'],
			$array['ticket1'],
			$array['ticket2'],
			$array['paid1'],
			$array['paid2'],
			$array['debt'],
			$array['paid1_remain'],
			$array['paid2_remain']
		);					
        return $obj;
    }	
    protected function targetClass() { return "CustomerLog";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdCustomer(),
			$object->getDateTime(),	
			$object->getTicket1(),	
			$object->getTicket2(),	
			$object->getPaid1(),	
			$object->getPaid2(),
			$object->getDebt(),
			$object->getPaid1Remain(),	
			$object->getPaid2Remain()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCustomer(),
			$object->getDateTime(),	
			$object->getTicket1(),	
			$object->getTicket2(),	
			$object->getPaid1(),	
			$object->getPaid2(),
			$object->getDebt(),
			$object->getPaid1Remain(),
			$object->getPaid2Remain(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }	
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
	
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findByCustomer( $values ) {
		$this->findByCustomerStmt->execute($values);
        return new CustomerLogCollection( $this->findByCustomerStmt->fetchAll(), $this );
    }
	function findByDate1( $values ) {
		$this->findByDate1Stmt->execute($values);
        return new CustomerLogCollection( $this->findByDate1Stmt->fetchAll(), $this );
    }
	
	function findByDate( $values ) {
		$this->findByDateStmt->execute($values);
        return new CustomerLogCollection( $this->findByDateStmt->fetchAll(), $this );
    }
	
	function findActive( $values ){		
        $this->findActiveStmt->execute( $values );
        $array = $this->findActiveStmt->fetch();
        $this->findActiveStmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;
    }
    
	function findPre( $values ){		
        $this->findPreStmt->execute( $values );
        $array = $this->findPreStmt->fetch();
        $this->findPreStmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;
    }	
	
}
?>