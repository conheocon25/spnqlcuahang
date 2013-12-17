<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
use MVC\Library\Logger;

class UserApp extends Object{

    private $Id;
	private $IdUser;
	private $IdApp;
	private $Permission;
	
	private $App;
	private $User;
		
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( 
		$Id = null,
		$IdUser = null,
		$IdApp = null,		
		$Permission = null
	){
        $this->Id = $Id;
		$this->IdUser = $IdUser;
		$this->IdApp = $IdApp;
		$this->Permission = $Permission;
								
        parent::__construct( $Id );
    }	
    function getId() {
        return $this->Id;
    } 	
		
    function setIdUser( $IdUser ) {
        $this->IdUser = $IdUser;
        $this->markDirty();
    }   
	function getIdUser( ) {
        return $this->IdUser;
    }
	
	function setIdApp( $IdApp ) {
        $this->IdApp = $IdApp;
        $this->markDirty();
    }   
	function getIdApp( ) {
        return $this->IdApp;
    }
		
	function setPermission( $Permission ) {
        $this->Permission = $Permission;
        $this->markDirty();
    }   
	function getPermission( ) {
        return $this->Permission;
    }
	function getPermissionPrint(){
		$arr = array("Sở hữu", "Chia sẻ");
		return $arr[$this->Permission];
	}
	
	function getApp(){
		if (!isset($this->App)){
			$mApp = new \MVC\Mapper\App();
			$this->App = $mApp->find($this->IdApp);			
		}
		return $this->App;
	}
	
	function getUser(){
		if (!isset($this->User)){
			$mUser = new \MVC\Mapper\User();
			$this->User = $mUser->find($this->IdUser);
		}
		return $this->User;
	}
					
    static function findAll() {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->findAll();
    }
	
    static function find( $Id ) {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->find( $Id );
    }
	
}
?>