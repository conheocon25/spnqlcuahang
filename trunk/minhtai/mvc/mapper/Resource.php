<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Resource extends Mapper implements \MVC\Domain\ResourceFinder{

    function __construct() {
        parent::__construct();
		$tblResource 	= "vendaf_mta_resource";
		$tblOID 		= "vendaf_mta_order_import_detail";
		$tblOED 		= "vendaf_mta_order_export_detail";
								
		$selectAllStmt = sprintf("select * from %s", $tblResource);
		$selectStmt = sprintf("select * from %s where id=?", $tblResource);
		$updateStmt = sprintf("update %s set name=?, id_category=?, id_unit=?, size=?, price1=?, price2=?, note=? where id=?", $tblResource);
		$insertStmt = sprintf("insert into %s ( id_supplier, name, id_category, id_unit, size, price1, price2, note ) 
							values( ?, ?, ?, ?, ?, ?, ?, ?)", $tblResource);
		$deleteStmt = sprintf("delete from %s where id=?", $tblResource);
		$findBySupplierStmt = sprintf("select * from %s where id_supplier=?", $tblResource);
		$findByPageStmt = sprintf("SELECT * FROM  %s WHERE id_supplier=:id_supplier ORDER BY name LIMIT :start,:max", $tblResource);
		
		$countImportStmt = sprintf("
					SELECT sum(ODD.count)  as count 
					FROM vendaf_mta_order_import as OD, vendaf_mta_order_import_detail as ODD  
					WHERE OD.id = ODD.id_order and OD.id_store=? and ODD.id_resource=?");
		$countExportStmt = sprintf("SELECT sum(ODD.count)  as count 
					FROM vendaf_mta_order_export as OD, vendaf_mta_order_export_detail as ODD  
					WHERE OD.id = ODD.id_order and OD.id_store=? and ODD.id_resource=?");
		$findByNameStmt = sprintf("select * from %s where name like :name ORDER BY name", $tblResource);			
						
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findBySupplierStmt = self::$PDO->prepare($findBySupplierStmt);
		$this->findByPageStmt 	= self::$PDO->prepare($findByPageStmt);
		$this->findByNameStmt 	= self::$PDO->prepare($findByNameStmt);
		$this->countImportStmt 	= self::$PDO->prepare($countImportStmt);
		$this->countExportStmt 	= self::$PDO->prepare($countExportStmt);		
		
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
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
	function findBySupplier(array $values) {
        $this->findBySupplierStmt->execute( $values );
        return new ResourceCollection( $this->findBySupplierStmt->fetchAll(), $this );
    }
	
	function findByName( $values ) {		
		$this->findByNameStmt->bindValue(':name', $values[0]."%", \PDO::PARAM_STR);
		$this->findByNameStmt->execute();
        return new ResourceCollection( $this->findByNameStmt->fetchAll(), $this );
    }
			
	function countImport( $values ) {	
        $this->countImportStmt->execute( $values );
		$result = $this->countImportStmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return 0;
		}
    }
	
	function countExport( $values ){
        $this->countExportStmt->execute( $values );
		$result = $this->countExportStmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return 0;
		}
    }
	
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':id_supplier', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new ResourceCollection( $this->findByPageStmt->fetchAll(), $this );
    }
}
?>