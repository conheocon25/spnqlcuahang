<?php
/** 
 * PHP version 5.3
 *
 * LICENSE: Lưu hành nội bộ
 *
 * @category   Domain
 * @package    MVC\Domain
 * @author     Bùi Thanh Tuấn <tuanbuithanh@gmail.com> 
 * @copyright  2010-2012 SPN Group
 * @license    Bản quyền nhóm
 * @version    SVN: ?
 * @link       mvc/domain/employee.php
 * @see        Employee
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class Employee extends Object{

    private $Id;
	private $Name;
    private $Gender;
	private $Job;
	private $Phone;
	private $Address;
	private $SalaryBase;
			
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Gender=null, $Job=null, $Phone=null, $Address=null, $SalaryBase=null){
        $this->Id = $Id;
		$this->Name = $Name;
		$this->Gender = $Gender;
		$this->Job = $Job;
		$this->Phone = $Phone;
		$this->Address = $Address;
		$this->SalaryBase = $SalaryBase;
		
        parent::__construct( $Id );
    }
			
    function getId( ) {return $this->Id;}
	function getIdPrint( ) {return "e".$this->Id;}
		
	function setName( $Name ) {$this->Name = $Name;$this->markDirty();}
	function getName(){return $this->Name;}
	
    function setGender( $Gender) {$this->Gender = $Gender;$this->markDirty();}
    function getGender( ){return $this->Gender;}
	function getGenderPrint( ){if ($this->Gender==0) return "Nam"; return "Nữ";}
	
	function setJob( $Job) {$this->Job = $Job;$this->markDirty();}
    function getJob( ){return $this->Job;}
	
    function setPhone( $Phone ) {$this->Phone = $Phone;$this->markDirty();}	
    function getPhone( ) {return $this->Phone;}
		
	function setAddress( $Address ) {$this->Address = $Address;$this->markDirty();}
	function getAddress( ) {return $this->Address;}
	
	function setSalaryBase( $SalaryBase ) {$this->SalaryBase = $SalaryBase;$this->markDirty();}
	function getSalaryBase( ) {return $this->SalaryBase;}
	function getSalaryBasePrint( ) {
		$N = new \MVC\Library\Number($this->SalaryBase);
		return $N->formatCurrency();
	}
	
	function getSalaryBaseH( ) {return $this->SalaryBase/30/8;}
	function getSalaryBaseHPrint( ) {
		$N = new \MVC\Library\Number($this->getSalaryBaseH() );
		return $N->formatCurrency();
	}
	
	function getSalaryBaseD( ) {return $this->SalaryBase/30;}
	function getSalaryBaseDPrint( ) {
		$N = new \MVC\Library\Number($this->getSalaryBaseD() );
		return $N->formatCurrency();
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'Name'			=> $this->getName(),
			'Gender'		=> $this->getGender(),
			'Job'			=> $this->getJob(),
			'Phone'			=> $this->getPhone(),
			'Address'		=> $this->getAddress(),
			'SalaryBase'	=> $this->getSalaryBase()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->Name 		= $Data[1];
		$this->Gender 		= $Data[2];
		$this->Job 			= $Data[3];
		$this->Phone 		= $Data[4];
		$this->Address 		= $Data[5];
		$this->SalaryBase 	= $Data[6];
    }
	
	function toXML($Doc){
		$Obj = $Doc->createElement( "employee" );
		$Obj->setAttributeNode(new \DOMAttr('id', $this->getId()));
						
		$Name = $Doc->createElement( "name" );
		$Name->appendChild($Doc->createTextNode( $this->getName() ));
		
		$Gender = $Doc->createElement( "gender" );
		$Gender->appendChild($Doc->createTextNode( $this->getGender() ));
		
		$Job = $Doc->createElement( "job" );
		$Job->appendChild($Doc->createTextNode( $this->getJob() ));
		
		$Phone = $Doc->createElement( "phone" );
		$Phone->appendChild($Doc->createTextNode( $this->getPhone() ));
		
		$Address = $Doc->createElement( "address" );
		$Address->appendChild($Doc->createTextNode( $this->getAddress() ));
		
		$SalaryBase = $Doc->createElement( "salarybase" );
		$SalaryBase->appendChild($Doc->createTextNode( $this->getSalaryBase() ));
		
		$Obj->appendChild( $Name 		);
		$Obj->appendChild( $Gender 		);
		$Obj->appendChild( $Job 		);
		$Obj->appendChild( $Phone 		);
		$Obj->appendChild( $Address 	);
		$Obj->appendChild( $SalaryBase 	);
		
		return $Obj;
	}
		
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------						
	function getPayRollAll(){
		$mPPR = new \MVC\Mapper\PaidPayRoll();
		$PRRAll = $mPPR->findBy(array($this->getId()));
		return $PRRAll;
	}
	
	function getPayRoll($Date){
		$mPR = new \MVC\Mapper\PayRoll();		
		$IdPR = $mPR->check(array($this->getId(), $Date));
		$PR = $mPR->find($IdPR);
		return $PR;
	}
		
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $id );}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLUpdExe(){return "/object/upd/Employee/".$this->getId();}
	function getURLDelExe(){return "/object/del/Employee/".$this->getId();}
	
}
?>