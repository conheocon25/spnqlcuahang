<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class UserCommand extends Mapper implements \MVC\Domain\UserCommandFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select * from vendaf_user_command");
        $this->selectStmt = self::$PDO->prepare( 
                            "select * from vendaf_user_command where id=?");
		$this->findByStmt = self::$PDO->prepare( 
                            "select * from vendaf_user_command where type=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update vendaf_user_command set name=?, phone=?, address=?, email=?, banner=?, prefix=?, UserCommand=?, datecreate=?, dateupdate=?, dateactivity=?, type=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into vendaf_user_command ( name, phone, address, email, banner, prefix, UserCommand, datecreate, dateupdate, dateactivity, type) values(?,?,?,?,?,?,?,?,?,?,?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from vendaf_user_command where id=?");
				
    } 
    function getCollection( array $raw ) {
        return new UserCommandCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\UserCommand( 
			$array['id'], 
			$array['command'],
			$array['type']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "UserCommand";
    }
	
	function findBy( $values ) {	
        $this->findByStmt->execute( $values );
        return new UserCommandCollection( $this->findByStmt->fetchAll(), $this );
    }
	
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
		
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			
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