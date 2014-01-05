<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Customer extends Mapper implements \MVC\Domain\CustomerFinder {

    function __construct() {
        parent::__construct();
		
		$tblCustomer = "vendaf_mta_customer";
	
		$selectAllStmt 	= sprintf("select * from %s ORDER BY name", $tblCustomer);
		$selectStmt 	= sprintf("select * from %s where id=?", $tblCustomer);
		$updateStmt 	= sprintf("update %s SET idcard=?, prefix=?, name=?, alias=?, phone=?, address=?, note=?, debt=? where id=?", $tblCustomer);
		$insertStmt 	= sprintf("INSERT into %s ( idcard, prefix, name, alias, phone, address, note, debt ) 
                             values( ?, ?, ?, ? , ?, ?, ?, ?)", $tblCustomer);
		$deleteStmt 	= sprintf("delete from %s where id=?", $tblCustomer);		
		$findByStmt 	= sprintf("delete from %s where id=?", $tblCustomer);
		$findByPageStmt = sprintf("SELECT * FROM  %s ORDER BY name LIMIT :start,:max", $tblCustomer);
		
		$this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
		$this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
    }
	
    function getCollection( array $raw ) {return new CustomerCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Customer( 
				$array['id'], 
				$array['idcard'],
				$array['prefix'],
				$array['name'],
				$array['alias'],
				$array['phone'],
				$array['address'],
				$array['note'],
				$array['debt']
				);		
        return $obj;
    }
	
    protected function targetClass() {return "Customer";}

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdCard(), 
			$object->getPrefix(), 
			$object->getName(), 
			$object->getAlias(), 
			$object->getPhone(),
			$object->getAddress(), 
			$object->getNote(),
			$object->getDebt() 
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCard(), 
			$object->getPrefix(),
			$object->getName(), 
			$object->getAlias(),
			$object->getPhone(),
			$object->getAddress(), 
			$object->getNote(), 
			$object->getDebt(),
			$object->getId()
		); 
        $this->updateStmt->execute( $values );
    }
	function doDelete( array $values ) {$this->deleteStmt->execute( $values );}	
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new CustomerCollection( $this->findByPageStmt->fetchAll(), $this );
    }	
}
?>
