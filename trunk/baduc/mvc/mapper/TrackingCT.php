<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class TrackingCT extends Mapper implements \MVC\Domain\TrackingCTFinder{

    function __construct() {
        parent::__construct();
				
		$tblTrackingCT = "tbl_tracking_ct";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_start", $tblTrackingCT);
		$selectStmt = sprintf("select *  from %s where id=?", $tblTrackingCT);
		$updateStmt = sprintf("update %s set date_start=?, date_end=? where id=?", $tblTrackingCT);
		$insertStmt = sprintf("insert into %s (id_ct, `date`, oe_value, pc_value, cc_value, debt_value) values(?, ?, ?, ?, ?, ?)", $tblTrackingCT);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTrackingCT);
		$deleteByTrackingStmt = sprintf("delete from %s where id_ct=? AND `date`>=? AND `date`<=?", $tblTrackingCT);
		$findByStmt = sprintf("select *  from %s where id_ct=? AND `date`>=? AND `date`<=?", $tblTrackingCT);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->deleteByTrackingStmt = self::$PDO->prepare($deleteByTrackingStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		
    } 
    function getCollection( array $raw ) {
        return new TrackingCTCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\TrackingCT( 
			$array['id'],
			$array['id_ct'],
			$array['date'],
			$array['oe_value'],
			$array['pc_value'],
			$array['cc_value'],
			$array['debt_value']
		);
	    return $obj;
    }

    protected function targetClass() {        
		return "TrackingCT";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCT(),
			$object->getDate(),
			$object->getOEValue(),
			$object->getPCValue(),
			$object->getCCValue(),
			$object->getDebtValue()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCT(),
			$object->getDate(),
			$object->getOEValue(),
			$object->getPCValue(),
			$object->getCCValue(),
			$object->getDebtValue(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }
	
	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function deleteByTracking(array $values) {return $this->deleteByTrackingStmt->execute( $values );}
	
	function findBy(array $values) { 
		$this->findByStmt->execute( $values );
        return new TrackingCTCollection( $this->findByStmt->fetchAll(), $this );
    }
	
}
?>