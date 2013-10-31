<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class PriceProductExport extends Mapper implements \MVC\Domain\PriceProductExportFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, idproduct, price,
								(select fullname from braproduct where id = EP.idproduct) as nameproduct
							FROM brapriceproductexport EP");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, idproduct, price,
								(select fullname from braproduct where id = EP.idproduct) as nameproduct
							FROM brapriceproductexport EP
							WHERE id=?");
							
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brapriceproductexport SET price=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brapriceproductexport( idcustomer, idproduct, price) 
                             values( ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, date, idproduct, quantity, price,
								(select fullname from braProduct where id=EP.idproduct) as nameproduct
							FROM 
								brapriceproductexport EP
							WHERE 
								idcustomer=? AND month(date)=? AND year(date)=?
							");
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM brapriceproductexport EP
							WHERE idcustomer=? AND idproduct=?
							");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM brapriceproductexport WHERE id=?");
    } 
    function getCollection( array $raw ) {        
		return new PriceProductExportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceProductExport(
			$array['id'],
			$array['idcustomer'],
			$array['idproduct'],
			$array['nameproduct'],
			$array['price'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceProductExport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdCustomer(),
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
        return new PriceProductExportCollection( $this->findByStmt->fetchAll(), $this );
    }
	function checkExist( $values ) {		
        $this->checkExistStmt->execute( $values);
		$a = $this->checkExistStmt->fetchAll();
        return $a[0][0];
    }
}
?>
