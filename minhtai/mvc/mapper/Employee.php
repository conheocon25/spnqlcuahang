<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Employee extends Mapper implements \MVC\Domain\EmployeeFinder{

    function __construct() {
        parent::__construct();
				
		$tblEmployee = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."employee";
						
		$selectAllStmt = sprintf("select * from %s", $tblEmployee);
		$selectStmt = sprintf("select * from %s where id=?", $tblEmployee);
		$updateStmt = sprintf("update %s set name=?, gender=?, phone=?, address=? where id=?", $tblEmployee);
		$insertStmt = sprintf("insert into %s (name, gender, phone, address) values(?, ?, ?, ?)", $tblEmployee);
		$deleteStmt = sprintf("delete from %s where id=?", $tblEmployee);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
			
    } 
    function getCollection( array $raw ) {
        return new EmployeeCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Employee( 
			$array['id'],			
			$array['name'],
			$array['gender'],
			$array['phone'],			
			$array['address']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Employee";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getName(),
			$object->getGender(),
			$object->getPhone(),			
			$object->getAddress()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(			
			$object->getName(),
			$object->getGender(),
			$object->getPhone(),
			$object->getAddress(),
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
		$tblEmployee = $prefix."employee";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
				`gender` tinyint(2) NOT NULL,
				`phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
				`address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

			INSERT INTO %s (`id`, `name`, `gender`, `phone`, `address`) VALUES
			(1, 'Em Xuân', 0, '0919153189', 'Vĩnh Long'),
			(2, 'Em Hằng', 0, '0919153113', 'Vĩnh Long'),
			(3, 'Em Tiên', 0, '0919153111', 'Đồng Tháp');
		", $tblEmployee, $tblEmployee);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblEmployee = $prefix."employee";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblEmployee);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>