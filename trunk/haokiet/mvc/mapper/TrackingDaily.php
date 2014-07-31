<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class TrackingDaily extends Mapper implements \MVC\Domain\TrackingDailyFinder{

    function __construct() {
        parent::__construct();
				
		$tblTrackingDaily = "haokiet_tracking_daily";
		
		$selectAllStmt 				= sprintf("select * from %s ORDER BY date", $tblTrackingDaily);
		$selectStmt 				= sprintf("select *  from %s where id=?", $tblTrackingDaily);
		$updateStmt 				= sprintf("update %s set id_tracking=?, `date`=?, ticket_import=?, ticket_import_back=?, ticket_selling=?, ticket_selling_back=?, paid1=?, paid2=?, debt=?, paid1_remain=?, paid2_remain=? where id=?", $tblTrackingDaily);
		$insertStmt 				= sprintf("insert into %s (id_tracking, `date`, ticket_import, ticket_import_back, ticket_selling, ticket_selling_back, paid1, paid2, debt, paid1_remain, paid2_remain) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $tblTrackingDaily);
		$deleteStmt 				= sprintf("delete from %s where id=?", $tblTrackingDaily);
		$deleteByTrackingStmt 		= sprintf("delete from %s where id_tracking=?", $tblTrackingDaily);
		$findByStmt 				= sprintf("select *  from %s where id_tracking=?", $tblTrackingDaily);
		$findByNowStmt 				= sprintf("select *  from %s where `date`=now()", $tblTrackingDaily);
		$findByPreStmt 				= sprintf("select *  from %s where id_tracking=? AND `date`<? ORDER BY `date` DESC", $tblTrackingDaily);
				
        $this->selectAllStmt 		= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 			= self::$PDO->prepare($selectStmt);
        $this->updateStmt 			= self::$PDO->prepare($updateStmt);
        $this->insertStmt 			= self::$PDO->prepare($insertStmt);
		$this->deleteStmt 			= self::$PDO->prepare($deleteStmt);
		$this->deleteByTrackingStmt = self::$PDO->prepare($deleteByTrackingStmt);
		$this->findByStmt 			= self::$PDO->prepare($findByStmt);
		$this->findByPreStmt 		= self::$PDO->prepare($findByPreStmt);
    }
	
    function getCollection( array $raw ) {return new TrackingDailyCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\TrackingDaily(
			$array['id'],
			$array['id_tracking'],
			$array['date'],
			$array['ticket_import'],
			$array['ticket_import_back'],
			$array['ticket_selling'],
			$array['ticket_selling_back'],
			$array['paid1'],
			$array['paid2'],
			$array['debt'],
			$array['paid1_remain'],
			$array['paid2_remain']
		);
	    return $obj;
    }
    protected function targetClass() { return "TrackingDaily";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdTracking(),
			$object->getDate(),
			$object->getTicketImport(),
			$object->getTicketImportBack(),
			$object->getTicketSelling(),
			$object->getTicketSellingBack(),
			$object->getPaid1(),
			$object->getPaid2(),
			$object->getDebt(),
			$object->getPaid1Remain(),
			$object->getPaid2Remain()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdTracking(),
			$object->getDate(),
			$object->getTicketImport(),
			$object->getTicketImportBack(),
			$object->getTicketSelling(),
			$object->getTicketSellingBack(),
			$object->getPaid1(),
			$object->getPaid2(),
			$object->getDebt(),
			$object->getPaid1Remain(),
			$object->getPaid2Remain(),
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
        return new TrackingDailyCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByNow(array $values) {
		$this->findByNowStmt->execute( $values );
        return new TrackingDailyCollection( $this->findByNowStmt->fetchAll(), $this );
    }
	
	function findByPre(array $values) {
		$this->findByPreStmt->execute( $values );
        return new TrackingDailyCollection( $this->findByPreStmt->fetchAll(), $this );
    }		
}
?>