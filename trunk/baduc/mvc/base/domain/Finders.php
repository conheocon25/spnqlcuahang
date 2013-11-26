<?php
namespace MVC\Domain;

interface Finder {
    function find( $id );
    function findAll();

    function update( Object $object );
    function insert( Object $obj );
    //function delete();
}

interface AppFinder  				extends Finder {}
interface UserFinder  				extends Finder {}

interface DomainFinder  			extends Finder {}

interface CollectGeneralFinder  	extends Finder {}
interface CollectCustomerFinder  	extends Finder {}
interface PaidGeneralFinder  		extends Finder {}
interface PaidSupplierFinder  		extends Finder {}
interface PaidCustomerFinder  		extends Finder {}

interface TagFinder 				extends Finder {}
interface TagSelectedFinder 		extends Finder {}
interface R2TFinder 				extends Finder {}

interface SupplierFinder 			extends Finder {}
interface SupplierDomainFinder 		extends Finder {}
interface ResourceFinder 			extends Finder {}

interface OrderExportFinder 		extends Finder {}
interface OrderExportDetailFinder 	extends Finder {}

interface OrderImportFinder 		extends Finder {}
interface OrderImportDetailFinder 	extends Finder {}
interface CustomerFinder 			extends Finder {}
interface CustomerTrackingFinder 	extends Finder {}
interface CustomerDomainFinder 		extends Finder {}

interface EmployeeFinder 			extends Finder {}
interface PayRollFinder 			extends Finder {}

interface UnitFinder 				extends Finder {}
interface ConfigFinder 				extends Finder {}

interface TrackingFinder 			extends Finder {}
interface TrackingStoreFinder 		extends Finder {}
interface TrackingCTFinder 			extends Finder {}
interface TrackingCTRFinder 		extends Finder {}

interface GuestFinder 				extends Finder {}
interface TermPaidFinder 			extends Finder {}
interface TermCollectFinder 		extends Finder {}
?>