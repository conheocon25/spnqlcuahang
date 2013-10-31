<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class User extends Mapper implements \MVC\Domain\UserFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT * FROM brauser");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT * FROM brauser WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brauser set user=?, gender=?, pass=?, note=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brauser ( id, user, pass, gender, note ) 
							VALUES( ?, ?, ?, ? , ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM brauser WHERE id=?");
		$this->checkStmt = self::$PDO->prepare( 
                            "SELECT id FROM brauser WHERE user=? AND pass=?");
    } 
    function getCollection( array $raw ) {
        return new UserCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\User( 
			$array['id'], 
			$array['user'], 
			$array['pass'], 
			$array['gender'], 
			$array['note'] );
        return $obj;
    }
	
    protected function targetClass() {        
		return "User";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( $object->getId(), $object->getUser(), $object->getPass(), $object->getNote()); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getUser(),
			$object->getGender(), 
			$object->getPass(), 
			$object->getNote(),
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
	function check($name, $pass) {
		$repass = hash("sha512", "saophuongnamnumberone".$pass,false);
		$values = array( $name, $repass);	
        $this->checkStmt->execute( $values );
        $result = $this->checkStmt->fetchAll();
		return $result[0]['id'];
    }
	function createPass($pass) {
		return hash("sha512", "saophuongnamnumberone".$pass,false);
	}
}
?>