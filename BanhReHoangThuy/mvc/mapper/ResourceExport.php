<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class ResourceExport extends Mapper implements \MVC\Domain\ResourceExportFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT * FROM braresourceexport");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 							
								id, idfactory, idresource, date, quantity, price, description,
								(select name from braresource where id = RE.idresource) as nameresource
							FROM 
								braresourceexport RE
							WHERE id=?
							");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braresourceexport RE SET 													
								quantity = ?,
								price = (
									select distinct price 
									from brapriceresourceexport
									where idfactory = RE.idfactory AND idresource = RE.idresource
								), 
								description = ?
							WHERE id=?");
		
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into 
							braresourceexport ( idfactory, idresource, date, quantity, price, description) 
                             values( ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braresourceexport WHERE id=?");
		
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idresource, date, quantity, price, description,
								(select name from braresource where id = RE.idresource) as nameresource
							FROM braresourceexport RE
							WHERE idfactory=? AND month(date)=? AND year(date)=?");
							
		$this->findByDateStmt = self::$PDO->prepare(
                            "SELECT 
								id, idfactory, idresource, date, quantity, price, description,
								(select name from braresource where id = RE.idresource) as nameresource
							FROM braresourceexport RE
							WHERE idfactory=? AND date>=? AND date<=?
							ORDER BY
								date
							");
		
		$this->evalByDateStmt = self::$PDO->prepare(
                            "SELECT 
								sum(quantity*price) as Value
							FROM braresourceexport RE
							WHERE idfactory=? AND date>=? AND date<=?
							GROUP BY
								idfactory
							");
							
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM braresourceexport EP
							WHERE idfactory=? AND idresource=? AND date=?
							");					
    } 
    function getCollection( array $raw ) {
        return new ResourceExportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\ResourceExport( 
			$array['id'],
			$array['idfactory'],
			$array['idresource'],
			$array['nameresource'],
			$array['date'],
			$array['quantity'],
			$array['price'],			
			$array['description']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "ResourceExport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {        
		$values = array(
			$object->getIdFactory(),
			$object->getIdResource(),
			$object->getDate(),
			$object->getQuantity(),
			$object->getPrice(),
			$object->getDescription()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getQuantity(),			
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
        return new ResourceExportCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByDate( $values ) {
        $this->findByDateStmt->execute( $values);
        return new ResourceExportCollection( $this->findByDateStmt->fetchAll(), $this );
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
