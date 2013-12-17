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
class PaidCustomerCollection extends Collection implements \MVC\Domain\PaidCustomerCollection {function targetClass( ) {return "\MVC\Domain\PaidCustomer";}}
class PaidEmployeeCollection extends Collection implements \MVC\Domain\PaidEmployeeCollection{function targetClass( ) {return "\MVC\Domain\PaidEmployee";}}
class PaidOtherCollection extends Collection implements \MVC\Domain\PaidOtherCollection{function targetClass( ) {return "\MVC\Domain\PaidOther";}}

class ResourceCollection extends Collection implements \MVC\Domain\ResourceCollection {function targetClass( ) {return "\MVC\Domain\Resource";}}

class OrderExportCollection extends Collection implements \MVC\Domain\OrderExportCollection {function targetClass( ) {return "\MVC\Domain\OrderExport";}}
class OrderExportDetailCollection extends Collection implements \MVC\Domain\OrderExportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderExportDetail";}}
class OrderExportDetailExtraCollection extends Collection implements \MVC\Domain\OrderExportDetailExtraCollection {function targetClass( ) {return "\MVC\Domain\OrderExportDetailExtra";}}

class OrderImportCollection extends Collection implements \MVC\Domain\OrderImportCollection {function targetClass( ) {return "\MVC\Domain\OrderImport";}}
class OrderImportDetailCollection extends Collection implements \MVC\Domain\OrderImportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderImportDetail";}}

class CustomerCollection extends Collection implements \MVC\Domain\CustomerCollection {function targetClass( ) {return "\MVC\Domain\Customer";}}
class EmployeeCollection extends Collection implements \MVC\Domain\EmployeeCollection{function targetClass( ) {return "\MVC\Domain\Employee";}}

class UnitCollection extends Collection implements \MVC\Domain\UnitCollection{function targetClass(){return "\MVC\Domain\Unit";}}
class TermCollection extends Collection implements \MVC\Domain\TermCollection{function targetClass(){return "\MVC\Domain\Term";}}
class StoreCollection extends Collection implements \MVC\Domain\StoreCollection{function targetClass(){return "\MVC\Domain\Store";}}
class PageCollection extends Collection implements \MVC\Domain\PageCollection{function targetClass(){return "\MVC\Domain\Page";}}
class StoreDetailCollection extends Collection implements \MVC\Domain\StoreDetailCollection{function targetClass(){return "\MVC\Domain\StoreDetail";}}

?>
