<?php 
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Cart extends Object{
	//-------------------------------------------------------------------------------
	//DEFINE PROPERTY
	//-------------------------------------------------------------------------------
	private $Id;
	public 	$Items = array();
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
	function __construct($Id=null, $Items=null) {
		$this->Id 		= $Id;
		$this->Items 	= $Items;
		parent::__construct( $Id );
	}		
	function getId() {return $this->Id;}
	
	public function getItems(){
		return 	$this->Items;
	}
	public function isEmpty() {
		if (empty($this->Items)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function addItem($Id, $Info){
		if (isset($this->Items[$Id])) {
			$this->updateItem($Id, $this->Items[$Id]['Quantity'] + 1);
		} else {
			// Add the array of info:
			$this->Items[$Id] 				= $Info;
			$this->Items[$Id]['Quantity'] 	= 1;
			$this->Items[$Id]['Value'] 		= $this->Items[$Id]['Quantity']*$this->Items[$Id]['Price'];
			$this->Items[$Id]['URLDel'] 	= "/gio-hang/" . $this->Items[$Id]['Id'] . "/xoa";
			$this->Items[$Id]['URLDel'] 	= "/gio-hang/" . $this->Items[$Id]['Id'] . "/cap-nhat";
		}
	}
	
	public function updateItem($Id, $Quantity){
		if ($Quantity == 0){
			$this->deleteItem($Id);
		} elseif ( ($Quantity > 0) && ($Quantity != $this->Items[$Id]['Quantity'])){
			$this->Items[$Id]['Quantity'] 	= $Quantity;
			$this->Items[$Id]['Value'] 		= $Quantity*$this->Items[$Id]['Price'];
			$this->Items[$Id]['URLDel'] 	= "/gio-hang/" . $this->Items[$Id]['Id'] . "/xoa";
			$this->Items[$Id]['URLUpd'] 	= "/gio-hang/" . $this->Items[$Id]['Id'] . "/cap-nhat";
		}
	}
	
	public function deleteItem($Id){
		if (isset($this->Items[$Id])){
			unset($this->Items[$Id]);
		}
	}
	
	public function countItem(){
		$C = 0;
		foreach ($this->Items as $Item)
			$C = $C + $Item['Quantity'];
		return $C;
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