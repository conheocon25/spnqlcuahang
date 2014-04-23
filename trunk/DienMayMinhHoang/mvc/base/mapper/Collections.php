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

class AttributeCollection 		extends Collection implements \MVC\Domain\AttributeCollection 		{function targetClass( ) {return "\MVC\Domain\Attribute";	}}
class GAttributeCollection 		extends Collection implements \MVC\Domain\GAttributeCollection 		{function targetClass( ) {return "\MVC\Domain\GAttribute";	}}
class ManufacturerCollection 	extends Collection implements \MVC\Domain\ManufacturerCollection 	{function targetClass( ) {return "\MVC\Domain\Manufacturer";}}

class OrderImportCollection 	extends Collection implements \MVC\Domain\OrderImportCollection 	{function targetClass( ) {return "\MVC\Domain\OrderImport";	}}
class OrderImportDetailCollection extends Collection implements \MVC\Domain\OrderImportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderImportDetail";}}
class OrderExportCollection 	extends Collection implements \MVC\Domain\OrderExportCollection 	{function targetClass( ) {return "\MVC\Domain\OrderExport";	}}
class OrderExportDetailCollection extends Collection implements \MVC\Domain\OrderExportDetailCollection {function targetClass( ) {return "\MVC\Domain\OrderExportDetail";}}

class CustomerCollection 		extends Collection implements \MVC\Domain\CustomerCollection 		{function targetClass( ) {return "\MVC\Domain\Customer";	}}
class TagCollection 			extends Collection implements \MVC\Domain\TagCollection 			{function targetClass( ) {return "\MVC\Domain\Tag";			}}
class PostTagCollection 		extends Collection implements \MVC\Domain\PostTagCollection 		{function targetClass( ) {return "\MVC\Domain\PostTag";		}}

class EmployeeCollection 		extends Collection implements \MVC\Domain\EmployeeCollection		{function targetClass( ) {return "\MVC\Domain\Employee";	}}
class ConfigCollection 			extends Collection implements \MVC\Domain\ConfigCollection			{function targetClass(){return "\MVC\Domain\Config";		}}
class TrackingCollection 		extends Collection implements \MVC\Domain\TrackingCollection		{function targetClass(){return "\MVC\Domain\Tracking";		}}
class TrackingDailyCollection 	extends Collection implements \MVC\Domain\TrackingDailyCollection	{function targetClass(){return "\MVC\Domain\TrackingDaily";	}}
class PageCollection 			extends Collection implements \MVC\Domain\PageCollection			{function targetClass(){return "\MVC\Domain\Page";			}}
class GuestCollection 			extends Collection implements \MVC\Domain\GuestCollection			{function targetClass(){return "\MVC\Domain\Guest";			}}
class PostCollection 			extends Collection implements \MVC\Domain\PostCollection			{function targetClass(){return "\MVC\Domain\Post";			}}
class PresentationCollection 	extends Collection implements \MVC\Domain\PresentationCollection	{function targetClass(){return "\MVC\Domain\Presentation";	}}
class SlideCollection 			extends Collection implements \MVC\Domain\SlideCollection			{function targetClass(){return "\MVC\Domain\Slide";			}}
class SaveCollection 			extends Collection implements \MVC\Domain\SaveCollection			{function targetClass(){return "\MVC\Domain\Save";			}}
class SaveResourceCollection 	extends Collection implements \MVC\Domain\SaveResourceCollection	{function targetClass(){return "\MVC\Domain\SaveResource";	}}

?>