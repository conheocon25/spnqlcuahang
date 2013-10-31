<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php" ); 
require_once( "mvc/base/mapper/Collection.php" ); 

require_once( "mvc/domain/Factory.php" ); 
class FactoryCollection extends Collection
        implements \MVC\Domain\FactoryCollection {
			function targetClass( ) {
				return "\MVC\Domain\Factory";
			}
		}
require_once( "mvc/domain/FactoryLog.php" ); 
class FactoryLogCollection extends Collection
        implements \MVC\Domain\FactoryLogCollection {
			function targetClass( ) {
				return "\MVC\Domain\FactoryLog";
			}
		}
		
require_once( "mvc/domain/FactoryLoan.php" ); 
class FactoryLoanCollection extends Collection
        implements \MVC\Domain\FactoryLoanCollection {
			function targetClass( ) {
				return "\MVC\Domain\FactoryLoan";
			}
		}
		
require_once( "mvc/domain/FactoryLoanTracking.php" ); 
class FactoryLoanTrackingCollection extends Collection
        implements \MVC\Domain\FactoryLoanTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\FactoryLoanTracking";
			}
		}
		
require_once( "mvc/domain/FactoryTracking.php"); 
class FactoryTrackingCollection extends Collection
        implements \MVC\Domain\FactoryTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\FactoryTracking";
			}
		}
		
require_once( "mvc/domain/Employee.php" ); 		
class EmployeeCollection extends Collection
        implements \MVC\Domain\EmployeeCollection {
			function targetClass( ) {
				return "\MVC\Domain\Employee";
			}
		}

require_once( "mvc/domain/EmployeeLoan.php" );
class EmployeeLoanCollection extends Collection
        implements \MVC\Domain\EmployeeLoanCollection {
			function targetClass( ) {
				return "\MVC\Domain\EmployeeLoan";
			}
		}
		
require_once( "mvc/domain/EmployeeLoanTracking.php" );
class EmployeeLoanTrackingCollection extends Collection
        implements \MVC\Domain\EmployeeLoanTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\EmployeeLoanTracking";
			}
		}
		
require_once( "mvc/domain/EmployeeProduce.php" );
class EmployeeProduceCollection extends Collection
        implements \MVC\Domain\EmployeeProduceCollection {
			function targetClass( ) {
				return "\MVC\Domain\EmployeeProduce";
			}
		}

require_once( "mvc/domain/EmployeeTracking.php" );
class EmployeeTrackingCollection extends Collection
        implements \MVC\Domain\EmployeeTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\EmployeeTracking";
			}
		}
		
require_once( "mvc/domain/EmployeeProduceTracking.php" );
class EmployeeProduceTrackingCollection extends Collection
        implements \MVC\Domain\EmployeeProduceTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\EmployeeProduceTracking";
			}
		}
		
require_once( "mvc/domain/PriceEmployeeProduceTracking.php" );
class PriceEmployeeProduceCollection extends Collection
        implements \MVC\Domain\PriceEmployeeProduceCollection {
			function targetClass( ) {
				return "\MVC\Domain\PriceEmployeeProduce";
			}
		}
		
require_once( "mvc/domain/PriceEmployeeProduceTracking.php" );
class PriceEmployeeProduceTrackingCollection extends Collection
        implements \MVC\Domain\PriceEmployeeProduceTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\PriceEmployeeProduceTracking";
			}
		}

require_once( "mvc/domain/PriceProductImport.php" );
class PriceProductImportCollection extends Collection
        implements \MVC\Domain\PriceProductImportCollection {
			function targetClass( ) {
				return "\MVC\Domain\PriceProductImport";
			}
		}
		
require_once( "mvc/domain/PriceProductExport.php" );
class PriceProductExportCollection extends Collection
        implements \MVC\Domain\PriceProductExportCollection {
			function targetClass( ) {
				return "\MVC\Domain\PriceProductExport";
			}
		}		
		
require_once( "mvc/domain/PriceProductExportTracking.php" );
class PriceProductExportTrackingCollection extends Collection
        implements \MVC\Domain\PriceProductExportTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\PriceProductExportTracking";
			}
		}
		
require_once( "mvc/domain/PriceResourceExport.php" );
class PriceResourceExportCollection extends Collection
        implements \MVC\Domain\PriceResourceExportCollection {
			function targetClass( ) {
				return "\MVC\Domain\PriceResourceExport";
			}
		}
		
require_once( "mvc/domain/Customer.php" ); 	
class CustomerCollection extends Collection
        implements \MVC\Domain\CustomerCollection {
			function targetClass( ) {
				return "\MVC\Domain\Customer";
			}
		}

require_once( "mvc/domain/CustomerTracking.php" );
class CustomerLogCollection extends Collection
        implements \MVC\Domain\CustomerLogCollection{
			function targetClass( ) {
				return "\MVC\Domain\CustomerLog";
			}
		}
		
