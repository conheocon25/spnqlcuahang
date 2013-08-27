<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class TagSelected extends Mapper implements \MVC\Domain\TagSelectedFinder{

    function __construct() {
        parent::__construct();
				
		$tblTagSelected = "sieuthimini_tag_selected";
		
		$selectAllStmt = sprintf("select * from %s", $tblTagSelected);
		$selectStmt = sprintf("select *  from %s where id=?", $tblTagSelected);
		$updateStmt = sprintf("update %s set idtag=? where id=?", $tblTagSelected);
		$insertStmt = sprintf("insert into %s (idtag) values(?)", $tblTagSelected);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTagSelected);
		$findByPageStmt = sprintf("SELECT * FROM  %s LIMIT :start,:max", $tblTagSelected);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
    } 
    function getCollection( array $raw ) {return new TagSelectedCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\TagSelected( 
			$array['id'],
			$array['idtag']
		);
        return $obj;
    }

    protected function targetClass() {return "TagSelected";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( $object->getIdTag() );
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdTag(),			
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
        return new TagSelectedCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
}
?>