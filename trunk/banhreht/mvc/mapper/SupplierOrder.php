<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class SupplierOrder extends Mapper implements \MVC\Domain\SupplierOrderFinder {

    function __construct() {
        parent::__construct();
		
		$tblSupplierOrder = "tbl_supplier_order";
										
		$selectAllStmt = sprintf("select * from %s", $tblSupplierOrder);
		$selectStmt = sprintf("select * from %s where id=?", $tblSupplierOrder);
		$updateStmt = sprintf("update %s set id_supplier=?, date=?, note=? where id=?", $tblSupplierOrder);
		$insertStmt = sprintf("insert into %s ( id_supplier, date, note ) values( ?, ?, ?)", $tblSupplierOrder);
		$deleteStmt = sprintf("delete from %s where id=?", $tblSupplierOrder);
		$findByStmt = sprintf("
			select 
				*
			from 
				%s 
			where id_supplier=?
			order by date DESC
		", $tblSupplierOrder);
				
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
		, $tblSupplierOrder);
		
		$findByTracking1Stmt = sprintf("
			select
				*
			from 
				%s
			where
				id_supplier=? AND date >= ? AND date <= ?
			order by 
				date DESC
			"
		, $tblSupplierOrder);
		
		$findByPageStmt = sprintf("
							SELECT * 
							FROM %s 							 
							WHERE id_supplier=:id_supplier
							ORDER BY date desc
							LIMIT :start,:max
				", $tblSupplierOrder);
										
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
	
    function getCollection( array $raw ) {
        return new SupplierOrderCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\SupplierOrder( 
			$array['id'],  
			$array['id_supplier'], 
			$array['date'],	
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "SupplierOrder";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdSupplier(), 
			$object->getDate(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdSupplier(), 
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
        return new SupplierOrderCollection( $this->findByStmt->fetchAll(), $this );
    }
		
	function findByTracking(array $values){
        $this->findByTrackingStmt->execute( $values );
        return new SupplierOrderCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	
	function findByTracking1(array $values){
        $this->findByTracking1Stmt->execute( $values );
        return new SupplierOrderCollection( $this->findByTracking1Stmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':id_supplier', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new SupplierOrderCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
	//-------------------------------------------------------
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
}
?>