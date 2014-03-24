<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Resource extends Mapper implements \MVC\Domain\ResourceFinder {

    function __construct() {
        parent::__construct();
		$tblResource = "shopc_resource";
						
		$selectAllStmt = sprintf("select * from %s", $tblResource);
		$selectStmt = sprintf("select * from %s where id=?", $tblResource);
		$updateStmt = sprintf("update %s set 
				idsupplier=?, 
				idcategory=?, 
				name=?, 
				code=?, 
				price1=?, 
				price2=?, 
				madein=?, 
				madeby=?, 
				type=?, 
				style=?, 
				canvas=?, 
				note=? 
			where id=?", $tblResource);
			
		$insertStmt = sprintf("insert into %s ( 
					idsupplier, 
					idcategory, 
					name, 
					code, 
					price1, 
					price2, 
					madein, 
					madeby, 
					type, 
					style, 
					canvas, 
					note
				) 
				values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $tblResource);
		$deleteStmt = sprintf("delete from %s where id=?", $tblResource);
		$findBySupplierStmt = sprintf("select * from %s where idsupplier=?", $tblResource);
		$findByCategoryStmt = sprintf("select * from %s where idcategory=?", $tblResource);
		
		$findByPageStmt = sprintf("
							SELECT *
							FROM %s
							WHERE idsupplier=:idsupplier
							LIMIT :start,:max
				", $tblResource);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findBySupplierStmt = self::$PDO->prepare($findBySupplierStmt);
		$this->findByCategoryStmt = self::$PDO->prepare($findByCategoryStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
		
    } 
    function getCollection( array $raw ) {return new ResourceCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Resource( 
			$array['id'],
			$array['idsupplier'],
			$array['idcategory'],
			$array['name'],				
			$array['code'],	
			$array['price1'],	
			$array['price2'],	
			$array['madein'],	
			$array['madeby'],	
			$array['type'],	
			$array['style'],	
			$array['canvas'],	
			$array['note']			
		);
        return $obj;
    }
	
    protected function targetClass(){return "Resource";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdSupplier(),
			$object->getIdCategory(),
			$object->getName(),	
			$object->getCode(),				
			$object->getPrice1(),	
			$object->getPrice2(),
			$object->getMadeIn(),
			$object->getMadeBy(),
			$object->getType(),
			$object->getStyle(),
			$object->getCanvas(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ){
        $values = array( 
			$object->getIdSupplier(),
			$object->getIdCategory(),
			$object->getName(),	
			$object->getCode(),				
			$object->getPrice1(),	
			$object->getPrice2(),
			$object->getMadeIn(),
			$object->getMadeBy(),
			$object->getType(),
			$object->getStyle(),
			$object->getCanvas(),
			$object->getNote(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}			
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBySupplier(array $values) {
        $this->findBySupplierStmt->execute( $values );
        return new ResourceCollection( $this->findBySupplierStmt->fetchAll(), $this );
    }
	
	function findByCategory(array $values) {
        $this->findByCategoryStmt->execute( $values );
        return new ResourceCollection( $this->findByCategoryStmt->fetchAll(), $this );
    }
	
	function findByPage( $values ){
		$this->findByPageStmt->bindValue(':idsupplier', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new ResourceCollection( $this->findByPageStmt->fetchAll(), $this );
    }
}
?>