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

interface TagFinder extends Finder {}
interface TagSelectedFinder extends Finder {}
interface R2TFinder extends Finder {}

interface SupplierFinder extends Finder {}
interface ResourceFinder extends Finder {}

interface OrderExportFinder extends Finder {}
interface OrderExportDetailFinder extends Finder {}

interface OrderImportFinder extends Finder {}
interface OrderImportDetailFinder extends Finder {}
interface CustomerFinder extends Finder {}
interface EmployeeFinder extends Finder {}
interface UnitFinder extends Finder {}
interface ConfigFinder extends Finder {}
interface TrackingFinder extends Finder {}
interface TrackingStoreFinder extends Finder {}

interface GuestFinder extends Finder {}

?>