require_once( "mvc/domain/CustomerTracking.php" ); 	
class CustomerTrackingCollection extends Collection
        implements \MVC\Domain\CustomerTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\CustomerTracking";
			}
		}
		
require_once( "mvc/domain/CustomerPaid.php" ); 	
class CustomerPaidCollection extends Collection
        implements \MVC\Domain\CustomerPaidCollection {
			function targetClass( ) {
				return "\MVC\Domain\CustomerPaid";
			}
		}
		
require_once( "mvc/domain/CustomerPaidTracking.php" ); 	
class CustomerPaidTrackingCollection extends Collection
        implements \MVC\Domain\CustomerPaidTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\CustomerPaidTracking";
			}
		}		
		
require_once( "mvc/domain/Product.php" ); 		
class ProductCollection extends Collection
        implements \MVC\Domain\ProductCollection {
			function targetClass( ) {
				return "\MVC\Domain\Product";
			}
		}

require_once( "mvc/domain/ProductImport.php");
class ProductImportCollection extends Collection
        implements \MVC\Domain\ProductImportCollection {
			function targetClass( ) {
				return "\MVC\Domain\ProductImport";
			}
		}

require_once( "mvc/domain/ProductExport.php");
class ProductExportCollection extends Collection
        implements \MVC\Domain\ProductExportCollection {
			function targetClass( ) {
				return "\MVC\Domain\ProductExport";
			}
		}
		
require_once( "mvc/domain/ProductImportTracking.php");
class ProductExportTrackingCollection extends Collection
        implements \MVC\Domain\ProductExportTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\ProductExportTracking";
			}
		}
		
require_once( "mvc/domain/ProductImportTracking.php");
class ProductImportTrackingCollection extends Collection
        implements \MVC\Domain\ProductImportTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\ProductImportTracking";
			}
		}

require_once( "mvc/domain/PriceProductImportTracking.php");
class PriceProductImportTrackingCollection extends Collection
        implements \MVC\Domain\PriceProductImportTrackingCollection {
			function targetClass( ) {
				return "\MVC\Domain\PriceProductImportTracking";
			}
		}
		
require_once( "mvc/domain/Resource.php" ); 
class ResourceCollection extends Collection
        implements \MVC\Domain\ResourceCollection{
			function targetClass( ) {
				return "\MVC\Domain\Resource";
			}
		}
require_once( "mvc/domain/ResourceExport.php" ); 		
class ResourceExportCollection extends Collection
        implements \MVC\Domain\ResourceExportCollection{
			function targetClass( ) {
				return "\MVC\Domain\ResourceExport";
			}
		}
require_once( "mvc/domain/ResourceImport.php" ); 		
class ResourceImportCollection extends Collection
        implements \MVC\Domain\ResourceImportCollection{
			function targetClass( ){
				return "\MVC\Domain\ResourceImport";
			}
		}

require_once( "mvc/domain/ResourceExportTracking.php" ); 		
class ResourceExportTrackingCollection extends Collection
        implements \MVC\Domain\ResourceExportTrackingCollection{
			function targetClass( ) {
				return "\MVC\Domain\ResourceExportTracking";
			}
		}
require_once( "mvc/domain/ResourceExportTracking.php" ); 		
class PriceResourceExportTrackingCollection extends Collection
        implements \MVC\Domain\PriceResourceExportTrackingCollection{
			function targetClass( ) {
				return "\MVC\Domain\PriceResourceExportTracking";
			}
		}
require_once( "mvc/domain/ResourceImportTracking.php" ); 		
class ResourceImportTrackingCollection extends Collection
        implements \MVC\Domain\ResourceImportTrackingCollection{
			function targetClass( ) {
				return "\MVC\Domain\ResourceImportTracking";
			}
		}
require_once( "mvc/domain/PriceResourceImportTracking.php" ); 		
class PriceResourceImportTrackingCollection extends Collection
        implements \MVC\Domain\PriceResourceImportTrackingCollection{
			function targetClass( ) {
				return "\MVC\Domain\PriceResourceImportTracking";
			}
		}
		
require_once( "mvc/domain/User.php" );		
class UserCollection extends Collection
        implements \MVC\Domain\UserCollection {
			function targetClass( ) {
				return "\MVC\Domain\User";
			}
		}
require_once( "mvc/domain/Supplier.php" );		
class SupplierCollection extends Collection
        implements \MVC\Domain\SupplierCollection {
			function targetClass( ) {
				return "\MVC\Domain\Supplier";
			}
		}

class SupplierDebtCollection extends Collection
        implements \MVC\Domain\SupplierDebtCollection {
			function targetClass( ) {
				return "\MVC\Domain\SupplierDebt";
			}
		}
?>
