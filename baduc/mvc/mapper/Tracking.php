<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Tracking extends Mapper implements \MVC\Domain\TrackingFinder{

    function __construct() {
        parent::__construct();
				
		$tblTracking = "tbl_tracking";
		
		$selectAllStmt 			= sprintf("select * from %s ORDER BY date_start DESC", $tblTracking);
		$selectStmt 			= sprintf("select *  from %s where id=?", $tblTracking);
		$updateStmt 			= sprintf("update %s set date_start=?, date_end=?, customer_rate=?, customer_rate_paid=? where id=?", $tblTracking);
		$insertStmt 			= sprintf("insert into %s (date_start, date_end, customer_rate, customer_rate_paid) values(?, ?, ?, ?)", $tblTracking);
		$deleteStmt 			= sprintf("delete from %s where id=?", $tblTracking);
		$findPreStmt 			= sprintf("select *  from %s where date_start<? ORDER BY date_start DESC LIMIT 1", $tblTracking);
		$findByPageStmt 		= sprintf("SELECT * FROM  %s ORDER BY date_start DESC LIMIT :start,:max", $tblTracking);		
		
        $this->selectAllStmt 	= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 		= self::$PDO->prepare($selectStmt);
        $this->updateStmt 		= self::$PDO->prepare($updateStmt);
        $this->insertStmt 		= self::$PDO->prepare($insertStmt);
		$this->deleteStmt 		= self::$PDO->prepare($deleteStmt);
		$this->findPreStmt 		= self::$PDO->prepare($findPreStmt);
		$this->findByPageStmt 	= self::$PDO->prepare($findByPageStmt);
    }
	
    function getCollection( array $raw ) {return new TrackingCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Tracking( 
			$array['id'],
			$array['date_start'],
			$array['date_end'],
			$array['customer_rate'],
			$array['customer_rate_paid']
		);
        return $obj;
    }

    protected function targetClass() { return "Tracking";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getDateStart(), 
			$object->getDateEnd(),
			$object->getCustomerRate(),
			$object->getCustomerRatePaid()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getDateStart(),
			$object->getDateEnd(),
			$object->getCustomerRate(),
			$object->getCustomerRatePaid(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}	
	
	function findPre( $values ) {	
        $this->findPreStmt->execute( $values );
        $array = $this->findPreStmt->fetch();		
        $this->findPreStmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;
    }
	
	function findByPage( $values ){
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new SupplierCollection( $this->findByPageStmt->fetchAll(), $this );
    }	
}
?>