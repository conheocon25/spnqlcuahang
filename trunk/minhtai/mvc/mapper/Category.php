<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Category extends Mapper implements \MVC\Domain\CategoryFinder {

    function __construct() {
        parent::__construct();
				
		$tblCategory = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."category";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblCategory);
		$selectStmt = sprintf("select *  from %s where id=?", $tblCategory);
		$updateStmt = sprintf("update %s set name=?, picture=? where id=?", $tblCategory);
		$insertStmt = sprintf("insert into %s ( name, picture) values(?, ?)", $tblCategory);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCategory);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		
    } 
    function getCollection( array $raw ) {
        return new CategoryCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Category( 
			$array['id'], 
			$array['name'],
			$array['picture'] 
			);
        return $obj;
    }

    protected function targetClass() {        
		return "Category";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			"default"
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getPicture(),
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
		$tblCategory = $prefix."category";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
				`id` int(25) NOT NULL AUTO_INCREMENT,
				`name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
				`picture` binary(255) DEFAULT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

			INSERT INTO %s (`id`, `name`, `picture`) VALUES
			(1, 'Chanh', NULL),
			(2, 'Sữa - Ca cao', NULL),
			(3, 'Cafe', NULL),
			(4, 'Cam', NULL),
			(5, 'Trà', NULL),
			(6, 'Trà Lipton', NULL),
			(7, 'Sinh tố', NULL),
			(8, 'Nước uống đóng chai', NULL),
			(9, 'Thức uống làm đẹp da', NULL),
			(10, 'Thức uống khác', NULL),
			(11, 'Thuốc hút', NULL);
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