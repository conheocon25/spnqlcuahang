<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class Supplier extends Mapper implements \MVC\Domain\SupplierFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT id, name, phone, address, description, balance FROM brasupplier");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT id, name, phone, address, description, balance FROM brasupplier WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brasupplier SET name=?, phone=?, address=?, description=?, balance=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brasupplier ( name, phone, address, description, balance ) 
                             values( ?, ?, ? , ?, ?)");
    } 
    function getCollection( array $raw ) {        
		return new CustomerCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
		
        $obj = new \MVC\Domain\Supplier( 
			$array['id'], 
			$array['name'], 
			$array['phone'], 
			$array['address'], 
			$array['description'],
			$array['balance']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "Supplier";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getName(), 
			$object->getPhone(), 
			$object->getAddress(), 
			$object->getDescription(),
			$object->getBalance()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getName(), 
			$object->getPhone(), 
			$object->getAddress(), 
			$object->getDescription(),
			$object->getBalance(),
			$object->getId()
		); 
        $this->updateStmt->execute( $values );
    }

	function doDelete( array $values ) {    
        $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }

    function selectAllStmt() {		
        return $this->selectAllStmt;
    }
	
}
?>