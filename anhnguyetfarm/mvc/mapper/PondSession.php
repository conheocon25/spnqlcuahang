<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class PondSession extends Mapper implements \MVC\Domain\PondSessionFinder {

    function __construct() {
        parent::__construct();
				
		$tblPondSession = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."pond_session";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_start DESC", $tblPondSession);
		$selectStmt = sprintf("select *  from %s where id=?", $tblPondSession);
		$updateStmt = sprintf("update %s set 
			id_pond=?, 
			type=?, 
			date_start=?, 
			date_end=?, 
			count_start=?, 
			value_start=?, 
			sample_start=?, 
			ship_start=?, 
			count_export=?, 
			price_export=?,
			bank_rate=?,
			count_waste=?, 
			price_waste=?,
			name=?,
			employee_name=?,
			employee_phone=?,
			count_remain=?,
			price_remain=?,
			net=?,
			tip=?
		where id=?", $tblPondSession);
		$insertStmt = sprintf("insert into %s ( 
			id_pond, 
			type, 
			date_start, 
			date_end, 
			count_start, 
			value_start, 
			sample_start, 
			ship_start, 
			count_export, 
			price_export,
			bank_rate,
			count_waste,
			price_waste,
			name,
			employee_name,
			employee_phone,
			count_remain,
			price_remain,
			net,
			tip
		) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $tblPondSession);
		$deleteStmt = sprintf("delete from %s where id=?", $tblPondSession);
		$findByStmt = sprintf("select * from %s where id_pond=? ORDER BY date_start DESC", $tblPondSession);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
    } 
    function getCollection( array $raw ) {
        return new PondSessionCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\PondSession(
			$array['id'],
			$array['id_pond'],
			$array['type'],
			$array['date_start'],
			$array['date_end'],
			$array['count_start'],
			$array['value_start'],
			$array['sample_start'],
			$array['ship_start'],
			$array['count_export'],
			$array['price_export'],
			$array['bank_rate'],
			$array['count_waste'],
			$array['price_waste'],
			$array['name'],
			$array['employee_name'],
			$array['employee_phone'],
			$array['count_remain'],
			$array['price_remain'],
			$array['net'],
			$array['tip']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "PondSession";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdPond(),
			$object->getType(),
			$object->getDateStart(),
			$object->getDateEnd(),
			$object->getCountStart(),
			$object->getValueStart(),
			$object->getSampleStart(),
			$object->getShipStart(),
			$object->getCountExport(),
			$object->getPriceExport(),
			$object->getBankRate(),
			$object->getCountWaste(),
			$object->getPriceWaste(),
			$object->getName(),
			$object->getEmployeeName(),
			$object->getEmployeePhone(),
			$object->getCountRemain(),
			$object->getPriceRemain(),
			$object->getNet(),
			$object->getTip()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdPond(),
			$object->getType(),
			$object->getDateStart(),
			$object->getDateEnd(),
			$object->getCountStart(),
			$object->getValueStart(),
			$object->getSampleStart(),
			$object->getShipStart(),
			$object->getCountExport(),
			$object->getPriceExport(),
			$object->getBankRate(),
			$object->getCountWaste(),
			$object->getPriceWaste(),
			$object->getName(),
			$object->getEmployeeName(),
			$object->getEmployeePhone(),
			$object->getCountRemain(),
			$object->getPriceRemain(),
			$object->getNet(),
			$object->getTip(),
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
        return new PondSessionCollection( $this->findByStmt->fetchAll(), $this );
    }
		
}
?>