<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class CustomerLog extends Mapper implements \MVC\Domain\CustomerLogFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( "SELECT * FROM bracustomerlog");
        $this->selectStmt = self::$PDO->prepare( "SELECT * FROM bracustomerlog WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( "UPDATE bracustomerlog SET datestart=?, dateend=?, note=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into bracustomerlog( idcustomer, datestart, dateend, note) 
                             values( ?, ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, datestart, dateend 
							FROM
								bracustomerlog 
							WHERE 
								idcustomer=?
							ORDER BY
								datestart desc
							");	
		$this->findBy1Stmt = self::$PDO->prepare( "SELECT * FROM bracustomerlog WHERE idcustomer=? AND datestart=? AND dateend=? ORDER BY datestart desc");							
		$this->deleteStmt = self::$PDO->prepare( "DELETE FROM bracustomerlog WHERE id=?");
    } 
    function getCollection( array $raw ) {        
		return new CustomerLogCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\CustomerLog(
			$array['id'],
			$array['idcustomer'],
			$array['datestart'],
			$array['dateend'],
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {return "CustomerLog";}

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getIdCustomer(), 
			$object->getDateStart(), 
			$object->getDateEnd(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdCustomer(), 
			$object->getDateStart(),
			$object->getDateEnd(),			
			$object->getNote(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	function doDelete( array $values ) {    $this->deleteStmt->execute( $values );}
	
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {	return $this->selectAllStmt;}
	
	function findBy( $values ){
        $this->findByStmt->execute( $values);
        return new CustomerLogCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findBy1( $values ){
        $this->findBy1Stmt->execute( $values);
        return new CustomerLogCollection( $this->findBy1Stmt->fetchAll(), $this );
    }
}
?>
