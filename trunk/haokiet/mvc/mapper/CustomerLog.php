<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class CustomerLog extends Mapper implements \MVC\Domain\CustomerLogFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("select * from haokiet_customer_log");
        $this->selectStmt = self::$PDO->prepare("select * from haokiet_customer_log where id=?");
        $this->updateStmt = self::$PDO->prepare("update haokiet_customer_log set id_CustomerLog=?, datetime=?, ticket1=?, ticket2=?, paid1=?, paid2=?, debt=? where id=?");
        $this->insertStmt = self::$PDO->prepare("insert into haokiet_customer_log (id_customer, `datetime`, ticket1, ticket2, paid1, paid2, debt) values( ?, ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare("delete from haokiet_customer_log where id=?");		
		
		$this->findByCustomerStmt = self::$PDO->prepare("select * from haokiet_customer_log where id_CustomerLog=?");
		$this->findByDateStmt = self::$PDO->prepare("select * from haokiet_customer_log where date(`datetime`)=?");
		 
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
			$array['debt']			
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
			$object->getDebt()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCustomerLog(),
			$object->getDateTime(),	
			$object->getTicket1(),	
			$object->getTicket2(),	
			$object->getPaid1(),	
			$object->getPaid2(),
			$object->getDebt(),
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
	function findByDate( $values ) {
		$this->findByDateStmt->execute($values);
        return new CustomerLogCollection( $this->findByDateStmt->fetchAll(), $this );
    }
		
}
?>