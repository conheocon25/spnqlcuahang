<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class FactoryTracking extends Mapper implements \MVC\Domain\FactoryTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "");
        $this->selectStmt = self::$PDO->prepare( 
                            "");
        $this->updateStmt = self::$PDO->prepare( 
                            "");
        $this->insertStmt = self::$PDO->prepare( 
                            "");
		$this->findByStmt = self::$PDO->prepare( 
            "SELECT
				F.id as Id,
				F.name as Name,
				(null) as Date,
				(
					select sum(quantity*price) 
					from braresourceexport RE 
					where RE.idfactory=F.id AND month(date)=month(?) AND year(date)=year(?)
				) as SResourceExport,
				(
					select sum(value) 
					from brafactoryloan FL 
					where FL.idfactory=F.id AND month(date)=month(?) AND year(date)=year(?)
				) as SLoan,
				(
					select sum(quantity*price) 
					from braproductimport PI
					where PI.idfactory=F.id AND month(date)=month(?) AND year(date)=year(?)
				) as SProductImport
			FROM 
				brafactory F
			");
		$this->findDetailsByPIStmt = self::$PDO->prepare(" 
			SELECT 
				idfactory as Id,
				(select name from brafactory where id=PI.idfactory) as Name,
				date as Date, 	
				0 as SResourceExport,
				0 as SLoan,
				sum(quantity*price) as SProductImport
			FROM 
				braproductimport PI
			WHERE 
				idfactory=? and date>=? and date<=?
			GROUP BY 
				idfactory, date
			HAVING 
				SProductImport>0
		");
		$this->evalDetailsByPIStmt = self::$PDO->prepare(" 
			SELECT 												
				sum(quantity*price) as value
			FROM 
				braproductimport PI
			WHERE 
				idfactory=? and date>=? and date<?
			GROUP BY 
				idfactory
		");
		$this->findDetailsByREStmt = self::$PDO->prepare(" 
			SELECT 
				idfactory as Id,
				(select name from brafactory where id=RE.idfactory) as Name,
				date as Date, 	
				sum(quantity*price) as SResourceExport,
				0 as SLoan,
				0 as SProductImport
			FROM 
				braresourceexport RE
			WHERE 
				idfactory=? and date>=? and date<?
			GROUP BY 
				idfactory, date
			HAVING 
				SResourceExport>0	
		");
		$this->evalDetailsByREStmt = self::$PDO->prepare(" 
			SELECT 												
				sum(quantity*price) as value
			FROM 
				braresourceexport RE
			WHERE 
				idfactory=? and date>=? and date<?
			GROUP BY 
				idfactory
		");
		$this->findDetailsByFLStmt = self::$PDO->prepare(" 
			SELECT 
				idfactory as Id,
				(select name from brafactory where id=FL.idfactory) as Name,
				date as Date, 	
				0 as SResourceExport,
				sum(value) as SLoan,
				0 as SProductImport
			FROM 
				brafactoryloan FL
			WHERE 
				idfactory=? and date>=? and date<?
			GROUP BY 
				idfactory, date
			HAVING
				SLoan>0
		");
		$this->evalDetailsByFLStmt = self::$PDO->prepare(" 
			SELECT 												
				sum(value) as value
			FROM 
				brafactoryloan FL
			WHERE 
				idfactory=? and date>=? and date<?
			GROUP BY 
				idfactory
		");
		$this->deleteStmt = self::$PDO->prepare("");
    } 
    function getCollection( array $raw ) {        
		return new FactoryTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\FactoryTracking(						
			$array['Id'],
			$array['Name'], 
			$array['Date'],
			$array['SResourceExport'], 
			$array['SLoan'], 
			$array['SProductImport'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "FactoryTracking";
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
        return new FactoryTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findDetailsByPI( $values ) {		
        $this->findDetailsByPIStmt->execute( $values);
        return new FactoryTrackingCollection( $this->findDetailsByPIStmt->fetchAll(), $this );
    }		
	function evalDetailsByPI( $values ) {		
        $this->evalDetailsByPIStmt->execute( $values);
		$a = $this->evalDetailsByPIStmt->fetchAll();
        return $a[0][0];
    }
	
	function findDetailsByRE( $values ) {		
        $this->findDetailsByREStmt->execute( $values);
        return new FactoryTrackingCollection( $this->findDetailsByREStmt->fetchAll(), $this );
    }		
	function evalDetailsByRE( $values ) {		
        $this->evalDetailsByREStmt->execute( $values);
		$a = $this->evalDetailsByREStmt->fetchAll();
        return $a[0][0];
    }
	
	function findDetailsByFL( $values ) {		
        $this->findDetailsByFLStmt->execute( $values);
        return new FactoryTrackingCollection( $this->findDetailsByFLStmt->fetchAll(), $this );
    }		
	function evalDetailsByFL( $values ) {		
        $this->evalDetailsByFLStmt->execute( $values);
		$a = $this->evalDetailsByFLStmt->fetchAll();
        return $a[0][0];
    }
	
}
?>
