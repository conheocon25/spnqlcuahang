<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class PondLog extends Mapper implements \MVC\Domain\PondLogFinder {

    function __construct() {
        parent::__construct();
				
		$tblPondLog = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."pond_log";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_start DESC", $tblPondLog);
		$selectStmt = sprintf("select *  from %s where id=?", $tblPondLog);
		$updateStmt = sprintf("update %s set id_pond=?, date=?, count=? where id=?", $tblPondLog);
		$insertStmt = sprintf("insert into %s ( id_pond, date, count) values(?, ?, ?)", $tblPondLog);
		$deleteStmt = sprintf("delete from %s where id=?", $tblPondLog);
		$findByStmt = sprintf("select * from %s where id_pond=? ORDER BY date DESC", $tblPondLog);
		$existStmt = sprintf("select id from %s where id_pond=? and date=?", $tblPondLog);
		$findByTrackingStmt = sprintf("select * from %s where id_pond=? AND date>=? AND date<=?", $tblPondLog);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->existStmt = self::$PDO->prepare($existStmt);
		$this->findByTrackingStmt = self::$PDO->prepare($findByTrackingStmt);
    } 
    function getCollection( array $raw ) {
        return new PondLogCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\PondLog(
			$array['id'],
			$array['id_pond'],		
			$array['date'],			
			$array['count']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "PondLog";
    }

    protected function doInsert( \MVC\Domain\Object $object ){
        $values = array(
			$object->getIdPond(),
			$object->getDate(),			
			$object->getCount()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdPond(),			
			$object->getDate(),
			$object->getCount(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }

    function selectStmt() {
        return $this->selectStmt;
    }
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	function findBy(array $values){
        $this->findByStmt->execute( $values );
        return new PondLogCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByTracking(array $values){
        $this->findByTrackingStmt->execute( $values );
        return new PondLogCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	
	function exist($values){
		$this->existStmt->execute($values);
		$result = $this->existStmt->fetchAll();
		if($result != null){
			return $result[0][0];
		} else {
			return -1;
		}
    }
}
?>