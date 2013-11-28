<?php
/** 
 * PHP version 5.3
 *
 * LICENSE: Lưu hành nội bộ
 *
 * @category   Model
 * @package    Model
 * @author     Bùi Thanh Tuấn <tuanbuithanh@gmail.com>
  * @copyright  2010-2012 SPN Group
 * @license    Bản quyền nhóm
 * @version    SVN: ?
 * @link       mvc/domain/PaidGeneral.php
 * @see        Paid
 * @note       Định danh các khoản chi tiêu của hệ thống
 */
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CollectCustomer extends Object{

    private $Id;	
	private $IdTracking;
	private $Date;
    private $Value;
	private $Note;
							
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct(
		$Id=null,		
		$IdTracking=null,
		$Date=null,
		$Value=0,
		$Note=null
	) {
        $this->Id 			= $Id;		
		$this->IdTracking 	= $IdTracking;
		$this->Date 		= $Date;
		$this->Value 		= $Value;
		$this->Note 		= $Note;
        parent::__construct( $Id );
    }
    function setId( $Id ) {$this->Id = $Id;$this->markDirty();}
    function getId( ) {return $this->Id;}
	
	function setIdTracking( $IdTracking ) {$this->IdTracking = $IdTracking;$this->markDirty();}
    function getIdTracking( ) {return $this->IdTracking;}
	function getTracking( ) {
		$mCT 		= new \MVC\Mapper\CustomerTracking();
		$Tracking 	= $mCT->find( $this->getIdTracking() );
		return $Tracking;
	}
	
	function setValue( $Value ) {$this->Value = $Value;$this->markDirty();}	
	function getValue( ) {if (!isset($this->Value))return 0;return $this->Value;}
	function getValuePrint( ){$num = number_format($this->Value, 0, ',', '.');return $num." đ";}
	
	function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}
	function getDate( ) {return $this->Date;}
	function getDatePrint( ) { $date = new \DateTime($this->Date);return $date->format('d/m/Y');}
	   
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	function getNote( ) {return $this->Note;}	
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),			
			'IdTracking'	=> $this->getIdTracking(),
			'Date'			=> $this->getDate(),
			'Value'			=> $this->getValue(),			
			'Note'			=> $this->getNote()
		);
		return json_encode($json);
	}
			
	function setArray( $Data ){
        $this->Id 			= $Data[0];		
		$this->IdTracking 	= $Data[1];
		$this->Date 		= $Data[2];
		$this->Value 		= $Data[3];
		$this->Note 		= $Data[4];
    }
	
	/*--------------------------------------------------------------------*/
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
		
}
?>