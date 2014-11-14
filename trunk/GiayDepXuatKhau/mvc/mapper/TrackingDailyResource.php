<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class TrackingDailyResource extends Mapper implements \MVC\Domain\TrackingDailyResourceFinder{

    function __construct() {
        parent::__construct();
				
		$tblTrackingDailyResource 	= "giaydep_tracking_daily_resource";
		$tblResource 				= "giaydep_resource";
		
		$selectAllStmt 				= sprintf("select * from %s", $tblTrackingDailyResource);
		$selectStmt 				= sprintf("select *  from %s where id=?", $tblTrackingDailyResource);
		$updateStmt 				= sprintf("update %s set id_td=?, id_resource=?, count_old=?, count_import=?, count_export=?, price=?  where id=?", $tblTrackingDailyResource);
		$insertStmt 				= sprintf("insert into %s (id_td, id_resource, count_old, count_import, count_export, price) values(?, ?, ?, ?, ?, ?)", $tblTrackingDailyResource);
		$deleteStmt 				= sprintf("delete from %s where id=?", $tblTrackingDailyResource);
		$deleteByTrackingStmt 		= sprintf("delete from %s where id_tracking=?", $tblTrackingDailyResource);
		$findByStmt 				= sprintf("select *  from %s where id_td=?", $tblTrackingDailyResource);
		$findByNowStmt 				= sprintf("select *  from %s where `date`=now()", $tblTrackingDailyResource);
		$findByPreStmt 				= sprintf("select *  from %s where id_td<? AND id_resource=? ORDER BY id_td DESC", $tblTrackingDailyResource);
		$findByNextStmt 			= sprintf("select *  from %s where id_td>? AND id_resource=? ORDER BY id_td", $tblTrackingDailyResource);
		$findByResourceNameStmt 	= sprintf("
			select 
				*
			from 
				giaydep_tracking_daily_resource TDR
			where
				id_td=:id_td and 
				(count_old + count_import - count_export) > 0 and
				id_resource in(select R.id from giaydep_resource R where R.name like :resource_name)
			", $tblTrackingDailyResource, $tblResource
		);
				
        $this->selectAllStmt 		= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 			= self::$PDO->prepare($selectStmt);
        $this->updateStmt 			= self::$PDO->prepare($updateStmt);
        $this->insertStmt 			= self::$PDO->prepare($insertStmt);
		$this->deleteStmt 			= self::$PDO->prepare($deleteStmt);
		$this->deleteByTrackingStmt = self::$PDO->prepare($deleteByTrackingStmt);
		$this->findByStmt 			= self::$PDO->prepare($findByStmt);
		$this->findByNowStmt 		= self::$PDO->prepare($findByNowStmt);
		$this->findByPreStmt 		= self::$PDO->prepare($findByPreStmt);
		$this->findByNextStmt 		= self::$PDO->prepare($findByNextStmt);
		$this->findByResourceNameStmt 		= self::$PDO->prepare($findByResourceNameStmt);
    }
	
    function getCollection( array $raw ) {return new TrackingDailyResourceCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\TrackingDailyResource(
			$array['id'],
			$array['id_td'],
			$array['id_resource'],
			$array['count_old'],
			$array['count_import'],
			$array['count_export'],
			$array['price']			
		);
	    return $obj;
    }
    protected function targetClass() { return "TrackingDailyResource";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdTD(),
			$object->getIdResource(),			
			$object->getCountOld(),
			$object->getCountImport(),
			$object->getCountExport(),
			$object->getPrice()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdTD(),
			$object->getIdResource(),			
			$object->getCountOld(),
			$object->getCountImport(),
			$object->getCountExport(),
			$object->getPrice(),
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
        return new TrackingDailyResourceCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByNow(array $values) {
		$this->findByNowStmt->execute( $values );
        return new TrackingDailyResourceCollection( $this->findByNowStmt->fetchAll(), $this );
    }
	
	function findByPre(array $values){
		$this->findByPreStmt->execute( $values );
        return new TrackingDailyResourceCollection( $this->findByPreStmt->fetchAll(), $this );
    }
	
	function findByNext(array $values){
		$this->findByNextStmt->execute( $values );
        return new TrackingDailyResourceCollection( $this->findByNextStmt->fetchAll(), $this );
    }
	
	function findByResourceName(array $values) {        
		
		$this->findByResourceNameStmt->bindValue(':id_td', $values[0], \PDO::PARAM_INT);
		$this->findByResourceNameStmt->bindValue(':resource_name', $values[1], \PDO::PARAM_STR);		
		$this->findByResourceNameStmt->execute();
        return new TrackingDailyResourceCollection( $this->findByResourceNameStmt->fetchAll(), $this );
    }
}
?>