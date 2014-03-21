<?php
namespace MVC\Domain;

interface Finder {
    function find( $id );
    function findAll();

    function update( Object $object );
    function insert( Object $obj );
    //function delete();
}

interface UserFinder  			extends Finder {}
interface CategoryFinder  		extends Finder {}
interface SupplierFinder 		extends Finder {}
interface ResourceFinder 		extends Finder {}
interface OrderImportFinder 	extends Finder {}
interface OrderImportDetailFinder extends Finder {}
interface CustomerFinder 		extends Finder {}
interface CustomerLogFinder 	extends Finder {}
interface EmployeeFinder 		extends Finder {}
interface ConfigFinder 			extends Finder {}
interface TrackingFinder 		extends Finder {}
interface TrackingDailyFinder 	extends Finder {}
interface GuestFinder 			extends Finder {}
?>
