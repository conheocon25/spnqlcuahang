<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class PriceResourceExport extends Mapper implements \MVC\Domain\PriceResourceExportFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idresource, price,
								(select name from braresource where id = EP.idresource) as nameresource
							FROM brapriceresourceexport EP");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idresource, price,
								(select name from braresource where id = EP.idresource) as nameresource
							FROM brapriceresourceexport EP
							WHERE id=?");
							
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brapriceresourceexport SET price=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brapriceresourceexport( idfactory, idresource, price) 
                             values( ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, date, idresource, quantity, price,
								(select name from braresource where id=EP.idresource) as nameresource
							FROM 
								brapriceresourceexport EP
							WHERE 
								idfactory=? AND month(date)=? AND year(date)=?
							");
		$this->checkExistStmt = self::$PDO->prepare("
							SELECT 
								id
							FROM 
								brapriceresourceexport EP
							WHERE 
								idfactory=? AND idresource=?
							");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM brapriceresourceexport WHERE id=?");
    } 
    function getCollection( array $raw ) {        
		return new PriceResourceExportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceResourceExport(
			$array['id'],
			$array['idfactory'],
			$array['idresource'],
			$array['nameresource'],
			$array['price'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceResourceExport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdFactory(),
			$object->getidResource(),
			$object->getPrice()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();		
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getPrice(),
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
        return new PriceResourceExportCollection( $this->findByStmt->fetchAll(), $this );
    }
	function checkExist( $values ) {		
        $this->checkExistStmt->execute( $values);
		$a = $this->checkExistStmt->fetchAll();
        return $a[0][0];
    }
}
?>
