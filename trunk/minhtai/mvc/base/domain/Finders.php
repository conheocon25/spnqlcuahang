<?php
namespace MVC\Domain;

interface Finder {
    function find( $id );
    function findAll();

    function update( Object $object );
    function insert( Object $obj );
    //function delete();
}

interface AppFinder  extends Finder {}
interface UserFinder  extends Finder {}
interface UserAppFinder  extends Finder {}

interface CategoryFinder  extends Finder {}
interface SupplierFinder extends Finder {}

interface PaidCustomerFinder extends Finder {}
interface PaidSupplierFinder extends Finder {}
interface PaidEmployeeFinder extends Finder {}
interface PaidOtherFinder extends Finder {}

interface ResourceFinder extends Finder {}
interface OrderExportFinder extends Finder {}
interface OrderExportDetailFinder extends Finder {}
interface OrderExportDetailExtraFinder extends Finder {}
interface OrderImportFinder extends Finder {}
interface OrderImportDetailFinder extends Finder {}
interface CustomerFinder extends Finder {}
interface EmployeeFinder extends Finder {}

interface UnitFinder extends Finder {}
interface TermFinder extends Finder {}
interface StoreFinder extends Finder {}
interface PageFinder extends Finder {}
interface StoreDetailFinder extends Finder {}

?>