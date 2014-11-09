<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Printing extends Mapper implements \MVC\Domain\PrintingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT * FROM braprinting");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT * FROM braprinting WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE braprinting SET id=?, type=?, param1=?, param2=?, param3=?, param4=?, param5=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into braprinting ( id, type, param1, param2, param3, param4, param5 ) 
							VALUES( ?, ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM braprinting WHERE id=?");
    } 
	function getCollection( array $raw ) {
        return new PrintingCollection( $raw, $this );
    }
    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Printing( 
					$array['id'], 
					$array['type'], 
					$array['param1'], 
					$array['param2'], 
					$array['param3'],
					$array['param4'],
					$array['param5']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Printing";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
				$object->getId(), 
				$object->getType(), 
				$object->getParam1(), 
				$object->getParam2(),
				$object->getParam3(),
				$object->getParam4(),
				$object->getParam5()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
				$object->getId(), 
				$object->getType(), 
				$object->getParam1(), 
				$object->getParam2(),
				$object->getParam3(),
				$object->getParam4(),
				$object->getParam5()
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
	
}
?>
