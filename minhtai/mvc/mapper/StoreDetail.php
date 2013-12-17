<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class StoreDetail extends Mapper implements \MVC\Domain\StoreDetailFinder{

    function __construct() {
        parent::__construct();
		
		$tblStoreDetail = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."store_detail";
								
		$selectAllStmt = sprintf("select * from %s", $tblStoreDetail);
		$selectStmt = sprintf("select * from %s where id=?", $tblStoreDetail);
		$updateStmt = sprintf("update %s set count=? where id=?", $tblStoreDetail);
		$insertStmt = sprintf("insert into %s ( id_store, id_resource, count) values( ?, ?, ?)", $tblStoreDetail);
		$deleteStmt = sprintf("delete from %s where id=?", $tblStoreDetail);
		$findByStoreStmt = sprintf("select * from %s where id_store=?", $tblStoreDetail);
		$findBySupplierStmt = sprintf("
			SELECT 
				0 as id,
				? as id_store,
				RES.id as id_resource, 
				IFNULL(SD.count, 0) as count
			FROM
				(
					SELECT *
					FROM vendaf_mta_resource
					WHERE id_supplier=?
				)
				RES
					LEFT JOIN 
				(
					SELECT *
					FROM vendaf_mta_store_detail 
					WHERE id_store = ?
				)
				SD
					ON
				RES.id = SD.id_resource
		", $tblStoreDetail);			
		$existStmt = sprintf("select id from %s where id_store=? and id_resource=?", $tblStoreDetail);
		
		$exportValueStmt = sprintf("
			SELECT
				sum(OED.count*OED.price) as value
			FROM
					vendaf_mta_order_export OE
				INNER JOIN 
					vendaf_mta_order_export_detail OED
				ON
					OE.id = OED.id_order
			WHERE 
				OE.id_store = ? AND OED.id_resource =?
		");
		
		$importValueStmt = sprintf("
			SELECT
				sum(OID.count*OID.price) as value
			FROM
					vendaf_mta_order_import OI
				INNER JOIN 
					vendaf_mta_order_import_detail OID
				ON
					OI.id = OID.id_order
			WHERE 
				OI.id_store = ? AND OID.id_resource =?
		");
		
		$initValueStmt = sprintf("
			SELECT
				count
			FROM
				%s
			WHERE 
				id_store = ? AND id_resource =?
		", $tblStoreDetail);
								
        $this->selectAllStmt = self::$PDO->prepare( $selectAllStmt);
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );
		$this->findByStoreStmt = self::$PDO->prepare($findByStoreStmt);
		$this->findBySupplierStmt = self::$PDO->prepare($findBySupplierStmt);
		$this->existStmt = self::$PDO->prepare($existStmt);		
		$this->exportValueStmt = self::$PDO->prepare($exportValueStmt);
		$this->importValueStmt = self::$PDO->prepare($importValueStmt);
		$this->initValueStmt = self::$PDO->prepare($initValueStmt);
		
    }
	
    function getCollection( array $raw ) {
        return new StoreDetailCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\StoreDetail(
			$array['id'],
			$array['id_store'],
			$array['id_resource'],
			$array['count']			
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "StoreDetail";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  			
			$object->getIdStore(),
			$object->getIdResource(), 
			$object->getCount()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate(\MVC\Domain\Object $object ) {
        $values = array( 
			$object->getCount(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
	//-------------------------------------------------------
	function findBySupplier( $values ){
        $this->findBySupplierStmt->execute( $values );
        return new StoreDetailCollection( $this->findBySupplierStmt->fetchAll(), $this );
    }	
	function findByStore( $values ){
        $this->findByStoreStmt->execute( $values );
        return new StoreDetailCollection( $this->findByStoreStmt->fetchAll(), $this );
    }
	
	function trackBy( $values ) {		
        $this->trackByStmt->execute( $values );
        return new StoreDetailCollection( $this->trackByStmt->fetchAll(), $this );
    }
	
	function exist($values) {
		$this->existStmt->execute($values);
		$result = $this->existStmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return -1;
		}
    }
	
	function exportValue($values) {
		$this->exportValueStmt->execute($values);
		$result = $this->exportValueStmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return 0;
		}
    }
	
	function importValue($values) {
		$this->importValueStmt->execute($values);
		$result = $this->importValueStmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return 0;
		}
    }
	
	function initValue($values) {
		$this->initValueStmt->execute($values);
		$result = $this->initValueStmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return 0;
		}
    }
	//-------------------------------------------------------
    function selectStmt() {
        return $this->selectStmt;
    }
	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	function create( $prefix ){
		$tblStoreDetail = $prefix."order_import_detail";
		$tblOrderImport = $prefix."order_import";
		$tblStoreDetail = $prefix."resource";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
		", $tblStoreDetail, $tblStoreDetail, $tblStoreDetail, 
			$tblStoreDetail."_1", $tblOrderImport,
			$tblStoreDetail."_2", $tblStoreDetail
		);
		$this->createStmt = self::$PDO->prepare($createStmt);
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblOID = $prefix."order_import_detail";
		$dropStmt = sprintf("DROP TABLE %s", $tblOID);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>