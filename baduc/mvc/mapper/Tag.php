<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Tag extends Mapper implements \MVC\Domain\TagFinder{

    function __construct() {
        parent::__construct();
				
		$tblTag = "tbl_tag";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblTag);
		$selectStmt = sprintf("select *  from %s where id=?", $tblTag);
		$updateStmt = sprintf("update %s set name=? where id=?", $tblTag);
		$insertStmt = sprintf("insert into %s (name) values(?)", $tblTag);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTag);
		$findByPageStmt = sprintf("SELECT * FROM  %s ORDER BY name LIMIT :start,:max", $tblTag);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
    } 
    function getCollection( array $raw ) {
        return new TagCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Tag( 
			$array['id'],
			$array['name']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Tag";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( $object->getName() );
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),			
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new SupplierCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
}
?>