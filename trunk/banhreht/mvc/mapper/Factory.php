<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );

class Factory extends Mapper implements \MVC\Domain\FactoryFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT id, name, type, phone, address, description FROM brafactory order by type desc, name");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT id, name, type, phone, address, description FROM brafactory WHERE id=? order by name");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brafactory SET name=?, phone=?, address=?, description=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brafactory( name, type, phone, address, description ) 
                             values( ?, ?, ? , ?, ?)");
		$this->findByPositionStmt = self::$PDO->prepare("");
    } 
    function getCollection( array $raw ) {        
		return new FactoryCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
		
        $obj = new \MVC\Domain\Factory( 
			$array['id'], 
			$array['name'], 
			$array['type'], 
			$array['phone'], 
			$array['address'], 
			$array['description'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "Factory";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getName(),
			$object->getType(),			
			$object->getPhone(), 
			$object->getAddress(), 
			$object->getDescription() 
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getName(), 
			$object->getPhone(), 
			$object->getAddress(), 
			$object->getDescription(), 
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
	function findByPosition( $values ) {
		//echo "value ".$values[0]."-";
		$sql = "SELECT id, name, type, phone, address, description FROM brafactory order by type desc, name LIMIT ".$values[0].",1";
		$this->findByPositionStmt = self::$PDO->prepare( $sql);							
        $this->findByPositionStmt->execute(null);
				
        $array = $this->findByPositionStmt->fetch();
        $this->findByPositionStmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;
    }
}
?>
