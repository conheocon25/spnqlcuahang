<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class UserCommand extends Object{

    private $Id;
	private $Command;
	private $Type;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( 
		$Id = null,
		$Command = null,
		$Type = null		
	){
        $this->Id = $Id;
		$this->Command = $Command;
		$this->Type = $Type;
		
        parent::__construct( $Id );
    }	
    function getId() {
        return $this->Id;
    } 	
		
    function setCommand( $Command ) {
        $this->Command = $Command;
        $this->markDirty();
    }   
	function getCommand( ) {
        return $this->Command;
    }
	
	function setType( $Type ) {
        $this->Type = $Type;
        $this->markDirty();
    }   
	function getType( ) {
        return $this->Type;
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