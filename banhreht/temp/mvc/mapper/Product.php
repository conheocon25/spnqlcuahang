<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Product extends Mapper implements \MVC\Domain\ProductFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, name, type, weight, quantity, fullname, description 
							FROM braproduct");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, name, type, weight, quantity, fullname, description
							FROM braproduct WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braproduct SET 
								name=?, type=?, weight=?, quantity=?, fullname=?, description=?
							WHERE id=?");
		
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into braproduct ( idcompany, name, type, unit, size,  priceimport, priceexport, dateapply, description) 
                             values( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braproduct WHERE idcompany=? and id=?");
		
		$this->findByTypeStmt = self::$PDO->prepare( 
                            "SELECT 
								id, name, type, weight, quantity, fullname, description
							FROM braproduct WHERE type=?");
    } 
    function getCollection( array $raw ) {
        return new ProductCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        //echo "co vo day";
		//print_r($array);
		$obj = new \MVC\Domain\Product( 
			$array['id'], 			
			$array['name'], 
			$array['type'], 
			$array['weight'],
			$array['quantity'], 			
			$array['fullname'], 
			$array['description']
		);
		//echo $obj->getFullName();
        return $obj;
    }
	
    protected function targetClass() {
        return "\MVC\Domain\Product";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 						
		); 
		
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getName(),
			$object->getType(),
			$object->getWeight(),
			$object->getQuantity(),
			$object->getFullName(),
			$object->getDescription(),
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
	function findByType( $values ) {		
        $this->findByTypeStmt->execute( $values);
        return new ProductCollection( $this->findByTypeStmt->fetchAll(), $this );
    }
}
?>
