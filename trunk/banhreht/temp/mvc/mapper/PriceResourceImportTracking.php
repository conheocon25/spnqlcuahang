<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class PriceResourceImportTracking extends Mapper implements \MVC\Domain\PriceResourceImportTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->findByStmt = self::$PDO->prepare( 
        "SELECT 
			S.id as Id,
			S.name as Name,
			sum(IF(idresource=1, RI.price, 0)) as Resource01,
			sum(IF(idresource=2, RI.price, 0)) as Resource02,
			sum(IF(idresource=3, RI.price, 0)) as Resource03,
			sum(IF(idresource=4, RI.price, 0)) as Resource04,
			sum(IF(idresource=5, RI.price, 0)) as Resource05,
			sum(IF(idresource=6, RI.price, 0)) as Resource06,
			sum(IF(idresource=7, RI.price, 0)) as Resource07,
			sum(IF(idresource=8, RI.price, 0)) as Resource08,
			sum(IF(idresource=9, RI.price, 0)) as Resource09,
			sum(IF(idresource=10, RI.price, 0)) as Resource10
		FROM 
			brasupplier S left join brapriceresourceimport RI on S.id = RI.idsupplier
		GROUP BY
			S.id
		ORDER BY
			S.name
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new PriceResourceImportTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceResourceImportTracking(			
			$array['Id'],
			$array['Name'],			
			$array['Resource01'],
			$array['Resource02'],
			$array['Resource03'],
			$array['Resource04'],
			$array['Resource05'],
			$array['Resource06'],
			$array['Resource07'],
			$array['Resource08'],
			$array['Resource09'],
			$array['Resource10']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceResourceImportTracking";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {}
    
    function doUpdate( \MVC\Domain\Object $object ) {}

	function doDelete( array $values ) {}
	
    function selectStmt() {
        return $this->selectStmt;
    }

    function selectAllStmt() {		
        return $this->selectAllStmt;
    }
	function findBy( $values ) {		
        $this->findByStmt->execute( $values);
        return new PriceResourceImportTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
}
?>
