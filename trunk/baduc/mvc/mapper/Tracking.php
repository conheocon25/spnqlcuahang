<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Tracking extends Mapper implements \MVC\Domain\TrackingFinder{

    function __construct() {
        parent::__construct();
				
		$tblTracking = "tbl_tracking";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_start", $tblTracking);
		$selectStmt = sprintf("select *  from %s where id=?", $tblTracking);
		$updateStmt = sprintf("update %s set date_start=?, date_end=? where id=?", $tblTracking);
		$insertStmt = sprintf("insert into %s (date_start, date_end) values(?, ?)", $tblTracking);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTracking);		
		$findPreStmt = sprintf("select *  from %s where date_start<? ORDER BY date_start DESC LIMIT 1", $tblTracking);
		
        $this->selectAllStmt 	= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 		= self::$PDO->prepare($selectStmt);
        $this->updateStmt 		= self::$PDO->prepare($updateStmt);
        $this->insertStmt 		= self::$PDO->prepare($insertStmt);
		$this->deleteStmt 		= self::$PDO->prepare($deleteStmt);
		$this->findPreStmt 		= self::$PDO->prepare($findPreStmt);
		
    } 
    function getCollection( array $raw ) {
        return new TrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Tracking( 
			$array['id'],
			$array['date_start'],
			$array['date_end']			
		);
        return $obj;
    }

    protected function targetClass() { return "Tracking";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getDateStart(), 
			$object->getDateEnd()			
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getDateStart(), 
			$object->getDateEnd(),			
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
	
}
?>