<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Post extends Mapper implements \MVC\Domain\PostFinder {
    function __construct() {
        parent::__construct();
				
		$tblPost = "shopc_post";
		
		$selectAllStmt 	= sprintf("select * from %s", $tblPost);
		$selectStmt 	= sprintf("select *  from %s where id=?", $tblPost);
		$updateStmt 	= sprintf("update %s set title=?, content=?, `key`=? where id=?", $tblPost);
		$insertStmt 	= sprintf("insert into %s ( title, content, `key`) values(?, ?, ?)", $tblPost);
		$deleteStmt 	= sprintf("delete from %s where id=?", $tblPost);
		$findByStmt 	= sprintf("select *  from %s where id_category=?", $tblPost);		
		$findByKeyStmt 	= sprintf("select *  from %s where `key`=?", $tblPost);
				
				
        $this->selectAllStmt 	= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 		= self::$PDO->prepare($selectStmt);
        $this->updateStmt 		= self::$PDO->prepare($updateStmt);
        $this->insertStmt 		= self::$PDO->prepare($insertStmt);
		$this->deleteStmt 		= self::$PDO->prepare($deleteStmt);
		$this->findByStmt 		= self::$PDO->prepare($findByStmt);
		$this->findByKeyStmt 	= self::$PDO->prepare($findByKeyStmt);

    } 
    function getCollection( array $raw ) {
        return new PostCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Post( 
			$array['id'],
			$array['title'],
			$array['content'],						
			$array['key']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Post";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getTitle(),
			$object->getContent(),						
			$object->getKey()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getTitle(),
			$object->getContent(),						
			$object->getKey(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBy( $values ){
        $this->findByStmt->execute( $values );
        return new PostCollection( $this->findByStmt->fetchAll(), $this);
    }
	
	function findByKey( $values ) {	
		$this->findByKeyStmt->execute( array($values) );
        $array = $this->findByKeyStmt->fetch();
        $this->findByKeyStmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;		
    }
}
?>