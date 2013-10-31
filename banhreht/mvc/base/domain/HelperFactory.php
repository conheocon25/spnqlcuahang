<?php
namespace MVC\Domain;
if ( ! isset( $EG_DISABLE_INCLUDES ) ) {
    require_once( "mvc/mapper/Factory.php" );
	require_once( "mvc/mapper/FactoryLog.php" );
	require_once( "mvc/mapper/FactoryLoan.php" );
	require_once( "mvc/mapper/FactoryTracking.php" );
	require_once( "mvc/mapper/FactoryLoanTracking.php" );
	
	require_once( "mvc/mapper/Employee.php" );
	require_once( "mvc/mapper/EmployeeLoan.php");
	require_once( "mvc/mapper/EmployeeProduce.php");
	require_once( "mvc/mapper/EmployeeTracking.php");
	require_once( "mvc/mapper/EmployeeProduceTracking.php");
	require_once( "mvc/mapper/EmployeeLoanTracking.php");
	
	require_once( "mvc/mapper/PriceEmployeeProduce.php");
	require_once( "mvc/mapper/PriceEmployeeProduceTracking.php");
	require_once( "mvc/mapper/PriceProductImport.php");
	require_once( "mvc/mapper/PriceProductImportTracking.php");
	require_once( "mvc/mapper/PriceProductExport.php");
	require_once( "mvc/mapper/PriceProductExportTracking.php");
	require_once( "mvc/mapper/PriceResourceExportTracking.php");
	require_once( "mvc/mapper/PriceResourceExport.php");
	require_once( "mvc/mapper/PriceResourceImportTracking.php");
	require_once( "mvc/mapper/PriceResourceImport.php");
	
	require_once( "mvc/mapper/Customer.php" );
	require_once( "mvc/mapper/CustomerLog.php" );
	require_once( "mvc/mapper/CustomerTracking.php" );
	require_once( "mvc/mapper/CustomerPaid.php" );
	require_once( "mvc/mapper/CustomerPaidTracking.php" );
		
	require_once( "mvc/mapper/Product.php" );
	require_once( "mvc/mapper/ProductImport.php" );
	require_once( "mvc/mapper/ProductImportTracking.php" );
	require_once( "mvc/mapper/ProductExport.php" );
	require_once( "mvc/mapper/ProductExportTracking.php" );
	
	require_once( "mvc/mapper/Resource.php" );
	require_once( "mvc/mapper/ResourceExport.php" );
	require_once( "mvc/mapper/ResourceExportTracking.php");
	require_once( "mvc/mapper/ResourceImport.php" );
	require_once( "mvc/mapper/ResourceImportTracking.php" );
	
	require_once( "mvc/mapper/User.php" );
	require_once( "mvc/mapper/Supplier.php" );
	require_once( "mvc/mapper/SupplierDebt.php" );
			
    require_once( "mvc/base/mapper/Collections.php" );
}

class HelperFactory {
    static function getFinder( $type ) {
        $type = preg_replace( "/^.*_/", "", $type );
        $mapper = "\\MVC\\Mapper\\{$type}";
        if ( class_exists( $mapper ) ) {
            return new $mapper();
        }
        throw new \MVC\Base\AppException( "Không biết: $mapper" );
    }

    static function getCollection( $type ) {
        $type = preg_replace( "/^.*_/", "", $type );
        $collection = "\\MVC\\Mapper\\{$type}Collection";
		//echo "----".$collection."---";
        if ( class_exists( $collection ) ) {
            return new $collection();
        }
        throw new \MVC\Base\AppException( "Không biết: $collection" );
    }
}
?>