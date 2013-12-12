<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class OrderExportLog extends Mapper implements \MVC\Domain\OrderExportLogFinder {
    function __construct() {
        parent::__construct();
		
		$tblOrderExportLog 	= "tbl_order_export_log";
										
		$selectAllStmt 	= sprintf("select * from %s order by date_time DESC", $tblOrderExportLog);
		$selectStmt 	= sprintf("select * from %s where id=?", $tblOrderExportLog);
		$updateStmt 	= sprintf("update %s set `date_time`=?, id_order=? where id=?", $tblOrderExportLog);
		$insertStmt 	= sprintf("insert into %s ( `date_time`, id_order) values( ?, ?)", $tblOrderExportLog);
		$deleteStmt 	= sprintf("delete from %s where id=?", $tblOrderExportLog);
		
		$findByPageStmt = sprintf("
							SELECT * 
							FROM %s		
							ORDER BY date_time desc
							LIMIT :start,:max
				", $tblOrderExportLog);
										
        $this->selectAllStmt 		= self::$PDO->prepare($selectAllStmt);
        $this->selectStmt 			= self::$PDO->prepare( $selectStmt );
        $this->updateStmt 			= self::$PDO->prepare( $updateStmt );
        $this->insertStmt 			= self::$PDO->prepare( $insertStmt );
		$this->deleteStmt 			= self::$PDO->prepare( $deleteStmt );		
		$this->findByPageStmt 		= self::$PDO->prepare( $findByPageStmt );
    }
	
    function getCollection( array $raw ) {return new OrderExportLogCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\OrderExportLog( 
			$array['id'],
			$array['date_time'],
			$array['id_order']			
		);
        return $obj;
    }
	
    protected function targetClass() {return "OrderExportLog";}

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getDateTime(),
			$object->getIdOrder()		
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getDateTime(),
			$object->getIdOrder(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
	
	//-------------------------------------------------------		
	function findByPage( $values ) {
		$this->findByPageStmt->bindValue(':id_tracking', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new OrderExportLogCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
	//-------------------------------------------------------
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}	
}
?>