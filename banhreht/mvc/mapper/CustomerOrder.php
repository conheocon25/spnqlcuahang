<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class CustomerOrder extends Mapper implements \MVC\Domain\CustomerOrderFinder {

    function __construct() {
        parent::__construct();
		
		$tblCustomerOrder = "tbl_customer_order";
		$tblCustomerOrderDetail = "tbl_customer_order_detail";
								
		$selectAllStmt = sprintf("select * from %s order by date DESC", $tblCustomerOrder);
		$selectStmt = sprintf("select * from %s where id=?", $tblCustomerOrder);
		$updateStmt = sprintf("update %s set iduser=?, date=?, state=?, description=? where id=?", $tblCustomerOrder);
		$insertStmt = sprintf("insert into %s ( iduser, date, state, description ) values( ?, ?, ?, ?)", $tblCustomerOrder);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCustomerOrder);
		$findByStmt = sprintf("
			select 
				*
			from 
				%s 
			where iduser=? AND state=?
			order by date DESC
		", $tblCustomerOrder);
				
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
		, $tblCustomerOrder);
		
		$findByTracking1Stmt = sprintf("
			select
				*
			from 
				%s
			where
				idsupplier=? AND date >= ? AND date <= ?
			order by 
				date DESC
			"
		, $tblCustomerOrder);
		
		$findByPageStmt = sprintf("
							SELECT * 
							FROM %s 							 							
							ORDER BY date desc
							LIMIT :start,:max
				", $tblCustomerOrder);
										
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );
		$this->findByStmt = self::$PDO->prepare( $findByStmt );		
		$this->findByTrackingStmt = self::$PDO->prepare( $findByTrackingStmt );
		$this->findByTracking1Stmt = self::$PDO->prepare( $findByTracking1Stmt );
		$this->findByPageStmt = self::$PDO->prepare( $findByPageStmt );		
    }
	
    function getCollection( array $raw ) {return new CustomerOrderCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\CustomerOrder( 
			$array['id'],
			$array['iduser'],
			$array['date'],	
			$array['state'],
			$array['description']
		);
        return $obj;
    }
	
    protected function targetClass() {return "CustomerOrder";}

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdUser(),
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
			$object->getDate(),
			$object->getState(),
			$object->getDescription(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
	//-------------------------------------------------------
	function findBy($values) {		
        $this->findByStmt->execute( $values );
        return new CustomerOrderCollection( $this->findByStmt->fetchAll(), $this );
    }
		
	function findByTracking(array $values){
        $this->findByTrackingStmt->execute( $values );
        return new CustomerOrderCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	
	function findByTracking1(array $values){
        $this->findByTracking1Stmt->execute( $values );
        return new CustomerOrderCollection( $this->findByTracking1Stmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {		
		//$this->findByPageStmt->bindValue(':idsupplier', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new CustomerOrderCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
	//-------------------------------------------------------
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
}
?>