<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class ProductInfo extends Object{

    private $Id;
	private $IdProduct;	
	private $Info;	
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$IdProduct=null, 		
		$Info=null
	)
	{        		
		$this->Id				= $Id;
		$this->IdProduct		= $IdProduct;				
		$this->Info				= $Info;
				
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
			
	function getIdProduct( ) {return $this->IdProduct;}
    function setIdProduct( $IdProduct ) {$this->IdProduct = $IdProduct;$this->markDirty();}
	function getProduct(){
		$mProduct 	= new \MVC\Mapper\Product();
		$Product 	= $mProduct->find( $this->getIdProduct() );
		return $Product;
	}
			
    function setInfo( $Info ) {$this->Info = $Info;$this->markDirty();}
    function getInfo( ) {return $this->Info;}
				
	function toJSON(){
		$json = array(
			'Id' 				=> $this->getId(),	
			'IdProduct'			=> $this->getIdProduct(),			
			'Info'				=> $this->getInfo()			
		);		
		return json_encode($json);
	}
	
	function setArray( $Data ){
        	
		$this->Id				= $Data[0];
		$this->IdProduct		= $Data[1];		
		$this->Info				= $Data[2];
    }
	
	function getURLSettingExe(){
		return "/admin/setting/supplier/".$this->getProduct()->getIdSupplier()."/".$this->getIdProduct()."/info/exe";
	}
	
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>