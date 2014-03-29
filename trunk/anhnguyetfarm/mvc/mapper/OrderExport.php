<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class OrderExport extends Mapper implements \MVC\Domain\OrderExportFinder {

    function __construct() {
        parent::__construct();
		
		$tblOrderExport = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_export";
		$tblOrderExportDetail = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_export_detail";
										
		$selectAllStmt = sprintf("select * from %s", $tblOrderExport);
		$selectStmt = sprintf("select * from %s where id=?", $tblOrderExport);
		$updateStmt = sprintf("update %s set id_pond=?, id_store=?, date=?, note=? where id=?", $tblOrderExport);
		$insertStmt = sprintf("insert into %s ( id_pond, id_store, date, note) values( ?, ?, ?, ?)", $tblOrderExport);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderExport);
		$exist1Stmt = sprintf("select id from %s where id_pond=? and date=? and note='TA'", $tblOrderExport);
		$exist2Stmt = sprintf("select id from %s where id_pond=? and date=? and note='TH'", $tblOrderExport);
		
		$findByStmt = sprintf("select * from %s where id_pond=? order by date DESC", $tblOrderExport);
		$findByTop10Stmt = sprintf("select * from %s where id_pond=? order by date DESC limit 10", $tblOrderExport);
		
		$findByTrackingStmt = sprintf("select * from %s where date >= ? AND date <= ? order by date DESC", $tblOrderExport);
		$findByTracking1Stmt = sprintf("select * from  %s where id_pond=? AND date >= ? AND date <= ? order by date", $tblOrderExport);
		$findByTracking2Stmt = sprintf("
			select * from %s where
				id_pond=? AND date >= ? AND date <= ? AND note = 'TA'
			order by 
				date
			"
		, $tblOrderExport);
	
		$findByTracking3Stmt = sprintf("
			select * from %s where
				id_pond=? AND date >= ? AND date <= ? AND note = 'TH'
			order by 
				date
			"
		, $tblOrderExport);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );
		$this->findByStmt = self::$PDO->prepare( $findByStmt );
		$this->exist1Stmt = self::$PDO->prepare( $exist1Stmt );
		$this->exist2Stmt = self::$PDO->prepare( $exist2Stmt );
		$this->findByTop10Stmt = self::$PDO->prepare( $findByTop10Stmt );
		$this->findByTrackingStmt = self::$PDO->prepare( $findByTrackingStmt );
		$this->findByTracking1Stmt = self::$PDO->prepare( $findByTracking1Stmt );
		$this->findByTracking2Stmt = self::$PDO->prepare( $findByTracking2Stmt );
		$this->findByTracking3Stmt = self::$PDO->prepare( $findByTracking3Stmt );
    }
	
    function getCollection( array $raw ) {
        return new OrderExportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\OrderExport(
			$array['id'],
			$array['id_pond'], 
			$array['id_store'],
			$array['date'],	
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "OrderExport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdPond(), 
			$object->getIdStore(), 
			$object->getDate(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdPond(), 
			$object->getIdStore(), 
			$object->getDate(),
			$object->getNote(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
	//-------------------------------------------------------
	function findBy(array $values) {
        $this->findByStmt->execute( $values );
        return new OrderExportCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByTop10(array $values) {
        $this->findByTop10Stmt->execute( $values );
        return new OrderExportCollection( $this->findByTop10Stmt->fetchAll(), $this );
    }
	
	function findByTracking(array $values){
        $this->findByTrackingStmt->execute( $values );
        return new OrderExportCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	
	function findByTracking1(array $values){
        $this->findByTracking1Stmt->execute( $values );
        return new OrderExportCollection( $this->findByTracking1Stmt->fetchAll(), $this );
    }
	
	function findByTracking2(array $values){
        $this->findByTracking2Stmt->execute( $values );
        return new OrderExportCollection( $this->findByTracking2Stmt->fetchAll(), $this );
    }
	
	function findByTracking3(array $values){
        $this->findByTracking3Stmt->execute( $values );
        return new OrderExportCollection( $this->findByTracking3Stmt->fetchAll(), $this );
    }
	
	function exist1($values){
		$this->exist1Stmt->execute($values);
		$result = $this->exist1Stmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return -1;			
		}
    }
	
	function exist2($values){
		$this->exist2Stmt->execute($values);
		$result = $this->exist2Stmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return -1;			
		}
    }
	
	//-------------------------------------------------------
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
		
}
?>