<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class SaveResource extends Mapper implements \MVC\Domain\SaveResourceFinder {

    function __construct() {
        parent::__construct();
		
		$tblSaveResource = "shopc_save_resource";
						
		$selectAllStmt 	= sprintf("select * from %s ", $tblSaveResource);
		$selectStmt 	= sprintf("select * from %s where id=?", $tblSaveResource);
		$updateStmt 	= sprintf("update %s set idsave=?, `idresource`=?, `discount`=?, `value`=? where id=?", $tblSaveResource);
		$insertStmt 	= sprintf("insert into %s ( idsave, `idresource`, `discount`, `value`) values(?, ?, ?, ?)", $tblSaveResource);
		$deleteStmt 	= sprintf("delete from %s where id=?", $tblSaveResource);
		$findByPageStmt = sprintf("SELECT * FROM  %s LIMIT :start,:max", $tblSaveResource);
		$findByStmt 	= sprintf("select * from %s where idsave=?", $tblSaveResource);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
									
    } 
    function getCollection( array $raw ) {return new SaveResourceCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\SaveResource( 
			$array['id'],
			$array['idsave'],
			$array['idresource'],
			$array['discount'],
			$array['value']
		);
        return $obj;
    }
	
    protected function targetClass() {  return "SaveResource";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdSave(),
			$object->getIdResource(),
			$object->getDiscount(),
			$object->getValue()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdSave(),
			$object->getIdResource(),
			$object->getDiscount(),
			$object->getValue(),
			$object->getId()
		);				
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}	
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBy(array $values) {
        $this->findByStmt->execute( $values );
        return new SaveResourceCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByPage( $values ) {
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new SaveResourceCollection( $this->findByPageStmt->fetchAll(), $this );
    }	
}
?>