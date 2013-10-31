<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class EmployeeLoan extends Mapper implements \MVC\Domain\EmployeeLoanFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT id, idemployee, date, value, description FROM braemployeeloan");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT id, idemployee, date, value, description FROM braemployeeloan WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braemployeeloan SET date=?, value=?, description=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into braemployeeloan( idemployee, date, value, description ) 
                             values( ?, ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, date, value, description 
							FROM 
								braemployeeloan 
							WHERE 
								idemployee=? AND month(date)=? AND year(date)=?
							");
		$this->findByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, date, value, description 
							FROM 
								braemployeeloan 
							WHERE 
								idemployee=? AND date>=? AND date<=?
							ORDER BY 
								date	
							");
		$this->evalByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								sum(value) as value
							FROM 
								braemployeeloan 
							WHERE 
								idemployee=? AND date>=? AND date<=?
							");					
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braemployeeloan WHERE id=?");
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM braemployeeloan EL
							WHERE idemployee=? AND date=?
							");					
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
			$array['description'] );
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
			$object->getDescription() 
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getDate(), 
			$object->getValue(), 			
			$object->getDescription(), 
			$object->getId()
		); 
        $this->updateStmt->execute( $values );
    }

	function doDelete( array $values ) {    
        $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }

    function selectAllStmt() {		
        return $this->selectAllStmt;
    }
	function findBy( $values ) {		
        $this->findByStmt->execute( $values);
        return new EmployeeLoanCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByDate( $values ) {		
        $this->findByDateStmt->execute( $values);
        return new EmployeeLoanCollection( $this->findByDateStmt->fetchAll(), $this );
    }
	function evalByDate( $values ) {		
        $this->evalByDateStmt->execute( $values);
		$a = $this->evalByDateStmt->fetchAll();
        return $a[0][0];
    }
	function checkExist( $values ) {		
        $this->checkExistStmt->execute( $values);
		$a = $this->checkExistStmt->fetchAll();
        return $a[0][0];
    }
}
?>
