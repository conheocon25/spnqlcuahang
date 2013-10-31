<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class employeeproduce extends Mapper implements \MVC\Domain\employeeproduceFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, date, idproduct, quantity, price,
								(select fullname from braproduct where id=EP.idproduct) as nameproduct
							FROM braemployeeproduce EP");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, date, idproduct, quantity, price,								
								(select fullname from braproduct where id=EP.idproduct) as nameproduct
							FROM braemployeeproduce EP
							WHERE id=?");
							
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braemployeeproduce EP SET 
								date=?, 
								quantity=?, 
								price=(
									select distinct price 
										from brapriceemployeeproduce 
									where idemployee = EP.idemployee AND idproduct = EP.idproduct
								)
							WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into braemployeeproduce
                             values( null, ?, ?, ?, ?, ?)");
							 
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, date, idproduct, quantity, price,
								(select fullname from braproduct where id=EP.idproduct) as nameproduct
							FROM 
								braemployeeproduce EP
							WHERE 
								idemployee=? AND month(date)=? AND year(date)=?
							");
		$this->findByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idemployee, date, idproduct, quantity, price,
								(select fullname from braproduct where id=EP.idproduct) as nameproduct
							FROM 
								braemployeeproduce EP
							WHERE 
								idemployee=? AND date>=? AND date<=?
							ORDER BY date	
							");
		$this->evalByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								sum(quantity*price) as Value
							FROM 
								braemployeeproduce EP
							WHERE 
								idemployee=? AND date>=? AND date<=?
							");					
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM braemployeeproduce EP
							WHERE idemployee=? AND idproduct=? AND date=?
							");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braemployeeproduce WHERE id=?");
    } 
    function getCollection( array $raw ) {        
		return new employeeproduceCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\employeeproduce(
			$array['id'], 
			$array['idemployee'], 
			$array['date'], 
			$array['idproduct'], 
			$array['nameproduct'], 
			$array['quantity'], 
			$array['price'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "employeeproduce";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(			
			$object->getIdEmployee(),
			$object->getDate(), 
			$object->getIdProduct(), 
			$object->getQuantity(),
			$object->getPrice()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();		
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getDate(), 
			$object->getQuantity(),			
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
        return new employeeproduceCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByDate( $values ) {		
        $this->findByDateStmt->execute( $values);
        return new employeeproduceCollection( $this->findByDateStmt->fetchAll(), $this );
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
