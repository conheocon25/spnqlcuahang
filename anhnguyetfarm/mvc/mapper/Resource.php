<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Resource extends Mapper implements \MVC\Domain\ResourceFinder{

    function __construct() {
        parent::__construct();
		$tblResource = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."resource";
						
		$selectAllStmt = sprintf("select * from %s", $tblResource);
		$selectStmt = sprintf("select * from %s where id=?", $tblResource);
		$updateStmt = sprintf("update %s set name=?, id_category=?, id_unit=?, size=?, price1=?, price2=?, note=? where id=?", $tblResource);
		$insertStmt = sprintf("insert into %s ( id_supplier, name, id_category, id_unit, size, price1, price2, note ) 
							values( ?, ?, ?, ?, ?, ?, ?, ?)", $tblResource);
		$deleteStmt = sprintf("delete from %s where id=?", $tblResource);
		$findBySupplierStmt = sprintf("select * from %s where id_supplier=? ORDER BY name", $tblResource);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findBySupplierStmt = self::$PDO->prepare($findBySupplierStmt);
		
    } 
    function getCollection( array $raw ) {
        return new ResourceCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Resource( 
			$array['id'],
			$array['id_supplier'],
			$array['name'],
			$array['id_category'],
			$array['id_unit'],
			$array['size'],
			$array['price1'],
			$array['price2'],
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Resource";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdSupplier(),
			$object->getName(),
			$object->getIdCategory(),
			$object->getIdUnit(),
			$object->getSize(),
			$object->getPrice1(),
			$object->getPrice2(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $Id = self::$PDO->lastInsertId();
        $object->setId( $Id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getName(),
			$object->getIdCategory(),
			$object->getIdUnit(),
			$object->getSize(),
			$object->getPrice1(),
			$object->getPrice2(),
			$object->getNote(),
			$object->getId()
		);
		//print_r($values);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
	function findBySupplier(array $values) {
        $this->findBySupplierStmt->execute( $values );
        return new SupplierCollection( $this->findBySupplierStmt->fetchAll(), $this );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	function create( $prefix ){
		$tblResource = $prefix."resource";
		$tblSupplier = $prefix."supplier";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
				`id` int(9) NOT NULL AUTO_INCREMENT,
			
			INSERT INTO %s (`id`, `idsupplier`, `name`, `unit`, `price`, `description`) VALUES
			(1, 1, 'Nuoc đá ống', 'kg', 1000, '1 kg'),
			(2, 1, 'Nước đá ướp', 'kg', 8000, ''),
						
			ALTER TABLE %s
				
		", $tblResource, $tblResource, $tblResource, $tblResource, $tblResource."_1", $tblSupplier);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblResource = $prefix."resource";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblResource);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>