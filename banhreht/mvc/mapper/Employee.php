<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class Employee extends Mapper implements \MVC\Domain\EmployeeFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT id, name, sex, phone, address, factory FROM braemployee order by name");

		$this->findByFactoryStmt = self::$PDO->prepare( 
                            "SELECT id, name, sex, phone, address, factory FROM braemployee WHERE factory=? order by name");
		$this->findByPositionInFactoryStmt = self::$PDO->prepare( 
                            "SELECT id, name, sex, phone, address, factory FROM braemployee WHERE factory = ? order by name "
							);
		$this->countStmt = self::$PDO->prepare( 
                            "SELECT count(id) num FROM braemployee WHERE factory=?");
							
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT id, name, sex, phone, address, factory  FROM braemployee WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braemployee SET name=?, sex=?, phone=?, address=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into braemployee ( name, sex, phone, address, factory) 
                             values( ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE from braemployee WHERE id=? 
                             ");
    } 
    function getCollection( array $raw ) {        
		return new EmployeeCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
		
        $obj = new \MVC\Domain\Employee( 
			$array['id'], 
			$array['name'], 
			$array['sex'], 
			$array['phone'], 
			$array['address'], 
			$array['factory'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "Employee";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getName(), 
			$object->getSex(), 
			$object->getPhone(), 
			$object->getAddress(),
			$object->getFactory()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getName(), 
			$object->getSex(), 
			$object->getPhone(), 
			$object->getAddress(), 			
			$object->getId()
		); 
        $this->updateStmt->execute( $values );
    }

	function doDelete( array $values ) {    
        $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }

    function selectAllStmt() {		
        return $this->selectAllStmt;
    }
	function findByFactory( $values ) {
        $this->findByFactoryStmt->execute( $values);
        return new EmployeeCollection( $this->findByFactoryStmt->fetchAll(), $this );
    }
	function findByPositionInFactory( $values ) {
		$sql = "SELECT id, name, sex, phone, address, factory FROM braemployee WHERE factory = ".$values[0]." order by name LIMIT ".$values[1].",1";
		$this->findByPositionInFactoryStmt = self::$PDO->prepare( $sql);							
        $this->findByPositionInFactoryStmt->execute(null);
				
        $array = $this->findByPositionInFactoryStmt->fetch( ); 
        $this->findByPositionInFactoryStmt->closeCursor( );
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );        
        return $object;
    }
	function count( $values ) {
        $this->countStmt->execute( $values);
        return 1;
    }
}
?>
