<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class PaidOther extends Mapper implements \MVC\Domain\PaidOtherFinder{

    function __construct() {
        parent::__construct();
				
		$tblPaid = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."paid_other";
		
		$selectAllStmt = sprintf("select * from %s", $tblPaid);
		$selectStmt = sprintf("select * from %s where id=?", $tblPaid);
		$updateStmt = sprintf("update %s set id_term=?, date=?, value=?, note=? where id=?", $tblPaid);
		$insertStmt = sprintf("insert into %s (id_term, date, value, note) values(?,?,?,?)", $tblPaid);
		$deleteStmt = sprintf("delete from %s where id=?", $tblPaid);
		$findByStmt = sprintf("select * from %s where id_term=? order by date DESC", $tblPaid);
		$findByTop10Stmt = sprintf("select * from %s where id_term=? order by date DESC LIMIT 30", $tblPaid);
		$findByTrackingStmt = sprintf(
							"select
								*
							from 
								%s
							where
								date >= ? AND date <= ?															
							order by
								date DESC
							"
		, $tblPaid);
		$listWeekValueStmt = sprintf("
		SELECT 
			IFNULL(SDS.value, 0) as Value
		FROM
			cfa_week  W
				LEFT JOIN
			(SELECT week(date) as id, sum(value) as value
				FROM 
					%s S
				GROUP BY week(date)
			)SDS ON W.id = SDS.id
		WHERE W.id >= week(?) AND W.id<= week(?)
		", $tblPaid);
		
		$listMonthValueStmt = sprintf("
		SELECT 
			IFNULL(SDS.value, 0) as Value
		FROM
			cfa_month  M
				LEFT JOIN
			(SELECT month(date) as id, sum(value) as value
				FROM 
					%s S
				GROUP BY month(date)
			)SDS ON M.id = SDS.id
		WHERE M.id >= month(?) AND M.id<= month(?)
		", $tblPaid);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByTrackingStmt = self::$PDO->prepare($findByTrackingStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByTop10Stmt = self::$PDO->prepare($findByTop10Stmt);
		$this->listWeekValueStmt = self::$PDO->prepare($listWeekValueStmt);
		$this->listMonthValueStmt = self::$PDO->prepare($listMonthValueStmt);
		
    } 
    function getCollection( array $raw ) {
        return new PaidCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\PaidOther( 
			$array['id'],
			$array['id_term'],
			$array['date'],
			$array['value'],
			$array['note']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Paid";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdTerm(),
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
			$object->getIdTerm(),
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
	
	function findByTracking($values ) {	
        $this->findByTrackingStmt->execute( $values );
        return new PaidOtherCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	function findBy($values ) {	
        $this->findByStmt->execute( $values );
        return new PaidOtherCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByTop10($values ) {	
        $this->findByTop10Stmt->execute( $values );
        return new PaidOtherCollection( $this->findByTop10Stmt->fetchAll(), $this );
    }
		
	function create( $prefix ){
		$tblPaid = $prefix."paid";
		$tblTerm = $prefix."term";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`id_term` int(11) NOT NULL,
				`date` date NOT NULL,
				`value` int(11) NOT NULL,
				`note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

			INSERT INTO %s (`id`, `id_term`, `date`, `value`, `note`) VALUES
			(1, 1, '2012-08-01', 2300000, 'được không ?');
			
			ALTER TABLE %s
				ADD CONSTRAINT %s 
				FOREIGN KEY (`id_term`) 
				REFERENCES %s (`id`) 
				ON DELETE CASCADE ON UPDATE CASCADE;
		", $tblPaid, $tblPaid, $tblPaid, $tblPaid."_1", $tblTerm);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	
	function drop( $prefix ){
		$tblPaid = $prefix."paid";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblPaid);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>