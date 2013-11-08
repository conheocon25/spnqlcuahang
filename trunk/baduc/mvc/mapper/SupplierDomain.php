<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class SupplierDomain extends Mapper implements \MVC\Domain\DomainFinder{

    function __construct() {
        parent::__construct();
				
		$tblSupplierDomain = "tbl_supplier_domain";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblSupplierDomain);
		$selectStmt = sprintf("select *  from %s where id=?", $tblSupplierDomain);
		$updateStmt = sprintf("update %s set id_supplier=?, id_domain=? where id=?", $tblSupplierDomain);
		$insertStmt = sprintf("insert into %s (id_supplier, id_domain) values(?, ?)", $tblSupplierDomain);
		$deleteStmt = sprintf("delete from %s where id=?", $tblSupplierDomain);
		$findByStmt = sprintf("SELECT * FROM  %s WHERE id_supplier=?", $tblSupplierDomain);
		$findByPageStmt = sprintf("SELECT * FROM  %s ORDER BY name LIMIT :start,:max", $tblSupplierDomain);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
    } 
    function getCollection( array $raw ) {return new SupplierDomainCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\SupplierDomain( 
			$array['id'],
			$array['id_supplier'],
			$array['id_domain']
		);
        return $obj;
    }

    protected function targetClass() {return "SupplierDomain";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdSupplier(),
			$object->getIdDomain() 
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }	     
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdSupplier(),
			$object->getIdDomain(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBy($values ){
        $this->findByStmt->execute( $values );
        return new SupplierDomainCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new SupplierDomainCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
}
?>