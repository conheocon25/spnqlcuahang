<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Product extends Mapper implements \MVC\Domain\ProductFinder {

    function __construct() {
        parent::__construct();
		$tblProduct = "shopc_product";
						
		$selectAllStmt = sprintf("select * from %s", $tblProduct);
		$selectStmt = sprintf("select * from %s where id=?", $tblProduct);
		$updateStmt = sprintf("update %s set 
				idsupplier=?, 
				idcategory=?, 
				idmanufacturer=?, 
				name=?, 
				code=?, 
				price1=?,
				price2=?,
				`key`=? 
			where id=?", $tblProduct);
			
		$insertStmt = sprintf("insert into %s ( 
					idsupplier, 
					idcategory, 
					idmanufacturer, 
					name, 
					code, 
					price1,
					price2,					
					`key`
				) 
				values( ?, ?, ?, ?, ?, ?, ?, ?)", $tblProduct);
		$deleteStmt = sprintf("delete from %s where id=?", $tblProduct);
		$findBySupplierStmt = sprintf("select * from %s where idsupplier=? order by idcategory, name", $tblProduct);
		$findByCategoryStmt = sprintf("select * from %s where idcategory=? order by idcategory, name", $tblProduct);
		$findByTopStmt 		= sprintf("select * from %s order by idcategory, name LIMIT 8", $tblProduct);
		$findByManufacturerTopStmt 		= sprintf("select * from %s where idmanufacturer=? order by idcategory, name LIMIT 8", $tblProduct);
		
		$findByCategoryPageStmt = sprintf("
							SELECT *
							FROM %s
							WHERE idcategory=:idcategory
							ORDER BY name
							LIMIT :start,:max
				", $tblProduct);
				
		$findByPageStmt = sprintf("
							SELECT *
							FROM %s
							WHERE idsupplier=:idsupplier
							ORDER BY idcategory, name
							LIMIT :start,:max
				", $tblProduct);
		
		$findByKeyStmt 	= sprintf("select *  from %s where `key`=?", $tblProduct);
		$findByNameStmt = sprintf("select * from %s where name like :name ORDER BY name LIMIT 12", $tblProduct);
				
        $this->selectAllStmt 		= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 			= self::$PDO->prepare($selectStmt);
        $this->updateStmt 			= self::$PDO->prepare($updateStmt);
        $this->insertStmt 			= self::$PDO->prepare($insertStmt);
		$this->deleteStmt 			= self::$PDO->prepare($deleteStmt);
		$this->findBySupplierStmt 	= self::$PDO->prepare($findBySupplierStmt);
		$this->findByCategoryStmt 	= self::$PDO->prepare($findByCategoryStmt);
		$this->findByTopStmt 		= self::$PDO->prepare($findByTopStmt);
		$this->findByManufacturerTopStmt 		= self::$PDO->prepare($findByManufacturerTopStmt);
		
		$this->findByPageStmt 		= self::$PDO->prepare($findByPageStmt);
		$this->findByKeyStmt 		= self::$PDO->prepare($findByKeyStmt);
		$this->findByNameStmt 		= self::$PDO->prepare($findByNameStmt);
		
		$this->findByCategoryPageStmt 		= self::$PDO->prepare($findByCategoryPageStmt);
    } 
    function getCollection( array $raw ) {return new ProductCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Product( 
			$array['id'],
			$array['idsupplier'],
			$array['idcategory'],
			$array['idmanufacturer'],
			$array['name'],				
			$array['code'],	
			$array['price1'],	
			$array['price2'],			
			$array['key']
		);
        return $obj;
    }
	
    protected function targetClass(){return "Product";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdSupplier(),
			$object->getIdCategory(),
			$object->getIdManufacturer(),
			$object->getName(),
			$object->getCode(),
			$object->getPrice1(),
			$object->getPrice2(),
			$object->getKey()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ){
        $values = array( 
			$object->getIdSupplier(),
			$object->getIdCategory(),
			$object->getIdManufacturer(),
			$object->getName(),
			$object->getCode(),
			$object->getPrice1(),
			$object->getPrice2(),
			$object->getKey(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}			
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBySupplier(array $values) {
        $this->findBySupplierStmt->execute( $values );
        return new ProductCollection( $this->findBySupplierStmt->fetchAll(), $this );
    }
	
	function findByTop(array $values) {
        $this->findByTopStmt->execute( $values );
        return new ProductCollection( $this->findByTopStmt->fetchAll(), $this );
    }
	
	function findByCategory(array $values) {
        $this->findByCategoryStmt->execute( $values );
        return new ProductCollection( $this->findByCategoryStmt->fetchAll(), $this );
    }
	
	function findByPage( $values ){
		$this->findByPageStmt->bindValue(':idsupplier', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new ProductCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
	function findByCategoryPage( $values ){		
		$this->findByCategoryPageStmt->bindValue(':idcategory', $values[0], \PDO::PARAM_INT);
		$this->findByCategoryPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByCategoryPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByCategoryPageStmt->execute();
        return new ProductCollection( $this->findByCategoryPageStmt->fetchAll(), $this );
    }
	
	function findByKey( $values ) {	
		$this->findByKeyStmt->execute( array($values) );
        $array = $this->findByKeyStmt->fetch();
        $this->findByKeyStmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;		
    }
	
	function findByName( $values ) {
		$this->findByNameStmt->bindValue(':name', $values[0]."%", \PDO::PARAM_STR);
		$this->findByNameStmt->execute();
        return new ProductCollection( $this->findByNameStmt->fetchAll(), $this );
    }	
	
	
	function findByManufacturerTop( $values ) {
		$this->findByManufacturerTopStmt->execute( $values );
        return new ProductCollection( $this->findByManufacturerTopStmt->fetchAll(), $this );
    }	
}
?>