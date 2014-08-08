<?php 
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Loto extends Object{
	//-------------------------------------------------------------------------------
	//DEFINE PROPERTY
	//-------------------------------------------------------------------------------
	private $Id;
	private $IdTD;
	private $Name;
	private $Location;
	private $G81;
	private $G71;
	private $G61;
	private $G62;	
	private $G63;	
	private $G51;	
	private $G41;	
	private $G42;	
	private $G43;	
	private $G44;	
	private $G45;	
	private $G46;	
	private $G47;	
	private $G31;	
	private $G32;	
	private $G21;	
	private $G11;	
	private $G00;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
	function __construct(	$Id=null, 
							$IdTD=null, 
							$Name=null,
							$Location=null,
							$G81=null,
							$G71=null,
							$G61=null,
							$G62=null,
							$G63=null,
							$G51=null,
							$G41=null,
							$G42=null,
							$G43=null,
							$G44=null,
							$G45=null,
							$G46=null,
							$G47=null,
							$G31=null,
							$G32=null,
							$G21=null,
							$G11=null,
							$G00=null
	) {
		$this->Id 		= $Id;
		$this->IdTD 	= $IdTD;
		$this->Name 	= $Name;
		$this->Location	= $Location;
		$this->G81		= $G81;
		$this->G71		= $G71;
		$this->G61		= $G61;
		$this->G62		= $G62;
		$this->G63		= $G63;
		$this->G51		= $G51;
		$this->G41		= $G41;
		$this->G42		= $G42;	
		$this->G43		= $G43;	
		$this->G44		= $G44;	
		$this->G45		= $G45;	
		$this->G46		= $G46;	
		$this->G47		= $G47;	
		$this->G31		= $G31;	
		$this->G32		= $G32;	
		$this->G21		= $G21;	
		$this->G11		= $G11;	
		$this->G00		= $G00;
		
		parent::__construct( $Id );
	}
		
	function getId() 		{return $this->Id;}
	function setIdTD($IdTD) {$this->IdTD= $IdTD; $this->markDirty();}
	function getIdTD() 		{return $this->IdTD; }
	function getTD() 		{
		$mTD = new \MVC\Mapper\TrackingDaily();
		$TD = $mTD->find($this->IdTD);		
		return $$TD; 
	}
	
	function setName($Name) {$this->Name = $Name;$this->markDirty();}
	function getName() {return $this->Name;}
	
	function setLocation($Location) {$this->Location = $Location; $this->markDirty();}
	function getLocation() 			{return $this->Location;}
	
	function setG81($G81) 	{$this->G81 = $G81; $this->markDirty();}
	function getG81() 		{return $this->G81;}
	
	function setG71($G71) 	{$this->G71 = $G71; $this->markDirty();}
	function getG71() 		{return $this->G71;}
	
	function setG61($G61) 	{$this->G61 = $G61; $this->markDirty();}
	function getG61() 		{return $this->G61;}
	
	function setG62($G61) 	{$this->G62 = $G62; $this->markDirty();}
	function getG62() 		{return $this->G62;}
	
	function setG63($G61) 	{$this->G63 = $G63; $this->markDirty();}
	function getG63() 		{return $this->G63;}
	
	function setG51($G51) 	{$this->G51 = $G51; $this->markDirty();}
	function getG51() 		{return $this->G51;}
	
	function setG41($G41) 	{$this->G41 = $G41; $this->markDirty();}
	function getG41() 		{return $this->G41;}
	
	function setG42($G42) 	{$this->G42 = $G42; $this->markDirty();}
	function getG42() 		{return $this->G42;}
	
	function setG43($G43) 	{$this->G43 = $G43; $this->markDirty();}
	function getG43() 		{return $this->G43;}
	
	function setG44($G44) 	{$this->G44 = $G44; $this->markDirty();}
	function getG44() 		{return $this->G44;}
	
	function setG45($G45) 	{$this->G45 = $G45; $this->markDirty();}
	function getG45() 		{return $this->G45;}
	
	function setG46($G46) 	{$this->G46 = $G46; $this->markDirty();}
	function getG46() 		{return $this->G46;}
	
	function setG47($G47) 	{$this->G47 = $G47; $this->markDirty();}
	function getG47() 		{return $this->G47;}
	
	function setG31($G31) 	{$this->G31 = $G31; $this->markDirty();}
	function getG31() 		{return $this->G31;}
	
	function setG32($G32) 	{$this->G32 = $G32; $this->markDirty();}
	function getG32() 		{return $this->G32;}
	
	function setG21($G21) 	{$this->G21 = $G21; $this->markDirty();}
	function getG21() 		{return $this->G21;}
	
	function setG11($G11) 	{$this->G11 = $G11; $this->markDirty();}
	function getG11() 		{return $this->G11;}
	
	function setG00($G00) 	{$this->G00 = $G00; $this->markDirty();}
	function getG00() 		{return $this->G00;}
	
	function toString(){
		$S = " ĐÀI ";
		$S .= $this->Location." ";
		$S .= "LOẠI ".$this->Name." ";
		$S .= "Giải 8: ".$this->G81." ";
		$S .= "Giải 7: ".$this->G71." ";
		$S .= "Giải 6: ".$this->G61."-".$this->G62."-".$this->G63." ";
		$S .= "Giải 5: ".$this->G51." ";
		$S .= "Giải 4: ".$this->G41."-".$this->G42."-".$this->G43."-".$this->G44."-".$this->G45."-".$this->G46."-".$this->G47." ";
		$S .= "Giải 3: ".$this->G31."-".$this->G32." ";
		$S .= "Giải 2: ".$this->G21." ";
		$S .= "Giải 1: ".$this->G11." ";
		$S .= "ĐẶC BIỆT: ".$this->G00." ";		
		return $S;
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdTD' 			=> $this->getIdTD(),
			'Name'			=> $this->getName(),
			'Location'		=> $this->getLocation(),
			'G81'			=> $this->getG81(),
			'G71'			=> $this->getG71(),
			'G61'			=> $this->getG61(),
			'G62'			=> $this->getG62(),
			'G63'			=> $this->getG63(),
			'G51'			=> $this->getG51(),
			'G41'			=> $this->getG41(),
			'G42'			=> $this->getG42(),
			'G43'			=> $this->getG43(),
			'G44'			=> $this->getG44(),
			'G45'			=> $this->getG45(),
			'G46'			=> $this->getG46(),
			'G47'			=> $this->getG47(),
			'G31'			=> $this->getG31(),
			'G32'			=> $this->getG32(),
			'G21'			=> $this->getG21(),
			'G11'			=> $this->getG11(),
			'G00'			=> $this->getG00()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 		= $Data[0];
		$this->IdTD		= $Data[1];
		$this->Name 	= $Data[2];
		$this->Location	= $Data[3];
		$this->G81		= $Data[4];
		$this->G71		= $Data[5];
		$this->G61		= $Data[6];
		$this->G62		= $Data[7];
		$this->G63		= $Data[8];
		$this->G51		= $Data[9];
		$this->G41		= $Data[10];
		$this->G42		= $Data[11];
		$this->G43		= $Data[12];
		$this->G44		= $Data[13];
		$this->G45		= $Data[14];
		$this->G46		= $Data[15];
		$this->G47		= $Data[16];
		$this->G31		= $Data[17];
		$this->G32		= $Data[18];
		$this->G21		= $Data[19];
		$this->G11		= $Data[20];
		$this->G00		= $Data[21];
    }	
	//-------------------------------------------------------------------------------
	//GET LIST
	//-------------------------------------------------------------------------------
						
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	
	//-------------------------------------------------------------------------------
	static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
	static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	//-------------------------------------------------------------------------------
	
}
?>