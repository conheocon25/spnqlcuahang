<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class FactoryLog extends Mapper implements \MVC\Domain\FactoryLogFinder {
    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( "SELECT id, idfactory, datestart, dateend FROM brafactorylog");
        $this->selectStmt = self::$PDO->prepare( "SELECT id, idfactory, datestart, dateend FROM brafactorylog WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( "UPDATE brafactorylog SET datestart=?, dateend=?, note=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brafactorylog( idfactory, datestart, dateend, note) 
                             values( ?, ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( "SELECT *  FROM brafactorylog  WHERE  idfactory=? ORDER BY datestart desc ");												
		$this->findBy1Stmt = self::$PDO->prepare("SELECT * FROM brafactorylog WHERE  idfactory=? AND datestart=? AND dateend=? ORDER BY datestart desc");					
		$this->deleteStmt = self::$PDO->prepare( "DELETE FROM brafactorylog WHERE id=?");
    } 
    function getCollection( array $raw ) {        
		return new FactoryLogCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\FactoryLog(
			$array['id'],
			$array['idfactory'],
			$array['datestart'],
			$array['dateend'],
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {return "FactoryLog";}

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getIdFactory(), 
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
			$object->getIdFactory(), 
			$object->getDateStart(),
			$object->getDateEnd(),			
			$object->getNote(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	function doDelete( array $values ) {   $this->deleteStmt->execute( $values );}	
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {		return $this->selectAllStmt;}
	
	function findBy( $values ){
        $this->findByStmt->execute( $values);
        return new FactoryLogCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findBy1( $values ){
        $this->findBy1Stmt->execute( $values);
        return new FactoryLogCollection( $this->findBy1Stmt->fetchAll(), $this );
    }
}
?>
