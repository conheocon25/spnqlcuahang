<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class FactoryLoan extends Mapper implements \MVC\Domain\FactoryLoanFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT id, idfactory, date, value, description FROM brafactoryloan");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT id, idfactory, date, value, description FROM brafactoryloan WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brafactoryloan SET date=?, value=?, description=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brafactoryloan( idfactory, date, value, description ) 
                             values( ?, ?, ?, ?)");
		$this->findByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, date, value, description 
							FROM 
								brafactoryloan 
							WHERE 
								idfactory=? AND date>=? AND date<=?
							ORDER BY
								date
							");
		$this->evalByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								sum(value) as value 
							FROM 
								brafactoryloan 
							WHERE 
								idfactory=? AND date>=? AND date<=?
							");					
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM brafactoryloan WHERE id=?");
							
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM brafactoryloan FL
							WHERE idfactory=? AND date=?
							");					
    } 
    function getCollection( array $raw ) {        
		return new FactoryLoanCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\FactoryLoan(
			$array['id'], 
			$array['idfactory'], 
			$array['date'], 
			$array['value'], 
			$array['description'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "FactoryLoan";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getIdFactory(), 
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
	function findByDate( $values ) {		
        $this->findByDateStmt->execute( $values);
        return new FactoryLoanCollection( $this->findByDateStmt->fetchAll(), $this );
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
