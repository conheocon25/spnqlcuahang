<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class OrderExportDetail extends Mapper implements \MVC\Domain\OrderExportDetailFinder {

    function __construct() {
        parent::__construct();
		
		$tblResource 			= "giaydep_resource";
		$tblOrderExport 		= "giaydep_order_export";
		$tblOrderExportDetail 	= "giaydep_order_export_detail";
										
		$selectAllStmt = sprintf("select * from %s", $tblOrderExportDetail);
		$selectStmt = sprintf("select * from %s where id=?", $tblOrderExportDetail);
		$updateStmt = sprintf("update %s set count=?, count1=?,  price=? where id=?", $tblOrderExportDetail);
		$insertStmt = sprintf("insert into %s ( idorder, idresource, count, count1, price ) values( ?, ?, ?, ?, ?)", $tblOrderExportDetail);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderExportDetail);
				
		$findByStmt 		= sprintf("SELECT * FROM %s WHERE idorder=?", $tblOrderExportDetail);				
		$existStmt 			= sprintf("select id from %s where idorder=? and idresource=?", $tblOrderExportDetail);
		$trackByCountStmt 	= sprintf("select sum(count) from %s S inner join %s SD on S.id = SD.idorder where idresource=? and date >= ? and date <= ?", $tblOrderExport, $tblOrderExportDetail);
								
        $this->selectAllStmt 	= self::$PDO->prepare( $selectAllStmt);                            
        $this->selectStmt 		= self::$PDO->prepare( $selectStmt );
        $this->updateStmt 		= self::$PDO->prepare( $updateStmt );
        $this->insertStmt 		= self::$PDO->prepare( $insertStmt );
		$this->deleteStmt 		= self::$PDO->prepare( $deleteStmt );                            
		$this->findByStmt 		= self::$PDO->prepare( $findByStmt );
		$this->existStmt 		= self::$PDO->prepare($existStmt);			
		$this->trackByCountStmt = self::$PDO->prepare($trackByCountStmt);
    } 
    function getCollection( array $raw ) {return new OrderExportDetailCollection( $raw, $this );}
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
    protected function targetClass() {return "OrderExportDetail";}
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
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
	
	//-------------------------------------------------------
	function findBy( $values ) {		
        $this->findByStmt->execute( $values );
        return new OrderExportDetailCollection( $this->findByStmt->fetchAll(), $this );
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
	
	function trackByCount( $values ) {
        $this->trackByCountStmt->execute( $values );
		$result = $this->trackByCountStmt->fetchAll();		
		if (!isset($result) || $result==null)
			return 0;
        return $result[0][0];
    }
	
	//-------------------------------------------------------
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}	
}
?>