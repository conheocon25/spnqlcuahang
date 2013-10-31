<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Resource extends Mapper implements \MVC\Domain\ResourceFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, name, quantity, priceimport, priceexport, description
							FROM braresource");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, name, quantity, priceimport, priceexport, description
							FROM braresource 
							WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braresource SET 
								name=?, quantity=?, priceimport=?, priceexport=?, description=?
							WHERE id=?");
		
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into braresource ( idcompany, name, type, unit, size,  priceimport, priceexport, dateapply, description) 
                             values( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braresource WHERE id=?");
				
    } 
    function getCollection( array $raw ) {
        return new ResourceCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Resource( 
			$array['id'],
			$array['name'],
			$array['quantity'],
			$array['priceimport'],
			$array['priceexport'],
			$array['description']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "Resource";
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
			$object->getQuantity(),
			$object->getPriceImport(),
			$object->getPriceExport(),
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
}
?>
