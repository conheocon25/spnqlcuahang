<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class PriceProductImport extends Mapper implements \MVC\Domain\PriceProductImportFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idproduct, price,
								(select fullname from braproduct where id = EP.idproduct) as nameproduct
							FROM brapriceproductimport EP");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idproduct, price,
								(select fullname from braproduct where id = EP.idproduct) as nameproduct
							FROM brapriceproductimport EP
							WHERE id=?");
							
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brapriceproductimport SET price=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brapriceproductimport( idfactory, idproduct, price) 
                             values( ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, date, idproduct, quantity, price,
								(select fullname from braProduct where id=EP.idproduct) as nameproduct
							FROM 
								brapriceproductimport EP
							WHERE 
								idfactory=? AND month(date)=? AND year(date)=?
							");
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM brapriceproductimport EP
							WHERE idfactory=? AND idproduct=?
							");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM brapriceproductimport WHERE id=?");
    } 
    function getCollection( array $raw ) {        
		return new PriceProductImportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceProductImport(
			$array['id'],
			$array['idfactory'],
			$array['idproduct'],
			$array['nameproduct'],
			$array['price'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceProductImport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdFactory(),
			$object->getIdProduct(),
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
        return new PriceProductImportCollection( $this->findByStmt->fetchAll(), $this );
    }
	function checkExist( $values ) {		
        $this->checkExistStmt->execute( $values);
		$a = $this->checkExistStmt->fetchAll();
        return $a[0][0];
    }
}
?>
