<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Post extends Object{
    private $Id;
	private $Title;	
	private $Content;	
	private $Key;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $Title=null, $Content=null, $Key=null){
        $this->Id 			= $Id;
		$this->Title 		= $Title;
		$this->Content 		= $Content;		
		$this->Key 			= $Key;		
        parent::__construct( $Id );
    }
    function getId() {return $this->Id;}	
		
	function setContent( $Content ){$this->Content = $Content;$this->markDirty();}   
	function getContent( ) {return $this->Content;}
	
	function setTitle( $Title ){$this->Title = $Title;$this->markDirty();}   
	function getTitle( ) {return $this->Title;}	
	function getTitleReduce(){$S = new \MVC\Library\String($this->Title);return $S->reduce(45);}
			
	function getImage(){		
		$first_img = '';
		\ob_start();
		\ob_end_clean();
		if(preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $this->Content, $matches)){
			$first_img = $matches[1][0];
		}
		else {
			$first_img = "/data/images/Post.jpg";
		}
		return $first_img;
	}
	
	function setKey( $Key ){$this->Key = $Key;$this->markDirty();}
	function getKey( ) {return $this->Key;}
	function reKey( ){
		$Id = time();
		$Str = new \MVC\Library\String($this->Title." ".$Id);
		$this->Key = $Str->converturl();		
	}	
	function getContentReduce(){$S = new \MVC\Library\String($this->Content);return $S->reduceHTML(320);}
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getPTAll(){
		$mPT 	= new \MVC\Mapper\PostTag();	
		$PTAll 	= $mPT->findByPost(array($this->getId()));
		return $PTAll;
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'Title'			=> $this->getTitle(),
			'Content'		=> $this->getContent(),			
			'Key'			=> $this->getKey()
		);				
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->Title		= $Data[1];
		$this->Content 		= \stripslashes($Data[2]);				
		$this->reKey();
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLRead(){		return "/tin-tuc/".$this->getCategory()->getKey()."/".$this->getKey();}
	
	function getURLSettingTag(){return "admin/setting/post/".$this->getId()."/tag";}
	
	function getURLUpdLoad(){	return "admin/setting/post/".$this->getId()."/upd/load";}
	function getURLUpdExe(){	return "admin/setting/post/".$this->getId()."/upd/exe";}		
	function getURLDelLoad(){	return "admin/setting/post/".$this->getId()."/del/load";}	
	function getURLDelExe(){	return "admin/setting/post/".$this->getId()."/del/exe";}
			
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>