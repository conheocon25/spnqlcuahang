<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class UserCollection 			extends Collection implements \MVC\Domain\UserCollection 			{function targetClass( ) {return "\MVC\Domain\User";}}
class DomainCollection 			extends Collection implements \MVC\Domain\DomainCollection 			{function targetClass( ) {return "\MVC\Domain\Domain";}}	
class SupplierCollection 		extends Collection implements \MVC\Domain\SupplierCollection 		{function targetClass( ) {return "\MVC\Domain\Supplier";}}

class PaidSupplierCollection 	extends Collection implements \MVC\Domain\PaidSupplierCollection 	{function targetClass( ) {return "\MVC\Domain\PaidSupplier";}}
class PaidPayRollCollection 	extends Collection implements \MVC\Domain\PaidPayRollCollection		{function targetClass( ) {return "\MVC\Domain\PaidPayRoll";}}
class PaidGeneralCollection 	extends Collection implements \MVC\Domain\PaidGeneralCollection		{function targetClass( ) {return "\MVC\Domain\PaidGeneral";}}
class PaidEmployeeCollection 	extends Collection implements \MVC\Domain\PaidEmployeeCollection	{function targetClass( ) {return "\MVC\Domain\PaidEmployee";}}

class TermPaidCollection 		extends Collection implements \MVC\Domain\TermPaidCollection		{function targetClass(){return "\MVC\Domain\TermPaid";}}
class TermCollectCollection 	extends Collection implements \MVC\Domain\TermCollectCollection		{function targetClass(){return "\MVC\Domain\TermCollect";}}
class CollectGeneralCollection 	extends Collection implements \MVC\Domain\CollectGeneralCollection	{function targetClass( ) {return "\MVC\Domain\CollectGeneral";}}
class CollectCustomerCollection extends Collection implements \MVC\Domain\CollectCustomerCollection {function targetClass( ) {return "\MVC\Domain\CollectCustomer";}}

class ResourceCollection 		extends Collection implements \MVC\Domain\ResourceCollection 		{function targetClass( ) {return "\MVC\Domain\Resource";}}
class OrderImportCollection 	extends Collection implements \MVC\Domain\OrderImportCollection 	{function targetClass( ) {return "\MVC\Domain\OrderImport";}}
class OrderImportDetailCollection extends Collection implements \MVC\Domain\OrderImportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderImportDetail";}}
class CustomerCollection 		extends Collection implements \MVC\Domain\CustomerCollection 		{function targetClass( ) {return "\MVC\Domain\Customer";}}
class EmployeeCollection 		extends Collection implements \MVC\Domain\EmployeeCollection		{function targetClass( ) {return "\MVC\Domain\Employee";}}

class ConfigCollection 			extends Collection implements \MVC\Domain\ConfigCollection			{function targetClass(){return "\MVC\Domain\Config";}}

class TrackingCollection 		extends Collection implements \MVC\Domain\TrackingCollection		{function targetClass(){return "\MVC\Domain\Tracking";}}
class TrackingDailyCollection 	extends Collection implements \MVC\Domain\TrackingDailyCollection	{function targetClass(){return "\MVC\Domain\TrackingDaily";}}

class PageCollection 			extends Collection implements \MVC\Domain\PageCollection			{function targetClass(){return "\MVC\Domain\Page";}}
class GuestCollection 			extends Collection implements \MVC\Domain\GuestCollection			{function targetClass(){return "\MVC\Domain\Guest";}}

?>