<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class AppCollection extends Collection implements \MVC\Domain\AppCollection {function targetClass( ) {return "\MVC\Domain\App";}}
class UserCollection extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\User";}}

class TagCollection extends Collection implements \MVC\Domain\TagCollection {function targetClass( ) {return "\MVC\Domain\Tag";}}
class TagSelectedCollection extends Collection implements \MVC\Domain\TagSelectedCollection {function targetClass( ) {return "\MVC\Domain\TagSelected";}}
class SupplierCollection extends Collection implements \MVC\Domain\SupplierCollection {function targetClass( ) {return "\MVC\Domain\Supplier";}}
class ResourceCollection extends Collection implements \MVC\Domain\ResourceCollection {function targetClass( ) {return "\MVC\Domain\Resource";}}

class OrderImportCollection extends Collection implements \MVC\Domain\OrderImportCollection {function targetClass( ) {return "\MVC\Domain\OrderImport";}}
class OrderImportDetailCollection extends Collection implements \MVC\Domain\OrderImportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderImportDetail";}}
class CustomerCollection extends Collection implements \MVC\Domain\CustomerCollection {function targetClass( ) {return "\MVC\Domain\Customer";}}

class OrderExportCollection extends Collection implements \MVC\Domain\OrderExportCollection {function targetClass( ) {return "\MVC\Domain\OrderExport";}}
class OrderExportDetailCollection extends Collection implements \MVC\Domain\OrderExportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderExportDetail";}}

class UnitCollection extends Collection implements \MVC\Domain\UnitCollection{function targetClass(){return "\MVC\Domain\Unit";}}
class R2TCollection extends Collection implements \MVC\Domain\R2TCollection{function targetClass(){return "\MVC\Domain\R2T";}}

class ConfigCollection extends Collection implements \MVC\Domain\ConfigCollection{function targetClass(){return "\MVC\Domain\Config";}}
class TrackingCollection extends Collection implements \MVC\Domain\TrackingCollection{function targetClass(){return "\MVC\Domain\Tracking";}}
class TrackingStoreCollection extends Collection implements \MVC\Domain\TrackingStoreCollection{function targetClass(){return "\MVC\Domain\TrackingStore";}}

class PageCollection extends Collection implements \MVC\Domain\PageCollection{function targetClass(){return "\MVC\Domain\Page";}}
class GuestCollection extends Collection implements \MVC\Domain\GuestCollection{function targetClass(){return "\MVC\Domain\Guest";}}

?>