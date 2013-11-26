<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class TrackingCTR extends Mapper implements \MVC\Domain\TrackingCTRFinder{

    function __construct() {
        parent::__construct();
				
		$tblTrackingCTR = "tbl_tracking_ctr";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_start", $tblTrackingCTR);
		$selectStmt = sprintf("select *  from %s where id=?", $tblTrackingCTR);
		$updateStmt = sprintf("update %s set date_start=?, date_end=? where id=?", $tblTrackingCTR);
		$insertStmt = sprintf("insert into %s (id_ct, id_tracking, `date`, value, n_day, rate, rate_value) values(?, ?, ?, ?, ?, ?, ?)", $tblTrackingCTR);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTrackingCTR);
		$deleteByTrackingStmt = sprintf("delete from %s where id_ct=? AND id_tracking=?", $tblTrackingCTR);
		$findByStmt = sprintf("select *  from %s where id_ct=? AND id_tracking=?", $tblTrackingCTR);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->deleteByTrackingStmt = self::$PDO->prepare($deleteByTrackingStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);		
    }
	
    function getCollection( array $raw ) {return new TrackingCTRCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\TrackingCTR( 
			$array['id'],
			$array['id_ct'],
			$array['id_tracking'],
			$array['date'],
			$array['value'],
			$array['n_day'],
			$array['rate'],
			$array['rate_value']
		);
	    return $obj;
    }

    protected function targetClass() { return "TrackingCTR";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCT(),
			$object->getIdTracking(),
			$object->getDate(),
			$object->getValue(),
			$object->getnDay(),
			$object->getRate(),
			$object->getRateValue()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCT(),
			$object->getIdTracking(),
			$object->getDate(),
			$object->getValue(),
			$object->getnDay(),
			$object->getRate(),
			$object->getRateValue(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }	
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}	
	function deleteByTracking(array $values) {return $this->deleteByTrackingStmt->execute( $values );}	
	function findBy(array $values) { 
		$this->findByStmt->execute( $values );
        return new TrackingCTRCollection( $this->findByStmt->fetchAll(), $this );
    }
	
}
?>