<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class CustomerProduct extends Mapper implements \MVC\Domain\CustomerProductFinder{

    function __construct() {
        parent::__construct();
		
		$tblCustomerProduct = "tbl_customer_product";
										
		$selectAllStmt = sprintf("select * from %s", $tblCustomerProduct);
		$selectStmt = sprintf("select * from %s where id=?", $tblCustomerProduct);
		$updateStmt = sprintf("update %s set id_customer=?, name=?, unit=?, price=?, note=? where id=?", $tblCustomerProduct);
		$insertStmt = sprintf("insert into %s ( id_customer, name, unit, price, note ) values( ?, ?, ?, ?, ?)", $tblCustomerProduct);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCustomerProduct);
		$findByStmt = sprintf("
			select 
				*
			from 
				%s 
			where id_customer=?
		", $tblCustomerProduct);
						
		$findByPageStmt = sprintf("
							SELECT * 
							FROM %s 							 							
							WHERE id_customer=:id_customer
							LIMIT :start,:max
				", $tblCustomerProduct);
										
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );
		$this->findByStmt = self::$PDO->prepare( $findByStmt );				
		$this->findByPageStmt = self::$PDO->prepare( $findByPageStmt );		
    }
	
    function getCollection( array $raw ) {return new CustomerProductCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\CustomerProduct( 
			$array['id'],
			$array['id_customer'],
			$array['name'],	
			$array['unit'],
			$array['price'],
			$array['note']
		);
        return $obj;
    }	
    protected function targetClass() {return "CustomerProduct";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCustomer(),
			$object->getName(),
			$object->getUnit(),
			$object->getPrice(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdCustomer(),
			$object->getName(),
			$object->getUnit(),
			$object->getPrice(),
			$object->getNote(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
	
	//-------------------------------------------------------
	function findBy($values) {		
        $this->findByStmt->execute( $values );
        return new CustomerProductCollection( $this->findByStmt->fetchAll(), $this );
    }
			
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':id_customer', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new CustomerProductCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
	//-------------------------------------------------------
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
}
?>