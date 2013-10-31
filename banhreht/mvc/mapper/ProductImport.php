<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class ProductImport extends Mapper implements \MVC\Domain\ProductImportFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idproduct, date, quantity, price, description,
								(SELECT fullname FROM braproduct WHERE id = PI.idproduct ) as nameproduct	
							FROM braproductimport PI");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idproduct, date, quantity, price, description,
								(SELECT fullname FROM braproduct WHERE id = PI.idproduct ) as nameproduct
							FROM braproductimport PI WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braproductimport PI SET 
								quantity=?, 
								price=
								(	select distinct price 
									from brapriceproductimport
									where idfactory = PI.idfactory AND idproduct = PI.idproduct
								),
								description=? 
							WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into braproductimport( 
								idfactory, idproduct, date, quantity, price, description ) 
                             values( ?, ?, ?, ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idproduct, date, quantity, price, description,
								(SELECT fullname FROM braproductexport WHERE id = PI.idproduct ) as nameproduct 
							FROM 
								braproductimport PI
							WHERE 
								idfactory=? AND month(date)=month(?) AND year(date)=year(?)
							");
		$this->findByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idfactory, idproduct, date, quantity, price, description,
								(SELECT fullname FROM braproduct WHERE id = PI.idproduct ) as nameproduct 
							FROM 
								braproductimport PI
							WHERE 
								idfactory=? AND date>=? AND date<=?
							ORDER BY
								date
							");
		$this->evalByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								sum(quantity* price) as value
							FROM 
								braproductimport PI
							WHERE 
								idfactory=? AND date>=? AND date<=?
							GROUP BY
								idfactory
							");					
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braproductimport WHERE id=?");
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM braproductimport PI
							WHERE idfactory=? AND idproduct=? AND date=?
							");
    } 
    function getCollection( array $raw ) {        
		return new ProductImportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\ProductImport(
			$array['id'], 
			$array['idfactory'], 
			$array['idproduct'], 
			$array['nameproduct'], 
			$array['date'], 
			$array['quantity'], 
			$array['price'], 
			$array['description'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "ProductImport";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getIdFactory(), 
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
        return new ProductImportCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByDate( $values ) {		
        $this->findByDateStmt->execute( $values);
        return new ProductImportCollection( $this->findByDateStmt->fetchAll(), $this );
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
