<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class PaidPondTracking extends Object{

    private $Id;
	private $IdPond;
	private $DateStart;
    private $DateEnd;
	private $DateEnd1;
	private $BankRate;

	private $Paids;
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct(
		$Id=null,		
		$IdPond=null,
		$DateStart=null,
		$DateEnd=null,
		$DateEnd1=null,
		$BankRate=null
	) {
        $this->Id = $Id;
		$this->IdPond = $IdPond;
		$this->DateStart = $DateStart;
		$this->DateEnd = $DateEnd;
		$this->DateEnd1 = $DateEnd1; //Ngày cuối vụ ao để tính lãi suất kép
		$this->BankRate = $BankRate;
		
        parent::__construct( $Id );
    }
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getId( ) {
        return $this->Id;
    }
				
    function setIdPond( $IdPond ) {
        $this->IdPond = $IdPond;
        $this->markDirty();
    }
    function getIdPond( ) {
        return $this->IdPond;
    }
    		
	function setDateStart( $DateStart ) {
        $this->DateStart = $DateStart;
        $this->markDirty();
    }
	function getDateStart( ) {
        return $this->DateStart;
    }
	function getDateStartPrint( ){
		$date = new \DateTime($this->DateStart);
		return $date->format('d/m/Y');
    }
	
	function setDateEnd( $DateEnd ) {
        $this->DateEnd = $DateEnd;
        $this->markDirty();
    }
	function getDateEnd( ) {
        return $this->DateEnd;
    }
	function getDateEndPrint( ){
		$date = new \DateTime($this->DateEnd);
		return $date->format('d/m/Y');
    }
	
	//Ngày cuối cùng của vụ để tính lãi suất kép
	function setDateEnd1( $DateEnd1 ) {
        $this->DateEnd1 = $DateEnd1;
        $this->markDirty();
    }
	function getDateEnd1( ) {
        return $this->DateEnd1;
    }
	function getDateEnd1Print( ){
		$date = new \DateTime($this->DateEnd1);
		return $date->format('d/m/Y');
    }
	//Lãi suất ngân hàng
	function setBankRate( $BankRate ) {
        $this->BankRate = $BankRate;
        $this->markDirty();
    }
	function getBankRate( ) {
        return $this->BankRate;
    }
		
	function getMonthPrint( ){
		$date = new \DateTime($this->DateStart);
		return "THÁNG ".$date->format('m/Y');
    }
		
	function getPond(){
		$mPond = new \MVC\Mapper\Pond();
		$Pond = $mPond->find($this->IdPond);
		return $Pond;
    }
	
	function getPaids(){		
		$mPaid = new \MVC\Mapper\PaidPond();		
		$Paids = $mPaid->findByTracking(
			array(
				$this->getIdPond(), 
				$this->getDateStart(), 
				$this->getDateEnd()
			)
		);
		return $Paids;
	}
	
	function getPaidsValue(){
		$Paids = $this->getPaids();
		$Sum = 0;
		$Paids->rewind();
		while ($Paids->valid()){
			$Paid = $Paids->current();
			$Sum += $Paid->getValue();
			$Paids->next();
		}
		return $Sum;
	}
	
	function getPaidsValueRate(){
		$D1 = new \DateTime( $this->DateStart );
		$D2 = new \DateTime( $this->DateEnd1 );
		$interval = $D1->diff($D2);
		$days = $interval->format('%a');
		$months = \round($days/30, 1);

		$Value = $this->getPaidsValue()*(\pow( 1 + (double)$this->BankRate/100.0, $months) - 1.0);
		return $Value;
	}
	
	//Giá trị thực có tính lãi kép
	function getValue(){
		return $this->getPaidsValue() + $this->getPaidsValueRate();
	}
	
	function getPaidsValuePrint(){
		$N = new \MVC\Library\Number( $this->getPaidsValue() );
		return $N->formatCurrency()." đ";
	}
	function getPaidsValueRatePrint(){
		$N = new \MVC\Library\Number( $this->getPaidsValueRate() );
		return $N->formatCurrency()." đ";
	}
	function getValuePrint(){
		$N = new \MVC\Library\Number( $this->getValue() );
		return $N->formatCurrency()." đ";
	}
	
	/*--------------------------------------------------------------------*/
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
		
}
?>