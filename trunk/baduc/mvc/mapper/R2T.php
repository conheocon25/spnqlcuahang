<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class R2T extends Mapper implements \MVC\Domain\R2TFinder{

    function __construct() {
        parent::__construct();
		$tblR2T = "tbl_r2t";
				
		$selectAllStmt = sprintf("select * from %s", $tblR2T);
		$selectStmt = sprintf("select * from %s where id=?", $tblR2T);
		$updateStmt = sprintf("update %s set id_resource=?, id_tag=? where id=?", $tblR2T);
		$insertStmt = sprintf("insert into %s (id_resource, id_tag) values( ?, ?)", $tblR2T);
		$deleteStmt = sprintf("delete from %s where id=?", $tblR2T);
		$findByResourceStmt = sprintf("select * from %s where id_resource=?", $tblR2T);
		$findByTagStmt = sprintf("select * from %s where id_tag=?", $tblR2T);
										
		$this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);		
		$this->findByResourceStmt = self::$PDO->prepare($findByResourceStmt);
		$this->findByTagStmt = self::$PDO->prepare($findByTagStmt);
		
    }
	
    function getCollection( array $raw ) {return new R2TCollection( $raw, $this );}

    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\R2T(
			$array['id'],	
			$array['id_resource'],
			$array['id_tag']			
		);
        return $obj;
    }

    protected function targetClass(){return "R2T";}

    protected function doInsert( \MVC\Domain\Object $object ){
        $values = array(			
			$object->getIdResource(),
			$object->getIdTag()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
	    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(				
			$object->getIdResource(),
			$object->getIdTag(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
	
	function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findByResource( $values ) {
        $this->findByResourceStmt->execute( $values );
		return new R2TCollection( $this->findByResourceStmt->fetchAll(), $this );
    }
	
	function findByTag( $values ) {
        $this->findByTagStmt->execute( $values );
		return new R2TCollection( $this->findByTagStmt->fetchAll(), $this );
    }
}
?>