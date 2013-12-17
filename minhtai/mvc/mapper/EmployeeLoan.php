<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class EmployeeLoan extends Mapper implements \MVC\Domain\EmployeeLoanFinder{

    function __construct() {
        parent::__construct();
				
		$tblEmployeeLoan = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."employee_loan";
						
		$selectAllStmt = sprintf("select * from %s", $tblEmployeeLoan);
		$selectStmt = sprintf("select * from %s where id=?", $tblEmployeeLoan);
		$updateStmt = sprintf("update %s set idemployee=?, date=?, value=?, note=? where id=?", $tblEmployeeLoan);
		$insertStmt = sprintf("insert into %s (idemployee, date, value, note) values(?, ?, ?, ?)", $tblEmployeeLoan);
		$deleteStmt = sprintf("delete from %s where id=?", $tblEmployeeLoan);
		$findByEmployeeStmt = sprintf("select * from %s where idemployee=?", $tblEmployeeLoan);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByEmployeeStmt = self::$PDO->prepare($findByEmployeeStmt);
			
    } 
    function getCollection( array $raw ) {
        return new EmployeeLoanCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\EmployeeLoan( 
			$array['id'],			
			$array['idemployee'],
			$array['date'],
			$array['value'],			
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "EmployeeLoan";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdEmployee(),
			$object->getDate(),
			$object->getValue(),			
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
	function findByEmployee($values ) {	
        $this->findByEmployeeStmt->execute( $values );
        return new EmployeeLoanCollection( $this->findByEmployeeStmt->fetchAll(), $this );
    }
	
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(			
			$object->getIdEmployee(),
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
	
	function create( $prefix ){
		$tblEmployee = $prefix."employee";
		$tblEmployeeLoan = $prefix."employee_loan";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS `%s` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `idemployee` int(11) NOT NULL,
			  `date` date NOT NULL,
			  `value` int(11) NOT NULL,
			  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
			
			ALTER TABLE %s
				ADD CONSTRAINT %s 
				FOREIGN KEY (`idemployee`) 
				REFERENCES %s (`id`) 
				ON DELETE CASCADE ON UPDATE CASCADE;
		", $tblEmployeeLoan, $tblEmployeeLoan, $tblEmployeeLoan."_1", $tblEmployee);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblEmployeeLoan = $prefix."employee_loan";
		$dropStmt = sprintf("DROP TABLE %s", $tblEmployeeLoan);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>