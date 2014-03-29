<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Category extends Mapper implements \MVC\Domain\CategoryFinder {

    function __construct() {
        parent::__construct();
				
		$tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."category";
		
		$selectAllStmt = sprintf("select * from %s", $tblCategory);
		$selectStmt = sprintf("select *  from %s where id=?", $tblCategory);
		$updateStmt = sprintf("update %s set name=? where id=?", $tblCategory);
		$insertStmt = sprintf("insert into %s ( name) values(?)", $tblCategory);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCategory);
		
		$trackingValueStmt = sprintf("			
			SELECT 
				sum(count*price) as value
			FROM 
				fipoma_ana_order_export_detail OE INNER JOIN
				(
					SELECT RES.id as id, RES.id_category, CAT.id_parent
					FROM 
						fipoma_ana_category CAT INNER JOIN 
						fipoma_ana_resource RES ON CAT.id=RES.id_category
				) RC	
				ON OE.id_resource = RC.id
			WHERE
				RC.id_parent = ?
			GROUP BY
				RC.id_parent
		", $tblCategory);
		
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);		
		$this->trackingValueStmt = self::$PDO->prepare($trackingValueStmt);
    }
	
    function getCollection( array $raw ) {
        return new CategoryCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Category( 
			$array['id'], 
			$array['name']			
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Category";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( $object->getName() ); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),			
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }

    function selectStmt() {
        return $this->selectStmt;
    }
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
			
	function trackingValue($values) {
		$this->trackingValueStmt->execute($values);
		$result = $this->trackingValueStmt->fetchAll();
		if($result != null) {
			return $result[0][0];
		} else {
			return -1;			
		}
    }
	
	function create( $prefix ){
		$tblCategory = $prefix."category";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (			
		", $tblCategory, $tblCategory);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblCategory = $prefix."category";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblCategory);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>