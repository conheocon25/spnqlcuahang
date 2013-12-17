<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class OrderExportDetailExtra extends Mapper implements \MVC\Domain\OrderExportDetailExtraFinder {

    function __construct() {
        parent::__construct();
		
		$tblResource = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."resource";
		$tblOrderExportDetail = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_export_detail";
		$tblOrderExportDetailExtra = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_export_detail_extra";
								
		$selectAllStmt = sprintf("select * from %s", $tblOrderExportDetailExtra);
		$selectStmt = sprintf("select * from %s where id=?", $tblOrderExportDetailExtra);
		$updateStmt = sprintf("update %s set count=?, price=? where id=?", $tblOrderExportDetailExtra);
		$insertStmt = sprintf("insert into %s ( id_order, id_resource, count, price ) values( ?, ?, ?, ?)", $tblOrderExportDetailExtra);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderExportDetailExtra);		
		$existStmt = sprintf("select id from %s where id_order=? and id_resource=?", $tblOrderExportDetailExtra);
		$findByStmt = sprintf("			
			select
				ifnull(OEDE.id, 0) as id,
				OED.id_order as id_order,
				OED.id_resource as id_resource,
				ifnull(OEDE.count, 0) as count,
				ifnull(OEDE.price, 0) as price
			from
				%s OED left join
				%s OEDE on
				OED.id_order = OEDE.id_order AND OED.id_resource = OEDE.id_resource
			where 
				OED.id_order=?
		", $tblOrderExportDetail, $tblOrderExportDetailExtra);
								
        $this->selectAllStmt = self::$PDO->prepare( $selectAllStmt);
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );                            		
		$this->existStmt = self::$PDO->prepare($existStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);		
    } 
    function getCollection( array $raw ) {
        return new OrderExportDetailExtraCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\OrderExportDetailExtra( 
			$array['id'],  
			$array['id_order'], 
			$array['id_resource'], 
			$array['count'],	
			$array['price']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "OrderExportDetailExtra";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdOrder(), 
			$object->getIdResource(), 
			$object->getCount(),
			$object->getPrice()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate(\MVC\Domain\Object $object ) {
        $values = array( 
			$object->getCount(),
			$object->getPrice(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
	//-------------------------------------------------------
	function trackBy( $values ) {		
        $this->trackByStmt->execute( $values );
        return new OrderExportDetailExtraCollection( $this->trackByStmt->fetchAll(), $this );
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
	
	function findBy( $values ) {		
        $this->findByStmt->execute( $values );
        return new OrderExportDetailExtraCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	//-------------------------------------------------------
    function selectStmt() {
        return $this->selectStmt;
    }
	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	function create( $prefix ){
		$tblOrderExportDetailExtra = $prefix."order_export_detail_extra";
		$tblOrderImport = $prefix."order_import";
		$tblResource = $prefix."resource";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
		", $tblOrderExportDetailExtra, $tblOrderExportDetailExtra, $tblOrderExportDetailExtra, 
			$tblOrderExportDetailExtra."_1", $tblOrderImport,
			$tblOrderExportDetailExtra."_2", $tblResource
		);
		$this->createStmt = self::$PDO->prepare($createStmt);
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	
	function drop( $prefix ){
		$tblOID = $prefix."order_export_detail_extra";
		$dropStmt = sprintf("DROP TABLE %s", $tblOID);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
	
}
?>