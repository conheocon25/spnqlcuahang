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
		$updateStmt = sprintf("update %s set id_customer=?, id_store=?, date=?, note=? where id=?", $tblOrderExport);
		$insertStmt = sprintf("insert into %s ( id_customer, id_store, date, note) values( ?, ?, ?, ?)", $tblOrderExport);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderExport);
		$findByStmt = sprintf("select * from %s where id_customer=? order by date DESC", $tblOrderExport);
		$findByTop10Stmt = sprintf("
			select * from %s where id_customer=? order by date DESC limit 30
		", $tblOrderExport);
		
		$findByPageStmt = sprintf(
			"SELECT 
				*
			FROM 
				%s 
			WHERE id_customer=:id_customer
			ORDER BY date desc
			LIMIT :start,:max"
		, $tblOrderExport);
		
		$findByTrackingStmt = sprintf("
			select
				*
			from 
				%s
			where
				date >= ? AND date <= ?
			order by 
				date DESC
			"
		, $tblOrderExport);
		
		$findByTracking1Stmt = sprintf("
			select
				*
			from 
				%s
			where
				id_customer=? AND date >= ? AND date <= ?
			order by 
				date DESC
			"
		, $tblOrderExport);
	
		$this->countAllStmt = self::$PDO->prepare( 
                            "SELECT 	
								count(id)
							FROM 
								sga_customer
				");
		$countAllStmt = sprintf("select count(id) from %s where id_customer=?", $tblOrderExport);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );
		$this->findByStmt = self::$PDO->prepare( $findByStmt );
		$this->findByTop10Stmt = self::$PDO->prepare( $findByTop10Stmt );
		$this->findByTrackingStmt = self::$PDO->prepare( $findByTrackingStmt );
		$this->findByTracking1Stmt = self::$PDO->prepare( $findByTracking1Stmt );
		$this->findByPageStmt = self::$PDO->prepare( $findByPageStmt );
		$this->countAllStmt = self::$PDO->prepare( $countAllStmt );
		
    }
	
    function getCollection( array $raw ) {
        return new OrderExportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\OrderExport( 
			$array['id'],  
			$array['id_customer'], 
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
			$object->getIdCustomer(), 
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
			$object->getIdCustomer(), 
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
				
	//-------------------------------------------------------
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	function findByPage( $values ) {
		$this->findByPageStmt->bindValue(':id_customer', (int)($values[0]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-(int)1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new OrderExportCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
	function countAll(array $values) {	
        $this->countAllStmt->execute($values);
		$result = $this->countAllStmt->fetchAll();		
        return $result[0][0];
    }
	//-------------------------------------------------------
	function create( $prefix ){
		$tblSupplier = $prefix."supplier";
		$tblOrderExport = $prefix."order_export";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (

		", $tblOrderExport, $tblOrderExport, $tblOrderExport, $tblOrderExport."_1", $tblSupplier);
		$this->createStmt = self::$PDO->prepare($createStmt);
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblOrderExport = $prefix."order_export";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblOrderExport);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>