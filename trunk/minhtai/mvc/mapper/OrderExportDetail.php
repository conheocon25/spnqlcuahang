<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class OrderExportDetail extends Mapper implements \MVC\Domain\OrderExportDetailFinder {

    function __construct() {
        parent::__construct();
		
		$tblResource = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."resource";
		$tblOrderExportDetail = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_export_detail";
								
		$selectAllStmt = sprintf("select * from %s", $tblOrderExportDetail);
		$selectStmt = sprintf("select * from %s where id=?", $tblOrderExportDetail);
		$updateStmt = sprintf("update %s set count=?, price=? where id=?", $tblOrderExportDetail);
		$insertStmt = sprintf("insert into %s ( id_order, id_resource, count, price ) values( ?, ?, ?, ?)", $tblOrderExportDetail);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderExportDetail);		
		$existStmt = sprintf("select id from %s where id_order=? and id_resource=?", $tblOrderExportDetail);
		$findByStmt = sprintf("select * from %s where id_order=?", $tblOrderExportDetail);
								
        $this->selectAllStmt = self::$PDO->prepare( $selectAllStmt);
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );                            		
		$this->existStmt = self::$PDO->prepare($existStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		
    } 
    function getCollection( array $raw ) {
        return new OrderExportDetailCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\OrderExportDetail( 
			$array['id'],  
			$array['id_order'], 
			$array['id_resource'], 
			$array['count'],	
			$array['price']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "OrderExportDetail";
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
        return new OrderExportDetailCollection( $this->trackByStmt->fetchAll(), $this );
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
        return new OrderExportDetailCollection( $this->findByStmt->fetchAll(), $this );
    }
	//-------------------------------------------------------
    function selectStmt() {
        return $this->selectStmt;
    }
	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	function create( $prefix ){
		$tblOrderExportDetail = $prefix."order_export_detail";
		$tblOrderImport = $prefix."order_import";
		$tblResource = $prefix."resource";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
		", $tblOrderExportDetail, $tblOrderExportDetail, $tblOrderExportDetail, 
			$tblOrderExportDetail."_1", $tblOrderImport,
			$tblOrderExportDetail."_2", $tblResource
		);
		$this->createStmt = self::$PDO->prepare($createStmt);
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblOID = $prefix."order_export_detail";
		$dropStmt = sprintf("DROP TABLE %s", $tblOID);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>