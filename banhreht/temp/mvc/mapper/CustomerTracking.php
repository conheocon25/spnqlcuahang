<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class CustomerTracking extends Mapper implements \MVC\Domain\CustomerTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( "" );
        $this->selectStmt = self::$PDO->prepare( "" );
        $this->updateStmt = self::$PDO->prepare( "" );
        $this->insertStmt = self::$PDO->prepare( "" );
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
		$this->findDetailsByPEStmt = self::$PDO->prepare(" 
			SELECT 
				idcustomer as Id,
				(select name from bracustomer where id=PE.idcustomer) as Name,
				date as Date, 	
				0 as SResourceImport,
				0 as SPaid,
				sum(quantity*price) as SProductExport
			FROM 
				braproductexport PE
			WHERE 
				idcustomer=? and date>=? and date<=?
			GROUP BY 
				idcustomer, date
		");
		$this->evalDetailsByPEStmt = self::$PDO->prepare(" 
			SELECT 												
				sum(quantity*price) as value
			FROM 
				braproductexport PE
			WHERE 
				idcustomer=? and date>=? and date<?
			GROUP BY 
				idcustomer
		");
		$this->findDetailsByRIStmt = self::$PDO->prepare(" 
			SELECT 
				idfactory as Id,
				(select name from brafactory where id=RE.idfactory) as Name,
				date as Date, 	
				sum(quantity*price) as SResourceImport,
				0 as SPaid,
				0 as SProductExport
			FROM 
				braresourceexport RE
			WHERE 
				idfactory=? and date>=? and date<?
			GROUP BY 
				idfactory, date
		");
		$this->evalDetailsByRIStmt = self::$PDO->prepare(" 
			SELECT 												
				sum(quantity*price) as value
			FROM 
				braresourceexport RE
			WHERE 
				idfactory=? and date>=? and date<?
			GROUP BY 
				idfactory
		");
		$this->findDetailsByCPStmt = self::$PDO->prepare(" 
			SELECT 
				idcustomer as Id,
				(select name from bracustomer where id=CP.idcustomer) as Name,
				date as Date, 	
				0 as SResourceImport,
				sum(value) as SPaid,
				0 as SProductExport
			FROM 
				bracustomerpaid CP
			WHERE 
				idcustomer=? and date>=? and date<?
			GROUP BY 
				idcustomer, date
		");
		$this->evalDetailsByCPStmt = self::$PDO->prepare(" 
			SELECT 												
				sum(value) as value
			FROM 
				bracustomerpaid CP
			WHERE 
				idcustomer=? and date>=? and date<?
			GROUP BY 
				idcustomer
		");
		$this->deleteStmt = self::$PDO->prepare("");
    } 
    function getCollection( array $raw ) {        
		return new CustomerTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\CustomerTracking(
			$array['Id'],
			$array['Name'], 
			$array['Date'],
			$array['SResourceImport'], 
			$array['SPaid'], 
			$array['SProductExport'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "CustomerTracking";
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
        return new CustomerTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findDetailsByPE( $values ) {				
        $this->findDetailsByPEStmt->execute( $values);
        return new CustomerTrackingCollection( $this->findDetailsByPEStmt->fetchAll(), $this );
    }		
	function evalDetailsByPE( $values ) {
        $this->evalDetailsByPEStmt->execute( $values);
		$a = $this->evalDetailsByPEStmt->fetchAll();
        return $a[0][0];
    }
	
	function findDetailsByRI( $values ) {		
        $this->findDetailsByRIStmt->execute( $values);
        return new CustomerTrackingCollection( $this->findDetailsByRIStmt->fetchAll(), $this );
    }		
	function evalDetailsByRI( $values ) {		
        $this->evalDetailsByRIStmt->execute( $values);
		$a = $this->evalDetailsByRIStmt->fetchAll();
        return $a[0][0];
    }
	
	function findDetailsByCP( $values ) {		
        $this->findDetailsByCPStmt->execute( $values);
        return new CustomerTrackingCollection( $this->findDetailsByCPStmt->fetchAll(), $this );
    }		
	function evalDetailsByCP( $values ) {		
        $this->evalDetailsByCPStmt->execute( $values);
		$a = $this->evalDetailsByCPStmt->fetchAll();
        return $a[0][0];
    }	
}
?>
