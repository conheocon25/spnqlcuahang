<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Resource extends Mapper implements \MVC\Domain\ResourceFinder {

    function __construct() {
        parent::__construct();
		$tblResource = "giaydep_resource";
						
		$selectAllStmt = sprintf("select * from %s", $tblResource);
		$selectStmt = sprintf("select * from %s where id=?", $tblResource);
		$updateStmt = sprintf("update %s set name=?, unit=?, price_import=?, price_export=?, description=?, image=? where id=?", $tblResource);
		$insertStmt = sprintf("insert into %s ( idsupplier, name, unit, price_import, price_export, description, image ) 
							values( ?, ?, ?, ?, ?, ?, ?)", $tblResource);
		$deleteStmt = sprintf("delete from %s where id=?", $tblResource);
		$findBySupplierStmt = sprintf("select * from %s where idsupplier=?", $tblResource);
		$findByPageStmt = sprintf("
							SELECT *
							FROM %s
							WHERE idsupplier=:idsupplier
							LIMIT :start,:max
				", $tblResource);
		$findByNameStmt = sprintf("select * from %s where name like :name ORDER BY name", $tblResource);		
				
        $this->selectAllStmt 		= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 			= self::$PDO->prepare($selectStmt);
        $this->updateStmt 			= self::$PDO->prepare($updateStmt);
        $this->insertStmt 			= self::$PDO->prepare($insertStmt);
		$this->deleteStmt 			= self::$PDO->prepare($deleteStmt);
		$this->findBySupplierStmt 	= self::$PDO->prepare($findBySupplierStmt);
		$this->findByNameStmt 		= self::$PDO->prepare($findByNameStmt);
		$this->findByPageStmt 		= self::$PDO->prepare($findByPageStmt);
		
    } 
    function getCollection( array $raw ) {return new ResourceCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Resource( 
			$array['id'],
			$array['idsupplier'],
			$array['name'],
			$array['unit'],				
			$array['price_import'],
			$array['price_export'],
			$array['description'],
			$array['image']
		);
        return $obj;
    }
	
    protected function targetClass(){return "Resource";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdSupplier(),
			$object->getName(),	
			$object->getUnit(),	
			$object->getPriceImport(),	
			$object->getPriceExport(),	
			$object->getDescription(),
			$object->getImage()	
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getUnit(),
			$object->getPriceImport(),
			$object->getPriceExport(),
			$object->getDescription(),
			$object->getImage(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}			
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBySupplier(array $values) {
        $this->findBySupplierStmt->execute( $values );
        return new ResourceCollection( $this->findBySupplierStmt->fetchAll(), $this );
    }
	
	function findByName($values) {        
		$this->findByNameStmt->bindValue(':name', $values, \PDO::PARAM_STR);		
		$this->findByNameStmt->execute();		
        return new ResourceCollection( $this->findByNameStmt->fetchAll(), $this );
    }
	
	
	function findByPage( $values ) {
		$this->findByPageStmt->bindValue(':idsupplier', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new ResourceCollection( $this->findByPageStmt->fetchAll(), $this );
    }
}
?>