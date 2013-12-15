<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class AppCollection extends Collection implements \MVC\Domain\AppCollection {function targetClass( ) {return "\MVC\Domain\App";}}
class UserCollection extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\User";}}

class CollectGeneralCollection extends Collection implements \MVC\Domain\CollectGeneralCollection {function targetClass( ) {return "\MVC\Domain\CollectGeneral";}}
class CollectCustomerCollection extends Collection implements \MVC\Domain\CollectCustomerCollection {function targetClass( ) {return "\MVC\Domain\CollectCustomer";}}
class PaidGeneralCollection extends Collection implements \MVC\Domain\PaidGeneralCollection {function targetClass( ) {return "\MVC\Domain\PaidGeneral";}}

class FactoryCollection extends Collection implements \MVC\Domain\FactoryCollection {function targetClass( ) {return "\MVC\Domain\Factory";}}

class TagCollection extends Collection implements \MVC\Domain\TagCollection {function targetClass( ) {return "\MVC\Domain\Tag";}}
class TagSelectedCollection extends Collection implements \MVC\Domain\TagSelectedCollection {function targetClass( ) {return "\MVC\Domain\TagSelected";}}

class ResourceCollection extends Collection implements \MVC\Domain\ResourceCollection {function targetClass( ) {return "\MVC\Domain\Resource";}}
class SupplierCollection extends Collection implements \MVC\Domain\SupplierCollection {function targetClass( ) {return "\MVC\Domain\Supplier";}}
class SupplierOrderCollection extends Collection implements \MVC\Domain\SupplierOrderCollection {function targetClass( ) {return "\MVC\Domain\SupplierOrder";}}
class SupplierOrderDetailCollection extends Collection implements \MVC\Domain\SupplierOrderDetailCollection {function targetClass( ) {return "\MVC\Domain\SupplierOrderDetail";}}

class CustomerCollection extends Collection implements \MVC\Domain\CustomerCollection {function targetClass( ) {return "\MVC\Domain\Customer";}}
class CustomerProductCollection extends Collection implements \MVC\Domain\CustomerProductCollection {function targetClass( ) {return "\MVC\Domain\CustomerProduct";}}

class EmployeeCollection extends Collection implements \MVC\Domain\EmployeeCollection {function targetClass( ) {return "\MVC\Domain\Employee";}}
class PayRollCollection extends Collection implements \MVC\Domain\PayRollCollection {function targetClass( ) {return "\MVC\Domain\PayRoll";}}

class CustomerOrderCollection extends Collection implements \MVC\Domain\CustomerOrderCollection {function targetClass( ) {return "\MVC\Domain\CustomerOrder";}}
class OrderExportDetailCollection extends Collection implements \MVC\Domain\OrderExportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderExportDetail";}}

class UnitCollection extends Collection implements \MVC\Domain\UnitCollection{function targetClass(){return "\MVC\Domain\Unit";}}
class R2TCollection extends Collection implements \MVC\Domain\R2TCollection{function targetClass(){return "\MVC\Domain\R2T";}}

class ConfigCollection extends Collection implements \MVC\Domain\ConfigCollection{function targetClass(){return "\MVC\Domain\Config";}}
class TrackingCollection extends Collection implements \MVC\Domain\TrackingCollection{function targetClass(){return "\MVC\Domain\Tracking";}}
class TrackingStoreCollection extends Collection implements \MVC\Domain\TrackingStoreCollection{function targetClass(){return "\MVC\Domain\TrackingStore";}}

class PageCollection extends Collection implements \MVC\Domain\PageCollection{function targetClass(){return "\MVC\Domain\Page";}}
class GuestCollection extends Collection implements \MVC\Domain\GuestCollection{function targetClass(){return "\MVC\Domain\Guest";}}

class TermPaidCollection extends Collection implements \MVC\Domain\TermPaidCollection{function targetClass(){return "\MVC\Domain\TermPaid";}}
class TermCollectCollection extends Collection implements \MVC\Domain\TermCollectCollection{function targetClass(){return "\MVC\Domain\TermCollect";}}

?>