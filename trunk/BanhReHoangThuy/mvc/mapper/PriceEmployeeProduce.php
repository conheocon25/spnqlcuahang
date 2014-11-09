<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class PriceEmployeeProduce extends Mapper implements \MVC\Domain\PriceEmployeeProduceFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, idproduct, price,
								(select fullname from braproduct where id = EP.idproduct) as nameproduct
							FROM brapriceemployeeproduce EP");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, idproduct, price,
								(select fullname from braproduct where id = EP.idproduct) as nameproduct
							FROM brapriceemployeeproduce EP
							WHERE id=?");
							
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brapriceemployeeproduce SET price=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brapriceemployeeproduce( idemployee, idproduct, price) 
                             values( ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, date, idproduct, quantity, price,
								(select fullname from braProduct where id=EP.idproduct) as nameproduct
							FROM 
								brapriceemployeeproduce EP
							WHERE 
								idemployee=? AND month(date)=? AND year(date)=?
							");
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM brapriceemployeeproduce EP
							WHERE idemployee=? AND idproduct=?
							");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM brapriceemployeeproduce WHERE id=?");
    } 
    function getCollection( array $raw ) {        
		return new PriceEmployeeProduceCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceEmployeeProduce(
			$array['id'],
			$array['idemployee'],
			$array['idproduct'],
			$array['nameproduct'],
			$array['price'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceEmployeeProduce";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdEmployee(),
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
        return new PriceEmployeeProduceCollection( $this->findByStmt->fetchAll(), $this );
    }
	function checkExist( $values ) {		
        $this->checkExistStmt->execute( $values);
		$a = $this->checkExistStmt->fetchAll();
        return $a[0][0];
    }
}
?>
