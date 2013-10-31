<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class ResourceImport extends Mapper implements \MVC\Domain\ResourceImportFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT * FROM braresourceimport");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 							
								id, idsupplier, idresource, date, quantity, price, description,
								(select name from braresource where id = RE.idresource) as nameresource
							FROM 
								braresourceimport RE
							WHERE id=?
							");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braresourceimport RI SET 													
								quantity = ?,
								price = (
									select distinct price 
									from brapriceresourceimport
									where idsupplier = RI.idsupplier AND idresource = RI.idresource
								), 
								description = ?
							WHERE id=?");
		
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into 
							braresourceimport ( idsupplier, idresource, date, quantity, price, description) 
                             values( ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braresourceimport WHERE id=?");
		
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idsupplier, idresource, date, quantity, price, description,
								(select name from braresource where id = RE.idresource) as nameresource
							FROM braresourceimport RE
							WHERE idsupplier=? AND month(date)=? AND year(date)=?");
							
		$this->findByDateStmt = self::$PDO->prepare(
                            "SELECT 
								id, idsupplier, idresource, date, quantity, price, description,
								(select name from braresource where id = RE.idresource) as nameresource
							FROM braresourceimport RE
							WHERE idsupplier=? AND date>=? AND date<=?
							ORDER BY
								date
							");
		
		$this->evalByDateStmt = self::$PDO->prepare(
                            "SELECT 
								sum(quantity*price) as Value
							FROM braresourceimport RE
							WHERE idsupplier=? AND date>=? AND date<=?
							GROUP BY
								idsupplier
							");
							
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM braresourceimport RI
							WHERE idsupplier=? AND idresource=? AND date=?
							");
    } 
    function getCollection( array $raw ) {
        return new ResourceImportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\ResourceImport( 
			$array['id'],
			$array['idsupplier'],
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
        return "ResourceImport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {        
		$values = array(			
			$object->getIdSupplier(),
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
        return new ResourceImportCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByDate( $values ) {
        $this->findByDateStmt->execute( $values);
        return new ResourceImportCollection( $this->findByDateStmt->fetchAll(), $this );
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
