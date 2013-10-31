<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class SupplierOrderDetail extends Mapper implements \MVC\Domain\SupplierOrderDetailFinder {

    function __construct() {
        parent::__construct();
		
		$tblResource = "tbl_resource";
		$tblOrderImport = "tbl_supplier_order";
		$tblSupplierOrderDetail = "tbl_supplier_order_detail";		
		$tblR2C = "tbl_r2c";
								
		$selectAllStmt = sprintf("select * from %s", $tblSupplierOrderDetail);
		$selectStmt = sprintf("select * from %s where id=?", $tblSupplierOrderDetail);		
		$updateStmt = sprintf("update %s set count=?, price=? where id=?", $tblSupplierOrderDetail);
		$insertStmt = sprintf("insert into %s ( id_order, id_resource, count, price ) values( ?, ?, ?, ?)", $tblSupplierOrderDetail);
		$deleteStmt = sprintf("delete from %s where id=?", $tblSupplierOrderDetail);
		$findByStmt = sprintf("select * from %s where id_order=?", $tblSupplierOrderDetail);
		
		$evalPriceStmt = sprintf("
			SELECT 
				avg(OD.price) 
			FROM
				%s O INNER JOIN %s OD ON O.id = OD.id_order
			WHERE OD.id_resource=? AND O.date>=? AND O.date<=?
			GROUP BY
				OD.id_resource
		", $tblOrderImport, $tblSupplierOrderDetail);
		
		$trackByCountStmt = sprintf("
			select 
				sum(count)
			from 
				%s S inner join %s SD on S.id = SD.id_order
			where id_resource=? and date >= ? and date <= ?
		", $tblOrderImport, $tblSupplierOrderDetail);		
		
		$trackByStmt = sprintf("
							SELECT
								IFNULL(0, ODI.id) as id,
								(?) as id_order,
								P.id as id_resource,
								ODI.count,
								IFNULL(ODI.price, P.price_import) as price
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
		
		", $tblResource, $tblSupplierOrderDetail);		
		$existStmt = sprintf("select id from %s where id_order=? and id_resource=?", $tblSupplierOrderDetail);
								
        $this->selectAllStmt = self::$PDO->prepare( $selectAllStmt);                            
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );                            
		$this->findByStmt = self::$PDO->prepare($findByStmt);		
		$this->trackByStmt = self::$PDO->prepare($trackByStmt);
		$this->existStmt = self::$PDO->prepare($existStmt);
		
		
    } 
    function getCollection( array $raw ) {return new SupplierOrderDetailCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\SupplierOrderDetail( 
			$array['id'],  
			$array['id_order'], 
			$array['id_resource'], 
			$array['count'],	
			$array['price']		
		);
        return $obj;
    }
	
    protected function targetClass(){return "SupplierOrderDetail";}

    protected function doInsert( \MVC\Domain\Object $object ){
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
	function trackBy( $values ) {
        $this->trackByStmt->execute( $values );
        return new SupplierOrderDetailCollection( $this->trackByStmt->fetchAll(), $this );
    }
	
	function findBy( $values ) {
        $this->findByStmt->execute( $values );
        return new SupplierOrderDetailCollection( $this->findByStmt->fetchAll(), $this );
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