<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class OrderExportDetail extends Mapper implements \MVC\Domain\OrderExportDetailFinder {

    function __construct() {
        parent::__construct();
		
		$tblResource = "giaydep_resource";
		$tblOrderImport = "giaydep_order_export";
		$tblOrderExportDetail = "giaydep_order_export_detail";
										
		$selectAllStmt = sprintf("select * from %s", $tblOrderExportDetail);
		$selectStmt = sprintf("select * from %s where id=?", $tblOrderExportDetail);
		$updateStmt = sprintf("update %s set count=?, count1=?,  price=? where id=?", $tblOrderExportDetail);
		$insertStmt = sprintf("insert into %s ( idorder, idresource, count, count1, price ) values( ?, ?, ?, ?, ?)", $tblOrderExportDetail);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderExportDetail);
				
		$trackByStmt = sprintf("
							SELECT
								IFNULL(0, ODI.id) as id,
								(?) as idorder,
								P.id as idresource,
								ODI.count,
								ODI.count1,
								IFNULL(ODI.price, P.price) as price
							FROM 
							(
								SELECT *
								FROM %s
								WHERE idsupplier = ?
							) P LEFT JOIN
							(
								SELECT *
								FROM %s
								WHERE idorder = ?
							) ODI
							ON P.id = ODI.idresource
		
		", $tblResource, $tblOrderExportDetail);
				
		$existStmt = sprintf("select id from %s where idorder=? and idresource=?", $tblOrderExportDetail);
								
        $this->selectAllStmt = self::$PDO->prepare( $selectAllStmt);                            
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );                            
		$this->trackByStmt = self::$PDO->prepare($trackByStmt);				
		$this->existStmt = self::$PDO->prepare($existStmt);			
    } 
    function getCollection( array $raw ) {
        return new OrderExportDetailCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\OrderExportDetail( 
			$array['id'],  
			$array['idorder'], 
			$array['idresource'], 
			$array['count'],	
			$array['count1'],
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
			$object->getCount1(),
			$object->getPrice()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate(\MVC\Domain\Object $object ) {
        $values = array( 
			$object->getCount(),
			$object->getCount1(),
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
	
	function trackByExport( $values ) {
        $this->trackByExportStmt->execute( $values );
		$result1 = $this->trackByExportStmt->fetchAll();
		
		$this->trackByExportStmt->execute( $values );
		$result2 = $this->trackByExportStmt->fetchAll();
		
		if (!isset($result) || $result==null)
			return 0;
        return $result1[0][0]/$result2[0][0];
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
	
	//-------------------------------------------------------
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
}
?>