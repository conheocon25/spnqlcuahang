<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class OrderExportDetailExtra extends Mapper implements \MVC\Domain\OrderExportDetailExtraFinder {

    function __construct() {
        parent::__construct();
		
		$tblResource = "vendaf_mta_resource";
		$tblOrderExportDetail = "vendaf_mta_order_export_detail";
		$tblOrderExportDetailExtra = "vendaf_mta_order_export_detail_extra";
								
		$selectAllStmt = sprintf("select * from %s", $tblOrderExportDetailExtra);
		$selectStmt = sprintf("select * from %s where id=?", $tblOrderExportDetailExtra);
		$updateStmt = sprintf("update %s set count=?, price=? where id=?", $tblOrderExportDetailExtra);
		$insertStmt = sprintf("insert into %s ( id_order, id_resource, count, price ) values( ?, ?, ?, ?)", $tblOrderExportDetailExtra);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderExportDetailExtra);		
		$existStmt = sprintf("select id from %s where id_order=? and id_resource=?", $tblOrderExportDetailExtra);
		$findByStmt = sprintf("select * from %s where id_order=?", $tblOrderExportDetailExtra);
										
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
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
			
}
?>