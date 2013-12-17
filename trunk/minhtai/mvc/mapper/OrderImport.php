<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class OrderImport extends Mapper implements \MVC\Domain\OrderImportFinder {

    function __construct() {
        parent::__construct();
		
		$tblOrderImport = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_import";
		$tblOrderImportDetail = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."order_import_detail";
								
		$selectAllStmt = sprintf("select * from %s", $tblOrderImport);
		$selectStmt = sprintf("select * from %s where id=?", $tblOrderImport);
		$updateStmt = sprintf("update %s set id_supplier=?, id_store=?, date=?, note=? where id=?", $tblOrderImport);
		$insertStmt = sprintf("insert into %s ( id_supplier, id_store, date, note) values( ?, ?, ?, ?)", $tblOrderImport);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderImport);
		$findByStmt = sprintf("select * from %s where id_supplier=? order by date DESC", $tblOrderImport);
		$findByTop10Stmt = sprintf("
			select * from %s where id_supplier=? order by date DESC limit 30
		", $tblOrderImport);
		
		$findByPageStmt = sprintf(
			"SELECT 
				*
			FROM 
				%s 
			WHERE id_supplier=:id_supplier
			ORDER BY date desc
			LIMIT :start,:max"
		, $tblOrderImport);
		
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
		, $tblOrderImport);
		
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
		, $tblOrderImport);
		
		$listWeekValueStmt = sprintf("
			SELECT 
				IFNULL(SDS.value, 0) as Value
			FROM
				cfa_week  W
			LEFT JOIN
				(SELECT week(date) as id, sum(count*price) as value
					FROM 
					%s S 
					INNER JOIN 
					%s SD
					ON 
						S.id = SD.idorder
					GROUP BY week(date)
				)SDS
			ON 
			W.id = SDS.id
			WHERE W.id >= week(?) AND W.id<= week(?)
		", $tblOrderImport, $tblOrderImportDetail);
		
		$listMonthValueStmt = sprintf("
			SELECT 
				IFNULL(SDS.value, 0) as Value
			FROM
				cfa_month  M
			LEFT JOIN
				(SELECT month(date) as id, sum(count*price) as value
					FROM 
					%s S 
					INNER JOIN 
					%s SD
					ON 
						S.id = SD.idorder
					GROUP BY month(date)
				)SDS
			ON 
			M.id = SDS.id
			WHERE M.id >= month(?) AND M.id<= month(?)
		", $tblOrderImport, $tblOrderImportDetail);
						
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );
		$this->findByStmt = self::$PDO->prepare( $findByStmt );
		$this->findByTop10Stmt = self::$PDO->prepare( $findByTop10Stmt );
		$this->findByTrackingStmt = self::$PDO->prepare( $findByTrackingStmt );
		$this->findByTracking1Stmt = self::$PDO->prepare( $findByTracking1Stmt );
		
		$this->findByPageStmt = self::$PDO->prepare( $findByPageStmt );
		
		$this->listWeekValueStmt = self::$PDO->prepare($listWeekValueStmt);		
		$this->listMonthValueStmt = self::$PDO->prepare($listMonthValueStmt);
    }
	
    function getCollection( array $raw ) {
        return new OrderImportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\OrderImport( 
			$array['id'],  
			$array['id_supplier'], 
			$array['id_store'], 
			$array['date'],	
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "OrderImport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdSupplier(), 
			$object->getIdStore(), 
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
			$object->getIdStore(), 
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
        return new OrderImportCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByTop10(array $values) {
        $this->findByTop10Stmt->execute( $values );
        return new OrderImportCollection( $this->findByTop10Stmt->fetchAll(), $this );
    }
	
	function findByTracking(array $values){
        $this->findByTrackingStmt->execute( $values );
        return new OrderImportCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	
	function findByTracking1(array $values){
        $this->findByTracking1Stmt->execute( $values );
        return new OrderImportCollection( $this->findByTracking1Stmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {
		$this->findByPageStmt->bindValue(':id_supplier', (int)($values[0]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-(int)1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new OrderExportCollection( $this->findByPageStmt->fetchAll(), $this );
    }			
	//-------------------------------------------------------
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	//-------------------------------------------------------
	function create( $prefix ){
		$tblSupplier = $prefix."supplier";
		$tblOrderImport = $prefix."order_import";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`id_supplier` int(11) NOT NULL,
				`date` date NOT NULL,
				`description` varchar(50) NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

			INSERT INTO %s (`id`, `id_supplier`, `date`, `description`) VALUES
			(1, 1, '2012-04-07', 'có thử'),
			(2, 1, '2012-04-01', 'có thử'),
						
			ALTER TABLE %s
				ADD CONSTRAINT %s 
				FOREIGN KEY (`id_supplier`) 
				REFERENCES %s (`id`) 
				ON DELETE CASCADE ON UPDATE CASCADE;
		", $tblOrderImport, $tblOrderImport, $tblOrderImport, $tblOrderImport."_1", $tblSupplier);
		$this->createStmt = self::$PDO->prepare($createStmt);
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblOrderImport = $prefix."order_import";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblOrderImport);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>