<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Loto extends Mapper implements \MVC\Domain\LotoFinder{

    function __construct() {
        parent::__construct();				
		$tblLoto 					= "shopc_loto";
		
		$selectAllStmt 				= sprintf("select * from %s ORDER BY date", $tblLoto);
		$selectStmt 				= sprintf("select *  from %s where id=?", $tblLoto);
		$updateStmt 				= sprintf("update %s set 
				id_td=?, 
				name=?,
				location=?,
				g81=?,
				g71=?,
				g61=?,g62=?,g63=?,
				g51=?,
				g41=?,g42=?,g43=?,g44=?,g45=?,g46=?,g47=?,
				g31=?,g32=?,
				g21=?,g11=?,g00=?
		where id=?", $tblLoto);
		$insertStmt 				= sprintf("insert into %s (
				id_td, 
				name,
				location,
				g81,
				g71,
				g61,g62,g63,
				g51,
				g41,g42,g43,g44,g45,g46,g47,
				g31,g32,
				g21,
				g11,
				g00
				) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $tblLoto);
		$deleteStmt 				= sprintf("delete from %s where id=?", $tblLoto);		
		$findByStmt 				= sprintf("select *  from %s where id_td=?", $tblLoto);		
				
        $this->selectAllStmt 		= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 			= self::$PDO->prepare($selectStmt);
        $this->updateStmt 			= self::$PDO->prepare($updateStmt);
        $this->insertStmt 			= self::$PDO->prepare($insertStmt);
		$this->deleteStmt 			= self::$PDO->prepare($deleteStmt);
		$this->findByStmt 			= self::$PDO->prepare($findByStmt);
		
    }
	
    function getCollection( array $raw ) {return new LotoCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Loto(
			$array['id'],
			$array['id_td'],
			$array['name'],
			$array['location'],
			$array['g81'],
			$array['g71'],
			$array['g61'],
			$array['g62'],
			$array['g63'],
			$array['g51'],
			$array['g41'],
			$array['g42'],
			$array['g43'],
			$array['g44'],
			$array['g45'],
			$array['g46'],
			$array['g47'],
			$array['g31'],
			$array['g32'],
			$array['g21'],
			$array['g11'],
			$array['g00']
		);
	    return $obj;
    }
    protected function targetClass() { return "Loto";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdTD(),			
			$object->getName(),
			$object->getLocation(),
			$object->getG81(),
			$object->getG71(),
			$object->getG61(),
			$object->getG62(),
			$object->getG63(),
			$object->getG51(),
			$object->getG41(),
			$object->getG42(),
			$object->getG43(),
			$object->getG44(),
			$object->getG45(),
			$object->getG46(),
			$object->getG47(),
			$object->getG31(),
			$object->getG32(),
			$object->getG21(),
			$object->getG11(),
			$object->getG00()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdTD(),			
			$object->getName(),
			$object->getLocation(),
			$object->getG81(),
			$object->getG71(),
			$object->getG61(),
			$object->getG62(),
			$object->getG63(),
			$object->getG51(),
			$object->getG41(),
			$object->getG42(),
			$object->getG43(),
			$object->getG44(),
			$object->getG45(),
			$object->getG46(),
			$object->getG47(),
			$object->getG31(),
			$object->getG32(),
			$object->getG21(),
			$object->getG11(),
			$object->getG00(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }
	
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}	
	function deleteByTracking(array $values) {return $this->deleteByTrackingStmt->execute( $values );}
	
	function findBy(array $values) {
		$this->findByStmt->execute( $values );
        return new LotoCollection( $this->findByStmt->fetchAll(), $this );
    }	
}
?>