<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class ProductExport extends Mapper implements \MVC\Domain\ProductExportFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, idproduct, date, quantity, price, description,
								(SELECT fullname FROM braproduct WHERE id = PI.idproduct ) as nameproduct	
							FROM braproductexport PI");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, idproduct, date, quantity, price, description,
								(SELECT fullname FROM braproduct WHERE id = PI.idproduct ) as nameproduct
							FROM braproductexport PI WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braproductexport PI SET 
								quantity=?, 
								price=
								(	select distinct price 
									from brapriceproductexport
									where idcustomer = PI.idcustomer AND idproduct = PI.idproduct
								),
								description=? 
							WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into braproductexport( 
								idcustomer, idproduct, date, quantity, price, description ) 
                             values( ?, ?, ?, ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, idproduct, date, quantity, price, description,
								(SELECT fullname FROM braproduct WHERE id = PE.idproduct ) as nameproduct 
							FROM 
								braproductexport PE
							WHERE 
								idcustomer=? AND month(date)=? AND year(date)=?
							");
							
		$this->findByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, idproduct, date, quantity, price, description,
								(SELECT fullname FROM braproduct WHERE id = PE.idproduct ) as nameproduct 
							FROM 
								braproductexport PE
							WHERE 
								idcustomer=? AND date >=? AND date <= ?
							ORDER BY 
								date
							");
		$this->evalByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								sum(quantity* price) as value
							FROM 
								braproductexport PE
							WHERE 
								idcustomer=? AND date >=? AND date <= ?
							");					
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braproductexport WHERE id=?");
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM braproductexport PI
							WHERE idcustomer=? AND idproduct=? AND date=?
							");
    } 
    function getCollection( array $raw ) {        
		return new ProductExportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\ProductExport(
			$array['id'], 
			$array['idcustomer'], 
			$array['idproduct'], 
			$array['nameproduct'], 
			$array['date'], 
			$array['quantity'], 
			$array['price'], 
			$array['description'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "ProductExport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getIdCustomer(), 
			$object->getIdProduct(), 
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
        return new ProductExportCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByDate( $values ) {		
        $this->findByDateStmt->execute( $values);
		//print_r($values);
        return new ProductExportCollection( $this->findByDateStmt->fetchAll(), $this );	
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
