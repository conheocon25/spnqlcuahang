<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class OrderImportDetail extends Mapper implements \MVC\Domain\OrderImportDetailFinder {

    function __construct() {
        parent::__construct();
		
		$tblResource = "vendaf_mta_resource";
		$tblOrderImportDetail = "vendaf_mta_order_import_detail";
								
		$selectAllStmt = sprintf("select * from %s", $tblOrderImportDetail);
		$selectStmt = sprintf("select * from %s where id=?", $tblOrderImportDetail);
		$updateStmt = sprintf("update %s set count=?, price=? where id=?", $tblOrderImportDetail);
		$insertStmt = sprintf("insert into %s ( id_order, id_resource, count, price ) values( ?, ?, ?, ?)", $tblOrderImportDetail);
		$deleteStmt = sprintf("delete from %s where id=?", $tblOrderImportDetail);
		$findByStmt = sprintf("select * from %s where id_order=?", $tblOrderImportDetail);
		$trackByStmt = sprintf("
							SELECT
								IFNULL(0, ODI.id) as id,
								(?) as id_order,
								P.id as id_resource,
								ODI.count,
								IFNULL(ODI.price, P.price1) as price
							FROM 
							(
								SELECT *
								FROM %s
								WHERE id_supplier = ?
							) P LEFT JOIN
							(
								SELECT *
								FROM %s
								WHERE id_order = ?
							) ODI
							ON P.id = ODI.id_resource
		
		", $tblResource, $tblOrderImportDetail);
		$existStmt = sprintf("select id from %s where id_order=? and id_resource=?", $tblOrderImportDetail);
								
        $this->selectAllStmt = self::$PDO->prepare( $selectAllStmt);                            
        $this->selectStmt 	= self::$PDO->prepare( $selectStmt );
        $this->updateStmt 	= self::$PDO->prepare( $updateStmt );
        $this->insertStmt 	= self::$PDO->prepare( $insertStmt );
		$this->deleteStmt 	= self::$PDO->prepare( $deleteStmt );                            
		$this->trackByStmt 	= self::$PDO->prepare($trackByStmt);						
		$this->findByStmt 	= self::$PDO->prepare($findByStmt);						
		$this->existStmt 	= self::$PDO->prepare($existStmt);		
		
    } 
    function getCollection( array $raw ) {
        return new OrderImportDetailCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\OrderImportDetail( 
			$array['id'],  
			$array['id_order'], 
			$array['id_resource'], 
			$array['count'],	
			$array['price']
		);
        return $obj;
    }
	
    protected function targetClass() {return "OrderImportDetail";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdOrder(), 
			$object->getIdResource(), 
			$object->getCount(),
			$object->getPrice()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate(\MVC\Domain\Object $object ) {
        $values = array( 
			$object->getCount(),
			$object->getPrice(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
	//-------------------------------------------------------
	function findBy( $values ) {		
        $this->findByStmt->execute( $values );
        return new OrderImportDetailCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function trackBy( $values ) {		
        $this->trackByStmt->execute( $values );
        return new OrderImportDetailCollection( $this->trackByStmt->fetchAll(), $this );
    }
	
	function exist($values) {
		$this->existStmt->execute($values);
		$result = $this->existStmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return -1;			
		}
    }
	//-------------------------------------------------------
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
}
?>