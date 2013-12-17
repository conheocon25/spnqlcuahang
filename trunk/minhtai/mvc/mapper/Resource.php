<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Resource extends Mapper implements \MVC\Domain\ResourceFinder{

    function __construct() {
        parent::__construct();
		$tblResource = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."resource";
		$tblOID = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_import_detail";
		$tblOED = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_export_detail";
								
		$selectAllStmt = sprintf("select * from %s", $tblResource);
		$selectStmt = sprintf("select * from %s where id=?", $tblResource);
		$updateStmt = sprintf("update %s set name=?, id_category=?, id_unit=?, size=?, price1=?, price2=?, note=? where id=?", $tblResource);
		$insertStmt = sprintf("insert into %s ( id_supplier, name, id_category, id_unit, size, price1, price2, note ) 
							values( ?, ?, ?, ?, ?, ?, ?, ?)", $tblResource);
		$deleteStmt = sprintf("delete from %s where id=?", $tblResource);
		$findBySupplierStmt = sprintf("select * from %s where id_supplier=?", $tblResource);
		$countImportStmt = sprintf("
					SELECT sum(ODD.count)  as count 
					FROM vendaf_mta_order_import as OD, vendaf_mta_order_import_detail as ODD  
					WHERE OD.id = ODD.id_order and OD.id_store=? and ODD.id_resource=?");
		$countExportStmt = sprintf("SELECT sum(ODD.count)  as count 
					FROM vendaf_mta_order_export as OD, vendaf_mta_order_export_detail as ODD  
					WHERE OD.id = ODD.id_order and OD.id_store=? and ODD.id_resource=?");
					
		$ReportStoreStmt = sprintf("
				SELECT DISTINCT IE.id as id, 
						(select S.name from vendaf_mta_supplier S,vendaf_mta_resource R where R.id = IE.id and S.id=R.id_supplier) as id_supplier, 
						(select name from vendaf_mta_resource where id = IE.id) as name,
						sum(IE.countIx) as id_category,
						sum(IE.countEx) as id_unit,
						(SELECT count FROM	vendaf_mta_store_detail	WHERE id_store = ? AND id_resource = IE.id) as size,
						sum(IE.priceIx) as price1,
						sum(IE.priceEx) as price2,
						'' as note
				FROM 
				(
					(
					SELECT ODED.id_resource id, 0 countIx, 0 priceIx, sum(ODED.count) countEx, sum(ODED.price) priceEx
					FROM vendaf_mta_order_export as ODE, vendaf_mta_order_export_detail as ODED		
					WHERE ODE.id_store = ? And ODE.id = ODED.id_order
					GROUP BY ODED.id_resource
					) UNION ALL
					(
					SELECT ODID.id_resource id, sum(ODID.count) countIx, sum(ODID.price) priceIx, 0 countEx, 0 priceEx
					FROM vendaf_mta_order_import as OIE, vendaf_mta_order_import_detail as ODID		
					WHERE OIE.id_store = ? And OIE.id = ODID.id_order
					GROUP BY ODID.id_resource
					) 
				) As IE
				GROUP BY IE.id
				");
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findBySupplierStmt = self::$PDO->prepare($findBySupplierStmt);
		$this->countImportStmt = self::$PDO->prepare($countImportStmt);
		$this->countExportStmt = self::$PDO->prepare($countExportStmt);
		$this->ReportStoreStmt = self::$PDO->prepare($ReportStoreStmt);
		
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
        return new SupplierCollection( $this->findBySupplierStmt->fetchAll(), $this );
    }
	
	function findByStore( $values) {
        $this->ReportStoreStmt->execute( $values );
        return new SupplierCollection( $this->ReportStoreStmt->fetchAll(), $this );
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
	
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
}
?>