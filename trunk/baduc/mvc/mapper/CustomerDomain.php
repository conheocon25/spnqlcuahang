<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class CustomerDomain extends Mapper implements \MVC\Domain\DomainFinder{

    function __construct() {
        parent::__construct();
				
		$tblCustomerDomain = "tbl_customer_domain";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblCustomerDomain);
		$selectStmt = sprintf("select *  from %s where id=?", $tblCustomerDomain);
		$updateStmt = sprintf("update %s set id_customer=?, id_domain=? where id=?", $tblCustomerDomain);
		$insertStmt = sprintf("insert into %s (id_customer, id_domain) values(?, ?)", $tblCustomerDomain);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCustomerDomain);
		$findByStmt = sprintf("SELECT * FROM  %s WHERE id_customer=?", $tblCustomerDomain);
		$findByPageStmt = sprintf("SELECT * FROM  %s ORDER BY name LIMIT :start,:max", $tblCustomerDomain);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
    } 
    function getCollection( array $raw ) {return new CustomerDomainCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\CustomerDomain( 
			$array['id'],
			$array['id_customer'],
			$array['id_domain']
		);
        return $obj;
    }

    protected function targetClass() {return "CustomerDomain";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCustomer(),
			$object->getIdDomain() 
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }	     
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCustomer(),
			$object->getIdDomain(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBy($values ){
        $this->findByStmt->execute( $values );
        return new CustomerDomainCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new CustomerDomainCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
}
?>