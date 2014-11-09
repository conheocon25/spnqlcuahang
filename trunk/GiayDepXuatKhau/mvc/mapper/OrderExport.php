<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class OrderExport extends Mapper implements \MVC\Domain\OrderExportFinder {

    function __construct() {
        parent::__construct();
		
		$tblOrderExport = "giaydep_order_export";
		$tblOrderExportDetail = "giaydep_order_export_detail";
								
		$selectAllStmt 		= sprintf("select * from %s", $tblOrderExport);
		$selectStmt 		= sprintf("select * from %s where id=?", $tblOrderExport);
		$updateStmt 		= sprintf("update %s set iduser=?, idcustomer=?, date=?, state=?, description=? where id=?", $tblOrderExport);
		$insertStmt 		= sprintf("insert into %s ( iduser, idcustomer, date, state, description ) values( ?, ?, ?, ?, ?)", $tblOrderExport);
		$deleteStmt 		= sprintf("delete from %s where id=?", $tblOrderExport);
		$findByUserStmt 	= sprintf("select * from %s where iduser=? order by date DESC", $tblOrderExport);
		$findByCustomerStmt = sprintf("select * from %s where idcustomer=? order by date DESC", $tblOrderExport);
		
		$findByDateCustomerStmt = sprintf("
			select
				*
			from 
				%s
			where
				date = ? AND idcustomer = ?
			order by 
				date DESC
			"
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
				idcustomer=? AND date >= ? AND date <= ?
			order by 
				date DESC
			"
		, $tblOrderExport);
		
		$findByCustomerPageStmt = sprintf("
							SELECT * 
							FROM %s 							 
							WHERE idcustomer=:idcustomer
							ORDER BY date desc
							LIMIT :start,:max
				", $tblOrderExport);
										
        $this->selectAllStmt 			= self::$PDO->prepare( $selectAllStmt);
        $this->selectStmt 				= self::$PDO->prepare( $selectStmt );
        $this->updateStmt 				= self::$PDO->prepare( $updateStmt );
        $this->insertStmt 				= self::$PDO->prepare( $insertStmt );
		$this->deleteStmt 				= self::$PDO->prepare( $deleteStmt );
		$this->findByUserStmt 			= self::$PDO->prepare( $findByUserStmt );		
		$this->findByCustomerStmt 		= self::$PDO->prepare( $findByCustomerStmt );		
		$this->findByDateCustomerStmt 	= self::$PDO->prepare( $findByDateCustomerStmt );
		$this->findByTrackingStmt 		= self::$PDO->prepare( $findByTrackingStmt );
		$this->findByTracking1Stmt 		= self::$PDO->prepare( $findByTracking1Stmt );
		$this->findByCustomerPageStmt 	= self::$PDO->prepare( $findByCustomerPageStmt );		
    }
	
    function getCollection( array $raw ) {return new OrderExportCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\OrderExport( 
			$array['id'],  
			$array['iduser'], 
			$array['idcustomer'], 
			$array['date'],	
			$array['state'],	
			$array['description']
		);
        return $obj;
    }
	
    protected function targetClass(){return "OrderExport";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdUser(), 
			$object->getIdCustomer(),
			$object->getDate(),
			$object->getState(),
			$object->getDescription()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdUser(),
			$object->getIdCustomer(),
			$object->getDate(),
			$object->getState(),
			$object->getDescription(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
	
	//-------------------------------------------------------
	function findByUser(array $values) {
        $this->findByUserStmt->execute( $values );
        return new OrderExportCollection( $this->findByUserStmt->fetchAll(), $this );
    }
	
	function findByCustomer(array $values) {
        $this->findByCustomerStmt->execute( $values );
        return new OrderExportCollection( $this->findByCustomerStmt->fetchAll(), $this );
    }
	
	function findByTracking(array $values){
        $this->findByTrackingStmt->execute( $values );
        return new OrderExportCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	
	function findByTracking1(array $values){
        $this->findByTracking1Stmt->execute( $values );
        return new OrderExportCollection( $this->findByTracking1Stmt->fetchAll(), $this );
    }
	
	function findByDateCustomer(array $values){
        $this->findByDateCustomerStmt->execute( $values );
        return new OrderExportCollection( $this->findByDateCustomerStmt->fetchAll(), $this );
    }
	
	function findByCustomerPage( $values ) {		
		$this->findByCustomerPageStmt->bindValue(':idcustomer', $values[0], \PDO::PARAM_INT);
		$this->findByCustomerPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByCustomerPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByCustomerPageStmt->execute();
        return new OrderExportCollection( $this->findByCustomerPageStmt->fetchAll(), $this );
    }
	
	//-------------------------------------------------------
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}	
}
?>