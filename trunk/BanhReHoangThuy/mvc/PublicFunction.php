<?php

class PF {
	/*
	---------------------------------------------------------------
	read3Digit các hàm doc số thành chữ
		-		
	---------------------------------------------------------------
	*/
	function read3Digit($number){
		$arr = array("", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín");
		$n1 = intval($number/100);
		$n2 = intval(($number % 100)/10);
		$n3 = intval($number % 10);
		$s = "";
		if ($n1>0){	
			if ($n2==0)
			{
				if ($n3==0)
					$s	= $arr[$n1]." trăm ";
				else
					$s	= $arr[$n1]." trăm lẻ ".$arr[$n3];
			}
			else if ($n2==1){				
				if ($n3 == 5){
					$s	= $arr[$n1]." trăm mười lăm";
				}
				else
				{
					$s	= $arr[$n1]." trăm mười ".$arr[$n3];
				}				
			}
			else{			
				if ($n3 == 5){
					$s	= $arr[$n1]." trăm ".$arr[$n2]." mươi lăm";
				}
				else if ($n3 == 1){
					$s	= $arr[$n1]." trăm ".$arr[$n2]." mươi mốt";
				}
				else{
					$s	= $arr[$n1]." trăm ".$arr[$n2]." mươi ".$arr[$n3];
				}				
			}
		}
		else{		
			if ($n2==0){
				if ($n3==0)
				{
					$s = "";
				}
				else{
					$s	= $arr[$n3];
				}
			}
			else if ($n2==1){			
				if ($n3 == 5){
					$s	= "mười lăm";
				}
				else{
					$s	= $arr[$n1]." mười ".$arr[$n3];
				}				
			}
			else{
				if ($n3 == 5){
					$s	= $arr[$n2]." mươi lăm";
				}
				else if ($n3 == 1){
					$s	= $arr[$n2]." mươi mốt";
				}
				else{
					$s	= $arr[$n2]." mươi ".$arr[$n3];
				}				
			}
		}
		return $s;
	}	
	function readDigitNonSene($number)
	{		
		$arr = array("", "ngan", "trieu", "ti");
		$ntemp = 0;
		$s = "";
		$index = 0;
		while($number > 0)
		{
			$ntemp = intval(fmod($number,1000));
			$s1 = self::read3DigitNonSene($ntemp);
			
			if ($s1!=""){
				$s = $s1." ".$arr[$index]." ".$s;
			}
			$number = intval($number/1000);			
			$index += 1;
		}
		return $s;
	}
	function read3DigitNonSene($number){
		$arr = array("", "mot", "hai", "ba", "bon", "nam", "sau", "bay", "tam", "chin");
		$n1 = intval($number/100);
		$n2 = intval(($number % 100)/10);
		$n3 = intval($number % 10);
		$s = "";
		if ($n1>0){	
			if ($n2==0)
			{
				if ($n3==0)
					$s	= $arr[$n1]." tram ";
				else
					$s	= $arr[$n1]." tram le ".$arr[$n3];
			}
			else if ($n2==1){				
				if ($n3 == 5){
					$s	= $arr[$n1]." tram muoi lam";
				}
				else
				{
					$s	= $arr[$n1]." tram muoi ".$arr[$n3];
				}				
			}
			else{			
				if ($n3 == 5){
					$s	= $arr[$n1]." tram ".$arr[$n2]." muoi lam";
				}
				else if ($n3 == 1){
					$s	= $arr[$n1]." tram ".$arr[$n2]." muoi mot";
				}
				else{
					$s	= $arr[$n1]." tram ".$arr[$n2]." muoi ".$arr[$n3];
				}				
			}
		}
		else{		
			if ($n2==0){
				if ($n3==0)
				{
					$s = "";
				}
				else{
					$s	= $arr[$n3];
				}
			}
			else if ($n2==1){			
				if ($n3 == 5){
					$s	= "muoi lam";
				}
				else{
					$s	= $arr[$n1]." muoi ".$arr[$n3];
				}				
			}
			else{
				if ($n3 == 5){
					$s	= $arr[$n2]." muoi lam";
				}
				else if ($n3 == 1){
					$s	= $arr[$n2]." muoi mot";
				}
				else{
					$s	= $arr[$n2]." muoi ".$arr[$n3];
				}				
			}
		}
		return $s;
	}	
	function readDigit($number)
	{		
		$arr = array("", "ngàn", "triệu", "tỉ");
		$ntemp = 0;
		$s = "";
		$index = 0;
		while($number > 0)
		{
			$ntemp = intval(fmod($number,1000));
			$s1 = self::read3Digit($ntemp);
			
			if ($s1!=""){
				$s = $s1." ".$arr[$index]." ".$s;
			}
			$number = intval($number/1000);			
			$index += 1;
		}
		return $s;
	}
	/*
	---------------------------------------------------------------
	formatCurrency định dạng số ở dạng tiền tệ
		-		
	---------------------------------------------------------------
	*/
	function formatCurrency( $value )
	{
		$num = number_format($value, 0, ',', '.');
        return $num;
	}
	/*
	---------------------------------------------------------------
	formatDate định dạng số ở dạng ngày tháng
		-		
	---------------------------------------------------------------
	*/
	function formatDate( $value ){
		$date = new DateTime($value);
		return $date->format('d/m/y');
	}
	/*
	---------------------------------------------------------------
	str2Date chuyển chuỗi thành kiểu Ngày
		-		
	---------------------------------------------------------------
	*/
	function str2Date($Str)
	{
		$D1 = new DateTime($Str);
		$Date1 = mktime(0, 0, 0, $D1->format("m"), $D1->format("d"), $D1->format("y"));
		return $Date1;
	}
	/*
	---------------------------------------------------------------
	subDate2Day trừ ngày trả về kết quả là sai lệch ngày
		-		
	---------------------------------------------------------------
	*/
	function subDate2Day($Date1, $Date2)
	{
		$delta = floor(($Date2 - $Date1)/86400);
		return $delta;
	}
	function subDate($Date1, $Date2)
	{
		$D1 = new DateTime($Date1);
		$D11 = mktime(0, 0, 0, $D1->format("m"), $D1->format("d"), $D1->format("y"));
		$D2 = new DateTime($Date2);
		$D22 = mktime(0, 0, 0, $D2->format("m"), $D2->format("d"), $D2->format("y"));
		
		$delta = floor(($D22 - $D11)/86400);
		return $delta;
	}
	
	function addDate($orgDate,$day){ 
		$cd = strtotime($orgDate); 
		$retDAY = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd)+$day,date('Y',$cd))); 
		return $retDAY; 
	} 
	function nextMonth(&$month, &$year)
	{
		$month ++;
		if ($month==13){
			$month =1;
			$year ++;
		}			
	}
	function beforeMonth(&$month, &$year)
	{
		$month --;
		if ($month==0){
			$month =12;
			$year --;
		}			
	}
	
}
?>