<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class CustomerTracking extends Mapper implements \MVC\Domain\CustomerTrackingFinder{

    function __construct() {
        parent::__construct();
				
		$tblCustomerTracking = "tbl_customer_tracking";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_start DESC", $tblCustomerTracking);
		$selectStmt = sprintf("select *  from %s where id=?", $tblCustomerTracking);
		$updateStmt = sprintf("update %s set id_customer=?, id_domain=?, date_start=?, date_end=?, note=? where id=?", $tblCustomerTracking);
		$insertStmt = sprintf("insert into %s (id_customer, id_domain, date_start, date_end, note) values(?, ?, ?, ?, ?)", $tblCustomerTracking);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCustomerTracking);
		$findByStmt = sprintf("SELECT * FROM  %s WHERE id_customer=? AND id_domain=? ORDER BY date_start DESC", $tblCustomerTracking);
		$findByPageStmt = sprintf("SELECT * FROM  %s ORDER BY name LIMIT :start,:max", $tblCustomerTracking);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
    } 
    function getCollection( array $raw ) {return new CustomerTrackingCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\CustomerTracking( 
			$array['id'],
			$array['id_customer'],
			$array['id_domain'],
			$array['date_start'],
			$array['date_end'],
			$array['note']
		);
        return $obj;
    }

    protected function targetClass() {return "CustomerTracking";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCustomer(),
			$object->getIdDomain(),
			$object->getDateStart(),
			$object->getDateEnd(),
			$object->getNote()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }	     
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCustomer(),
			$object->getIdDomain(),
			$object->getDateStart(),
			$object->getDateEnd(),
			$object->getNote(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBy($values ){
        $this->findByStmt->execute( $values );
        return new CustomerTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new CustomerTrackingCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
}
?>