<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class PriceResourceImport extends Mapper implements \MVC\Domain\PriceResourceImportFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idsupplier, idresource, price,
								(select name from braresource where id = EP.idresource) as nameresource
							FROM brapriceresourceimport EP");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idsupplier, idresource, price,
								(select name from braresource where id = EP.idresource) as nameresource
							FROM brapriceresourceimport EP
							WHERE id=?");
							
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brapriceresourceimport SET price=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brapriceresourceimport( idsupplier, idresource, price)
                             values( ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idsupplier, date, idresource, quantity, price,
								(select name from braresource where id=EP.idresource) as nameresource
							FROM 
								brapriceresourceimport EP
							WHERE 
								idsupplier=? AND month(date)=? AND year(date)=?
							");
		$this->checkExistStmt = self::$PDO->prepare("
							SELECT 
								id
							FROM 
								brapriceresourceimport PI
							WHERE 
								idsupplier=? AND idresource=?
							");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM brapriceresourceimport WHERE id=?");
    } 
    function getCollection( array $raw ) {        
		return new PriceResourceImportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceResourceImport(
			$array['id'],
			$array['idsupplier'],
			$array['idresource'],
			$array['nameresource'],
			$array['price'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceResourceImport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdSupplier(),
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
        return new PriceResourceImportCollection( $this->findByStmt->fetchAll(), $this );
    }
	function checkExist( $values ) {		
        $this->checkExistStmt->execute( $values);
		$a = $this->checkExistStmt->fetchAll();
        return $a[0][0];
    }
}
?>
