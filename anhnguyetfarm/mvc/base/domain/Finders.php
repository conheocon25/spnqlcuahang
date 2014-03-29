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

interface PaidSupplierFinder extends Finder {}
interface PaidPondFinder extends Finder {}
interface PaidPondTrackingFinder extends Finder {}

interface ResourceFinder extends Finder {}
interface OrderExportFinder extends Finder {}
interface OrderExportTrackingFinder extends Finder {}
interface OrderExportDetailFinder extends Finder {}
interface OrderImportFinder extends Finder {}
interface OrderImportDetailFinder extends Finder {}

interface PondFinder extends Finder {}
interface PondSessionFinder extends Finder {}
interface PondLogFinder extends Finder {}

interface UnitFinder extends Finder {}
interface StoreFinder extends Finder {}
interface StoreDetailFinder extends Finder {}

interface DateTrackingFinder extends Finder {}
interface WeekTrackingFinder extends Finder {}
?>
