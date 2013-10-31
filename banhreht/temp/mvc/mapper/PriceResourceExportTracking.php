<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class PriceResourceExportTracking extends Mapper implements \MVC\Domain\PriceResourceExportTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->findByStmt = self::$PDO->prepare( 
        "SELECT 
			F.id as Id,
			F.name as Name,
			sum(IF(idresource=1, RE.price, 0)) as Resource01,
			sum(IF(idresource=2, RE.price, 0)) as Resource02,
			sum(IF(idresource=3, RE.price, 0)) as Resource03,
			sum(IF(idresource=4, RE.price, 0)) as Resource04,
			sum(IF(idresource=5, RE.price, 0)) as Resource05,
			sum(IF(idresource=6, RE.price, 0)) as Resource06,
			sum(IF(idresource=7, RE.price, 0)) as Resource07,
			sum(IF(idresource=8, RE.price, 0)) as Resource08,
			sum(IF(idresource=9, RE.price, 0)) as Resource09
		FROM 
			brafactory F left join brapriceresourceexport RE on F.id = RE.idfactory
		GROUP BY
			F.id
		ORDER BY
			F.type desc, F.name	
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new PriceResourceExportTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceResourceExportTracking(			
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
			$array['Resource09']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceResourceExportTracking";
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
        return new PriceResourceExportTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
}
?>
