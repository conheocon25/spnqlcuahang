<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Supplier extends Mapper implements \MVC\Domain\SupplierFinder {

    function __construct() {
        parent::__construct();
		$tblSupplier = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."supplier";
						
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblSupplier);
		$selectStmt = sprintf("select * from %s where id=?", $tblSupplier);
		$updateStmt = sprintf("update %s set type=?, name=?, phone=?, address=?, note=?, debt=? where id=?", $tblSupplier);
		$insertStmt = sprintf("insert into %s ( type, name, phone, address, note, debt ) 
							values( ?, ?, ?, ?, ?, ?)", $tblSupplier);
		$deleteStmt = sprintf("delete from %s where id=?", $tblSupplier);
		$findBy1Stmt = sprintf("select * from %s where type=1", $tblSupplier);
		$findBy2Stmt = sprintf("select * from %s where type=2", $tblSupplier);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findBy1Stmt = self::$PDO->prepare($findBy1Stmt);
		$this->findBy2Stmt = self::$PDO->prepare($findBy2Stmt);
		
    } 
    function getCollection( array $raw ) {
        return new SupplierCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Supplier(
			$array['id'],
			$array['type'], 
			$array['name'], 
			$array['phone'],	
			$array['address'],
			$array['note'],
			$array['debt']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Supplier";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getType(), 
			$object->getName(), 
			$object->getPhone(),	
			$object->getAddress(),	
			$object->getNote(),
			$object->getDebt()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getType(), 
			$object->getName(), 
			$object->getPhone(),
			$object->getAddress(),
			$object->getNote(),
			$object->getDebt(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	function findBy1($values ) {	
        $this->findBy1Stmt->execute( $values );
        return new PaidPondCollection( $this->findBy1Stmt->fetchAll(), $this );
    }
	function findBy2($values ) {	
        $this->findBy2Stmt->execute( $values );
        return new PaidPondCollection( $this->findBy2Stmt->fetchAll(), $this );
    }
	
}
?>