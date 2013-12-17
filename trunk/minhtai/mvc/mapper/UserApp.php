<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class UserApp extends Mapper implements \MVC\Domain\UserAppFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select * from vendaf_user_app");
        $this->selectStmt = self::$PDO->prepare( 
                            "select * from vendaf_user_app where id=?");
		$this->findByStmt = self::$PDO->prepare( 
                            "select * from vendaf_user_app where id_user=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update vendaf_user_app set id_app=?, id_user=?, permission=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into vendaf_user_app ( id_user, id_app, permission) values(?,?,?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from vendaf_user_app where id=?");
				
    } 
    function getCollection( array $raw ) {
        return new UserAppCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\UserApp( 
			$array['id'], 
			$array['id_user'],
			$array['id_app'],
			$array['permission']			
		);
        return $obj;
    }

    protected function targetClass() {        
		return "UserApp";
    }
	
	function findBy( $values ) {	
        $this->findByStmt->execute( $values );
        return new UserAppCollection( $this->findByStmt->fetchAll(), $this );
    }
	
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdUser(),
			$object->getIdApp(),
			$object->getPermission()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
		
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdUser(),
			$object->getApp(),
			$object->getPermission(),
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
			
	
}
?>