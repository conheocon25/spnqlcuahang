<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Pond extends Mapper implements \MVC\Domain\PondFinder {

    function __construct() {
        parent::__construct();
				
		$tblPond = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."pond";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblPond);
		$selectStmt = sprintf("select *  from %s where id=?", $tblPond);
		$updateStmt = sprintf("update %s set name=?, address=?, note=? where id=?", $tblPond);
		$insertStmt = sprintf("insert into %s ( name, address, note) values(?, ?, ?)", $tblPond);
		$deleteStmt = sprintf("delete from %s where id=?", $tblPond);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		
    } 
    function getCollection( array $raw ) {
        return new PondCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\Pond(
			$array['id'], 
			$array['name'],
			$array['address'],
			$array['note'] 
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Pond";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getAddress(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getAddress(),
			$object->getNote(),
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
	function create( $prefix ){
		$tblPond = $prefix."Pond";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (			
		", $tblPond, $tblPond);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblPond = $prefix."Pond";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblPond);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>