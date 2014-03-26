<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class UserCollection 			extends Collection implements \MVC\Domain\UserCollection 			{function targetClass( ) {return "\MVC\Domain\User";		}}
class CategoryCollection 		extends Collection implements \MVC\Domain\CategoryCollection 		{function targetClass( ) {return "\MVC\Domain\Category";	}}
class Category1Collection 		extends Collection implements \MVC\Domain\Category1Collection 		{function targetClass( ) {return "\MVC\Domain\Category1";	}}
class SupplierCollection 		extends Collection implements \MVC\Domain\SupplierCollection 		{function targetClass( ) {return "\MVC\Domain\Supplier";	}}
class ResourceCollection 		extends Collection implements \MVC\Domain\ResourceCollection 		{function targetClass( ) {return "\MVC\Domain\Resource";	}}
class ImageCollection 			extends Collection implements \MVC\Domain\ImageCollection 			{function targetClass( ) {return "\MVC\Domain\Image";		}}
class OrderImportCollection 	extends Collection implements \MVC\Domain\OrderImportCollection 	{function targetClass( ) {return "\MVC\Domain\OrderImport";	}}
class OrderImportDetailCollection extends Collection implements \MVC\Domain\OrderImportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderImportDetail";}}
class CustomerCollection 		extends Collection implements \MVC\Domain\CustomerCollection 		{function targetClass( ) {return "\MVC\Domain\Customer";	}}
class CustomerLogCollection 	extends Collection implements \MVC\Domain\CustomerLogCollection 	{function targetClass( ) {return "\MVC\Domain\CustomerLog";	}}
class EmployeeCollection 		extends Collection implements \MVC\Domain\EmployeeCollection		{function targetClass( ) {return "\MVC\Domain\Employee";	}}
class ConfigCollection 			extends Collection implements \MVC\Domain\ConfigCollection			{function targetClass(){return "\MVC\Domain\Config";		}}
class TrackingCollection 		extends Collection implements \MVC\Domain\TrackingCollection		{function targetClass(){return "\MVC\Domain\Tracking";		}}
class TrackingDailyCollection 	extends Collection implements \MVC\Domain\TrackingDailyCollection	{function targetClass(){return "\MVC\Domain\TrackingDaily";	}}
class PageCollection 			extends Collection implements \MVC\Domain\PageCollection			{function targetClass(){return "\MVC\Domain\Page";			}}
class GuestCollection 			extends Collection implements \MVC\Domain\GuestCollection			{function targetClass(){return "\MVC\Domain\Guest";			}}
class PostCollection 			extends Collection implements \MVC\Domain\PostCollection			{function targetClass(){return "\MVC\Domain\Post";			}}
class PresentationCollection 	extends Collection implements \MVC\Domain\PresentationCollection	{function targetClass(){return "\MVC\Domain\Presentation";	}}
class SlideCollection 			extends Collection implements \MVC\Domain\SlideCollection			{function targetClass(){return "\MVC\Domain\Slide";			}}

?>