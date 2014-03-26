<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Category1 extends Mapper implements \MVC\Domain\Category1Finder {

    function __construct() {
        parent::__construct();
		
		$tblCategory1 = "shopc_category1";
						
		$selectAllStmt = sprintf("select * from %s order by name", $tblCategory1);
		$selectStmt = sprintf("select * from %s where id=?", $tblCategory1);
		$updateStmt = sprintf("update %s set id_category=?, name=?, `order`=? where id=?", $tblCategory1);
		$insertStmt = sprintf("insert into %s ( id_category, name, `order`) values(?, ?, ?)", $tblCategory1);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCategory1);
		$findByStmt = sprintf("SELECT * FROM  %s WHERE id_category=?", $tblCategory1);
		$findByPageStmt = sprintf("SELECT * FROM  %s LIMIT :start,:max", $tblCategory1);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
									
    } 
    function getCollection( array $raw ) {return new Category1Collection( $raw, $this );}
    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\Category1( 
			$array['id'],
			$array['id_category'],
			$array['name'],
			$array['order']
		);
        return $obj;
    }
	
    protected function targetClass() {  return "Category1";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCategory(),
			$object->getName(),
			$object->getOrder()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCategory(),
			$object->getName(),
			$object->getOrder(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}	
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBy(array $values) {
		$this->findByStmt->execute( $values );
        return new Category1Collection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new Category1Collection( $this->findByPageStmt->fetchAll(), $this );
    }
	
}
?>