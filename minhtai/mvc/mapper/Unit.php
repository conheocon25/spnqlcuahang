<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Unit extends Mapper implements \MVC\Domain\UnitFinder{

    function __construct() {
        parent::__construct();
				
		$tblUnit = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."unit";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblUnit);
		$selectStmt = sprintf("select *  from %s where id=?", $tblUnit);
		$updateStmt = sprintf("update %s set name=? where id=?", $tblUnit);
		$insertStmt = sprintf("insert into %s (name) values(?)", $tblUnit);
		$deleteStmt = sprintf("delete from %s where id=?", $tblUnit);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		
    } 
    function getCollection( array $raw ) {
        return new UnitCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Unit( 
			$array['id'],
			$array['name']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Unit";
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
	function create( $prefix ){
		$tblUnit = $prefix."unit";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
				`id` int(25) NOT NULL AUTO_INCREMENT,
				`name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,				
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

			INSERT INTO %s (`id`, `name`) VALUES
			(1, 'Ly'),
			(2, 'Lon'),
			(3, 'Điếu'),			
			(4, 'Chai');
		", $tblUnit, $tblUnit);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblUnit = $prefix."unit";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblUnit);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>