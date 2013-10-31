<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Resource extends Mapper implements \MVC\Domain\ResourceFinder {

    function __construct() {
        parent::__construct();
		$tblResource = "tbl_resource";
						
		$selectAllStmt = sprintf("select * from %s", $tblResource);
		$selectStmt = sprintf("select * from %s where id=?", $tblResource);
		$updateStmt = sprintf("update %s set id_supplier=?, name=?, name_short=?, unit=?, price_import=?, price_export=?, description=?, barcode=? where id=?", $tblResource);
		$insertStmt = sprintf("insert into %s ( id_supplier, name, name_short, unit, price_import, price_export, description, barcode ) 
							values( ?, ?, ?, ?, ?, ?, ?, ?)", $tblResource);
		$deleteStmt = sprintf("delete from %s where id=?", $tblResource);
		$havingBarcodeStmt = sprintf("select * from %s where barcode<>''", $tblResource);
		$noneBarcodeStmt = sprintf("select * from %s where barcode=''", $tblResource);
		$findBySupplierStmt = sprintf("select * from %s where id_supplier=?", $tblResource);
		$findByBarcodeStmt = sprintf("select * from %s where barcode=?", $tblResource);
		$findByBarcode1Stmt = sprintf("select * from %s where id_supplier=? AND barcode=?", $tblResource);
		$findByPageStmt = sprintf("
							SELECT *
							FROM %s
							WHERE id_supplier=:id_supplier
							LIMIT :start,:max
				", $tblResource);
				
		$findFreqStmt = sprintf("select * from %s limit 20", $tblResource);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findBySupplierStmt = self::$PDO->prepare($findBySupplierStmt);
		$this->havingBarcodeStmt = self::$PDO->prepare($havingBarcodeStmt);
		$this->noneBarcodeStmt = self::$PDO->prepare($noneBarcodeStmt);
		$this->findByBarcodeStmt = self::$PDO->prepare($findByBarcodeStmt);
		$this->findByBarcode1Stmt = self::$PDO->prepare($findByBarcode1Stmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
		$this->findFreqStmt = self::$PDO->prepare($findFreqStmt);
    } 
    function getCollection( array $raw ) {return new ResourceCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Resource( 
			$array['id'],
			$array['id_supplier'],
			$array['name'],
			$array['name_short'],
			$array['unit'],				
			$array['price_import'],	
			$array['price_export'],
			$array['description'],
			$array['barcode']
		);
        return $obj;
    }
	
    protected function targetClass() {return "Resource";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdSupplier(),
			$object->getName(),	
			$object->getNameShort(),	
			$object->getUnit(),	
			$object->getPriceImport(),
			$object->getPriceExport(),
			$object->getDescription(),
			$object->getBarcode()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdSupplier(),
			$object->getName(),
			$object->getNameShort(),
			$object->getUnit(),
			$object->getPriceImport(),
			$object->getPriceExport(),
			$object->getDescription(),
			$object->getBarcode(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
	
	function havingBarcode(array $values) {
        $this->havingBarcodeStmt->execute( $values );
        return new ResourceCollection( $this->havingBarcodeStmt->fetchAll(), $this );
    }
	
	function noneBarcode(array $values) {
        $this->noneBarcodeStmt->execute( $values );
        return new ResourceCollection( $this->noneBarcodeStmt->fetchAll(), $this );
    }
	
	function findBySupplier(array $values) {
        $this->findBySupplierStmt->execute( $values );
        return new ResourceCollection( $this->findBySupplierStmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':id_supplier', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new ResourceCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
	function findByBarcode( $values ) {	
		$this->findByBarcodeStmt->execute( $values );
        $array = $this->findByBarcodeStmt->fetch();
        $this->findByBarcodeStmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;		
    }
	
	function findByBarcode1( $values ) {	
		$this->findByBarcode1Stmt->execute( $values );
        $array = $this->findByBarcode1Stmt->fetch();
        $this->findByBarcode1Stmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;		
    }
	
	function findFreq(array $values){
        $this->findFreqStmt->execute( $values );
        return new ResourceCollection( $this->findFreqStmt->fetchAll(), $this );
    }
	
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}	
}
?>