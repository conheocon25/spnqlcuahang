<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Page extends Mapper implements \MVC\Domain\PageFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "");
        $this->selectStmt = self::$PDO->prepare( 
                            "");
        $this->updateStmt = self::$PDO->prepare( 
                            "");
        $this->insertStmt = self::$PDO->prepare( 
                            "");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from tblPage where id=?");		
    } 
    function getCollection( array $raw ) {
        return new PageCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Page( 
			$array['id'],  
			$array['name'], 
			$array['picture']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Page";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
		
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
		
}
?>