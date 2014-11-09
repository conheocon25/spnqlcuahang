<?php
Namespace MVC\Library;
class Date {
	private $Value;
	
	function __construct( $Value) {        
		$this->Value = $Value;        
    }
	
	function getDateFormat(){
		return date('d/m/Y',strtotime($this->Value));	
	}
	
	function getDateTimeFormat(){
		return date('d/m/Y H:i:s',strtotime($this->Value));
	}
	
	function getCurrentDateTime(){
		$Today = \getdate();		
        $d = $Today['year']."-".$Today['mon']."-".$Today['mday']." ".$Today['hours'].":".$Today['minutes'].":".$Today['seconds'];
		return $d;
	}
	
}
?>