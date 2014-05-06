<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Image extends Object{

    private $Id;	
	private $IdResource;	
	private $Name;	
	private $Date;
	private $URL;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$IdResource=null, 		
		$Name=null, 
		$Date=null, 		
		$URL=null)
	{        	
		$this->Id			= $Id;		
		$this->IdResource	= $IdResource;	
		$this->Name			= $Name;		
		$this->Date			= $Date;		
		$this->URL			= $URL;
	
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
		
	function getIdResource( ) {return $this->IdResource;}
    function setIdResource( $IdResource ) {$this->IdResource = $IdResource;$this->markDirty();}
	function getResource(){
		$mResource = new \MVC\Mapper\Resource();
		$Resource = $mResource->find( $this->IdResource);
		return $Resource;
	}
	
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}
    function getName( ) {return $this->Name;}
	
	function setDate( $Date ) {$this->Date = $Date; $this->markDirty();}
    function getDate( ) {return $this->Date;}
		
	function getURL( ) {return $this->URL;}
	function setURL( $URL ) {$this->URL = $URL; $this->markDirty(); }
		
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),	
			'IdResource'	=> $this->getIdResource(),			
			'Name'			=> $this->getName(),			
			'Date'			=> $this->getDate(),			
			'URL'			=> $this->getURL()
		);		
		return json_encode($json);
	}
	
	function setArray( $Data ){        	
		$this->Id			= $Data[0];
		$this->IdResource	= $Data[1];		
		$this->Name			= $Data[2];
		$this->Date			= \date("Y-m-d");
		$this->URL			= $Data[4];
    }
		
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>