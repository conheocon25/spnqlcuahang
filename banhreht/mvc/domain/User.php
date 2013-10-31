<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class User extends Object{

    private $id;
	private $user;
	private $pass;
    private $gender;
	private $note;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $id=null, $user=null, $pass=null, $gender=null, $note=null ) {
        $this->id = $id;
		$this->user = $user;
		$this->pass = $pass;
		$this->gender = $gender;
		$this->note = $note;
        parent::__construct( $id );
    }
    function getId( ) {
        return $this->id;
    }	
	
    function setPass( $pass_s ) {
        $this->pass = $pass_s;
        $this->markDirty();
    }
    function getPass( ) {
        return $this->pass;
    }
    
	function setGender( $gender_s ) {
        $this->gender = $gender_s;
        $this->markDirty();
    }
	function getGender( ) {
        return $this->gender;
    }
	
	function setNote( $note_s ) {
        $this->note = $note_s;
        $this->markDirty();
    }
	function getNote( ) {
        return $this->note;
    }
	
	function setUser( $user_s ) {
        $this->user = $user_s;
        $this->markDirty();
    }
	function getUser( ) {
        return strtoupper($this->user);
    }
	function getPictureLinked( ) {
		if ($this->gender == 0)
			return "mvc/templates/theme/image/user_female.png";
        return "mvc/templates/theme/image/user_male.png";
    }
	function getUpdateLinked() {
        return "?cmd=UpdateUser&id_user=".$this->id;
    }
	function getViewLinked() {
        return "?cmd=".$this->id;
    }
		
    static function findAll() {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->findAll();
    }
    static function find( $id ) {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->find( $id );
    }	
}

?>
