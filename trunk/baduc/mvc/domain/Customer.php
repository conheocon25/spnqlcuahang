<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Customer extends Object{
    private $Id;
	private $Name;
	private $Alias;
	private $Phone;
    private $Type;
    private $Card;
    private $Note;
    private $Address;
	private $Picture;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $Name=null, $Alias=null, $Type=null, $Card=null, $Phone=null, $Address=null, $Note=null, $Picture=null ) {
        $this->Id = $Id;
		$this->Name 	= $Name;
		$this->Alias 	= $Alias;
		$this->Type 	= $Type;
		$this->Card 	= $Card;
		$this->Phone 	= $Phone;
		$this->Address 	= $Address;
		$this->Note 	= $Note;
		$this->Picture = $Picture;
        parent::__construct( $Id );
    }
	function setId( $Id) {return $this->Id = $Id;}
    function getId( ) {return $this->Id;}
		
	function getType(){return $this->Type;}	
    function setType( $Type ) {$this->Type = $type;$this->markDirty();}
	function getTypePrint(){if ($this->Type==1)return "VIP"; return "Thường";}
	
	function getCard(){return $this->Card;}	
    function setCard( $Card ) {$this->Card = $Card;$this->markDirty();}
	
	function getNote(){return $this->Note;}	
    function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	
	function getName(){return $this->Name;}	
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}

	function getAlias(){return $this->Alias;}
    function setAlias( $Alias ) {$this->Alias = $Alias;$this->markDirty();}
	
	function getPhone(){return $this->Phone;}
    function setPhone( $Phone ) {$this->Phone = $Phone;$this->markDirty();}
			
    function setAddress( $Address ) {$this->Address = $Address;$this->markDirty();}
	function getAddress(){return $this->Address;}
		
	function setPicture( $Picture ) {$this->Picture = $Picture;$this->markDirty();}
	function getPicture(){return $this->Picture;}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'Name'			=> $this->getName(),
			'Alias'			=> $this->getAlias(),
			'Type'			=> $this->getType(),
			'Card'			=> $this->getCard(),
			'Phone'			=> $this->getPhone(),
			'Address'		=> $this->getAddress(),
			'Note'			=> $this->getNote(),
			'Picture'		=> $this->getPicture()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
		$this->Id 		= $Data[0];
		$this->Name 	= $Data[1];
		$this->Alias 	= $Data[2];
		$this->Type		= $Data[3];
		$this->Card		= $Data[4];
		$this->Phone	= $Data[5];
		$this->Address	= $Data[6];
		$this->Note		= $Data[7];
		$this->Picture	= $Data[8];
    }
		
	function getPaidAll(){
		$mCP = new \MVC\Mapper\PaidCustomer();
		$PaidAll = $mCP->findBy(array($this->getId()));
		return $PaidAll;
	}
	
	function getCollectAll(){
		$mCC = new \MVC\Mapper\CollectCustomer();
		$CollectAll = $mCC->findBy(array($this->getId()));
		return $CollectAll;
	}
	
	function getDomainAll(){
		$mCD = new \MVC\Mapper\CustomerDomain();
		$CDAll = $mCD->findBy(array($this->getId()));
		return $CDAll;
	}
	
	function getTracking($IdDomain){
		$mCT 	= new \MVC\Mapper\CustomerTracking();
		$CTAll 	= $mCT->findBy(array($this->getId(), $IdDomain));
		return $CTAll;
	}
	
	function getTrackingAll(){
		$mCT 	= new \MVC\Mapper\CustomerTracking();
		$CTAll 	= $mCT->findByCustomer(array($this->getId()));
		return $CTAll;
	}
	
	//=================================================================================
	function getURLTracking( $IdDomain ){return "/export/big/".$IdDomain."/".$this->getId();}
	function getURLCollect(){return "/money/collect/customer/".$this->getId();}
	function getURLPaid(){return "/money/paid/customer/".$this->getId();}
	function getURLSettingDomain(){return "/setting/customer/".$this->getId()."/domain";}
	
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
	
}
?>