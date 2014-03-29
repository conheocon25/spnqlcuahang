<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class AppCollection extends Collection implements \MVC\Domain\AppCollection {function targetClass( ) {return "\MVC\Domain\App";}}
class UserCollection extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\User";}}
class UserAppCollection extends Collection implements \MVC\Domain\UserAppCollection {function targetClass( ) {return "\MVC\Domain\UserApp";}}

class CategoryCollection extends Collection implements \MVC\Domain\CategoryCollection {function targetClass( ) {return "\MVC\Domain\Category";}}	
class SupplierCollection extends Collection implements \MVC\Domain\SupplierCollection {function targetClass( ) {return "\MVC\Domain\Supplier";}}

class PaidSupplierCollection extends Collection implements \MVC\Domain\PaidSupplierCollection {function targetClass( ) {return "\MVC\Domain\PaidSupplier";}}
class PaidPondCollection extends Collection implements \MVC\Domain\PaidPondCollection{function targetClass( ) {return "\MVC\Domain\PaidPond";}}
class PaidPondTrackingCollection extends Collection implements \MVC\Domain\PaidPondTrackingCollection{function targetClass( ) {return "\MVC\Domain\PaidPondTracking";}}

class ResourceCollection extends Collection implements \MVC\Domain\ResourceCollection {function targetClass( ) {return "\MVC\Domain\Resource";}}

class OrderExportCollection extends Collection implements \MVC\Domain\OrderExportCollection {function targetClass( ) {return "\MVC\Domain\OrderExport";}}
class OrderExportTrackingCollection extends Collection implements \MVC\Domain\OrderExportTrackingCollection {function targetClass( ) {return "\MVC\Domain\OrderExportTracking";}}
class OrderExportDetailCollection extends Collection implements \MVC\Domain\OrderExportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderExportDetail";}}

class OrderImportCollection extends Collection implements \MVC\Domain\OrderImportCollection {function targetClass( ) {return "\MVC\Domain\OrderImport";}}
class OrderImportDetailCollection extends Collection implements \MVC\Domain\OrderImportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderImportDetail";}}

class PondCollection extends Collection implements \MVC\Domain\PondCollection {function targetClass( ) {return "\MVC\Domain\Pond";}}
class PondSessionCollection extends Collection implements \MVC\Domain\PondSessionCollection {function targetClass( ) {return "\MVC\Domain\PondSession";}}
class PondLogCollection extends Collection implements \MVC\Domain\PondLogCollection {function targetClass( ) {return "\MVC\Domain\PondLog";}}

class EmployeeCollection extends Collection implements \MVC\Domain\EmployeeCollection{function targetClass( ) {return "\MVC\Domain\Employee";}}

class UnitCollection extends Collection implements \MVC\Domain\UnitCollection{function targetClass(){return "\MVC\Domain\Unit";}}
class StoreCollection extends Collection implements \MVC\Domain\StoreCollection{function targetClass(){return "\MVC\Domain\Store";}}
class StoreDetailCollection extends Collection implements \MVC\Domain\StoreDetailCollection{function targetClass(){return "\MVC\Domain\StoreDetail";}}

class DateTrackingCollection extends Collection implements \MVC\Domain\DateTrackingCollection {function targetClass( ) {return "\MVC\Domain\DateTracking";}}
class WeekTrackingCollection extends Collection implements \MVC\Domain\WeekTrackingCollection {function targetClass( ) {return "\MVC\Domain\WeekTracking";}}

?>
