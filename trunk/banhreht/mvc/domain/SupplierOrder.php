<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class SupplierOrder extends Object{

    private $Id;
	private $IdSupplier;
	private $Date;
    private $Note;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdSupplier=null, $Date=null, $Note=null) {
        $this->Id = $Id;
		$this->IdSupplier = $IdSupplier;
		$this->Date = $Date;
		$this->Note = $Note;
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
    
	function setIdSupplier( $IdSupplier ) {$this->IdSupplier = $IdSupplier;$this->markDirty();}
    function getIdSupplier( ) {return $this->IdSupplier;}
	function getSupplier( ) {	
		$mSupplier = new \MVC\Mapper\Supplier();
		$Supplier = $mSupplier->find($this->IdSupplier);		
        return $Supplier;
    }
	
	function getDate( ) {return $this->Date;}
    function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}
	function getDatePrint( ) {$Date = new \MVC\Library\Date($this->Date); return $Date->getDateFormat();}
			
	function getNote( ) {return $this->Note;}
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	
	function getTrackAll(){		
		$mOD = new \MVC\Mapper\SupplierOrderDetail();
		$DetailAll = $mOD->trackBy(array($this->getId(), $this->getIdSupplier(), $this->getId()));
		return $DetailAll;
	}
	
	function getDetailAll(){		
		$mOD = new \MVC\Mapper\SupplierOrderDetail();
		$DetailAll = $mOD->findBy(array($this->getId()));		
		return $DetailAll;
	}
	
	function getValue(){
		$DetailAll = $this->getDetailAll();
		$Count = 0;
		while ($DetailAll->valid()){
			$Count += $DetailAll->current()->getValue();
			$DetailAll->next();
		}
		return $Count;
	}
	
	function getValuePrint(){
		$Value = new \MVC\Library\Number($this->getValue());
		return $Value->formatCurrency()." đ";
	}
	
	function getValueStrPrint(){
		$Value = new Number($this->getValue());
		return $Value->readDigit()." đồng";
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdSupplier' 	=> $this->getIdSupplier(),
			'Date'			=> $this->getDate(),
			'Note'	=> $this->getNote()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];	
		$this->IdSupplier 	= $Data[1];	
		$this->Date 		= $Data[2];
		$this->Note 	= $Data[3];
    }
	
	function toXML($Doc){
		$Obj = $Doc->createElement( "orderimport" );
		$Obj->setAttributeNode(new \DOMAttr('id', $this->getId()));
						
		$IdSupplier = $Doc->createElement( "idsupplier" );
		$IdSupplier->appendChild($Doc->createTextNode( $this->getIdSupplier() ));
		
		$Date = $Doc->createElement( "date" );
		$Date->appendChild($Doc->createTextNode( $this->getDate() ));
									
		$Note = $Doc->createElement( "description" );
		$Note->appendChild($Doc->createTextNode( $this->getNote() ));
		
		$Obj->appendChild( $IdSupplier	);		
		$Obj->appendChild( $Date 		);		
		$Obj->appendChild( $Note	);
		
		return $Obj;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLPrint()	{return "/import/supplier/".$this->getIdSupplier()."/".$this->getId()."/print";}
	function getURLDetail()	{return "/import/supplier/".$this->getIdSupplier()."/".$this->getId();}
	function getURLExe()	{return "/import/supplier/".$this->getIdSupplier()."/".$this->getId()."/exe";}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>