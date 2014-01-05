<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class CustomerLog extends Mapper implements \MVC\Domain\CustomerLogFinder{

    function __construct() {
        parent::__construct();
		
		$tblCustomerLog = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."customer_log";
	
		$selectAllStmt = sprintf("select * from %s", $tblCustomerLog);
		$selectStmt = sprintf("select * from %s where id=?", $tblCustomerLog);
		$updateStmt = sprintf("update %s SET id_order=?, id_customer=?, paid_value=?  where id=?", $tblCustomerLog);
		$insertStmt = sprintf("INSERT into %s ( id_order, id_customer, paid_value ) values( ?, ?, ?)", $tblCustomerLog);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCustomerLog);		
		$deleteByStmt = sprintf("delete from %s where id_customer=?", $tblCustomerLog);
		$findByStmt = sprintf("SELECT * from %s where id_customer=?", $tblCustomerLog);
		$findPreStmt 	= sprintf("select *  from %s where id_customer=? AND id<? ORDER BY id DESC", $tblCustomerLog);
		
		$this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
		$this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->deleteByStmt = self::$PDO->prepare($deleteByStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findPreStmt = self::$PDO->prepare($findPreStmt);
    } 
    function getCollection( array $raw ) {return new CustomerLogCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\CustomerLog( 
			$array['id'],
			$array['id_order'],
			$array['id_customer'],
			$array['paid_value']				
		);
        return $obj;
    }
	
    protected function targetClass() {return "CustomerLog";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdOrder(),
			$object->getIdCustomer(),
			$object->getPaidValue()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdOrder(),
			$object->getIdCustomer(),
			$object->getPaidValue(),
			$object->getId()
		); 
        $this->updateStmt->execute( $values );
    }
	function doDelete( array $values ) {$this->deleteStmt->execute( $values );}	
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	function deleteBy($values ) {
        $this->deleteByStmt->execute( $values );        
    }
	
	function findBy($values ) {	
        $this->findByStmt->execute( $values );
        return new CustomerLogCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findPre(array $values) {
		$this->findPreStmt->execute( $values );
        return new CustomerLogCollection( $this->findPreStmt->fetchAll(), $this );
    }		
}
?>