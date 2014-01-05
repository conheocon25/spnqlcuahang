<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class UserCollection 			extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\User";}}
class ConfigCollection 			extends Collection implements \MVC\Domain\ConfigCollection {function targetClass( ) {return "\MVC\Domain\Config";}}
class CategoryCollection 		extends Collection implements \MVC\Domain\CategoryCollection {function targetClass( ) {return "\MVC\Domain\Category";}}	
class SupplierCollection 		extends Collection implements \MVC\Domain\SupplierCollection {function targetClass( ) {return "\MVC\Domain\Supplier";}}
class PaidSupplierCollection 	extends Collection implements \MVC\Domain\PaidSupplierCollection {function targetClass( ) {return "\MVC\Domain\PaidSupplier";}}
class PaidCustomerCollection 	extends Collection implements \MVC\Domain\PaidCustomerCollection {function targetClass( ) {return "\MVC\Domain\PaidCustomer";}}
class PaidGeneralCollection 	extends Collection implements \MVC\Domain\PaidGeneralCollection{function targetClass( ) {return "\MVC\Domain\PaidGeneral";}}
class CollectGeneralCollection 	extends Collection implements \MVC\Domain\CollectGeneralCollection{function targetClass( ) {return "\MVC\Domain\CollectGeneral";}}
class CollectCustomerCollection extends Collection implements \MVC\Domain\CollectCustomerCollection{function targetClass( ) {return "\MVC\Domain\CollectCustomer";}}
class ResourceCollection 		extends Collection implements \MVC\Domain\ResourceCollection {function targetClass( ) {return "\MVC\Domain\Resource";}}
class OrderExportCollection 	extends Collection implements \MVC\Domain\OrderExportCollection {function targetClass( ) {return "\MVC\Domain\OrderExport";}}
class OrderExportDetailCollection extends Collection implements \MVC\Domain\OrderExportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderExportDetail";}}
class OrderExportDetailExtraCollection extends Collection implements \MVC\Domain\OrderExportDetailExtraCollection {function targetClass( ) {return "\MVC\Domain\OrderExportDetailExtra";}}
class OrderImportCollection 	extends Collection implements \MVC\Domain\OrderImportCollection {function targetClass( ) {return "\MVC\Domain\OrderImport";}}
class OrderImportDetailCollection extends Collection implements \MVC\Domain\OrderImportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderImportDetail";}}
class CustomerCollection 		extends Collection implements \MVC\Domain\CustomerCollection {function targetClass( ) {return "\MVC\Domain\Customer";}}
class CustomerLogCollection 	extends Collection implements \MVC\Domain\CustomerLogCollection {function targetClass( ) {return "\MVC\Domain\CustomerLog";}}
class EmployeeCollection 		extends Collection implements \MVC\Domain\EmployeeCollection{function targetClass( ) {return "\MVC\Domain\Employee";}}
class UnitCollection 			extends Collection implements \MVC\Domain\UnitCollection{function targetClass(){return "\MVC\Domain\Unit";}}
class TermPaidCollection 		extends Collection implements \MVC\Domain\TermPaidCollection{function targetClass(){return "\MVC\Domain\TermPaid";}}
class TermCollectCollection 	extends Collection implements \MVC\Domain\TermCollectCollection{function targetClass(){return "\MVC\Domain\TermCollect";}}
class StoreCollection 			extends Collection implements \MVC\Domain\StoreCollection{function targetClass(){return "\MVC\Domain\Store";}}
class PageCollection 			extends Collection implements \MVC\Domain\PageCollection{function targetClass(){return "\MVC\Domain\Page";}}
class TrackingCollection 		extends Collection implements \MVC\Domain\TrackingCollection{function targetClass(){return "\MVC\Domain\Tracking";}}
class TrackingDailyCollection 	extends Collection implements \MVC\Domain\TrackingDailyCollection{function targetClass(){return "\MVC\Domain\TrackingDaily";}}

?>
