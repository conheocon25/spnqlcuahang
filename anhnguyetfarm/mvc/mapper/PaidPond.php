<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class PaidPond extends Mapper implements \MVC\Domain\PaidPondFinder{

    function __construct() {
        parent::__construct();
				
		$tblPaidPond = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."paid_pond";
						
		$selectAllStmt = sprintf("select * from %s", $tblPaidPond);
		$selectStmt = sprintf("select * from %s where id=?", $tblPaidPond);
		$updateStmt = sprintf("update %s set id_pond=?, date=?, value=?, note=? where id=?", $tblPaidPond);
		$insertStmt = sprintf("insert into %s (id_pond, date, value, note) values(?, ?, ?, ?)", $tblPaidPond);
		$deleteStmt = sprintf("delete from %s where id=?", $tblPaidPond);
		$findByStmt = sprintf("select * from %s where id_pond=? ORDER BY date DESC", $tblPaidPond);
		$findByTop10Stmt = sprintf("select * from %s where id_pond=? ORDER BY date DESC LIMIT 10", $tblPaidPond);
		$findByTrackingStmt = sprintf("select * from %s where id_pond=? AND date>=? AND date<=?", $tblPaidPond);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByTop10Stmt = self::$PDO->prepare($findByTop10Stmt);
		$this->findByTrackingStmt = self::$PDO->prepare($findByTrackingStmt);
			
    } 
    function getCollection( array $raw ) {
        return new PaidPondCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PaidPond( 
			$array['id'],			
			$array['id_pond'],
			$array['date'],
			$array['value'],			
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "PaidPond";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdPond(),
			$object->getDate(),
			$object->getValue(),			
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(			
			$object->getIdPond(),
			$object->getDate(),
			$object->getValue(),			
			$object->getNote(),
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
	
	function findBy($values ) {	
        $this->findByStmt->execute( $values );
        return new PaidPondCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByTop10($values ) {	
        $this->findByTop10Stmt->execute( $values );
        return new PaidPondCollection( $this->findByTop10Stmt->fetchAll(), $this );
    }
	
	function findByTracking($values ) {	
        $this->findByTrackingStmt->execute( $values );
        return new PaidPondCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
		
}
?>