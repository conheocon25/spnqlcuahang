<?php
namespace MVC\Domain;
if ( ! isset( $EG_DISABLE_INCLUDES ) ) {
	require_once( "mvc/mapper/App.php" );
	require_once( "mvc/mapper/User.php" );
	require_once( "mvc/mapper/UserApp.php" );
		
	require_once( "mvc/mapper/Category.php" );
	require_once( "mvc/mapper/Supplier.php" );	
	
	require_once( "mvc/mapper/PaidCustomer.php");
	require_once( "mvc/mapper/PaidSupplier.php");
	require_once( "mvc/mapper/PaidEmployee.php");
	require_once( "mvc/mapper/PaidOther.php");
	
	require_once( "mvc/mapper/Resource.php" );
	require_once( "mvc/mapper/OrderExport.php" );
	require_once( "mvc/mapper/OrderExportDetail.php");
	require_once( "mvc/mapper/OrderExportDetailExtra.php");
	
	require_once( "mvc/mapper/OrderImport.php" );
	require_once( "mvc/mapper/OrderImportDetail.php");
	require_once( "mvc/mapper/Customer.php" );
	require_once( "mvc/mapper/Employee.php" );
	
	require_once( "mvc/mapper/Unit.php");
	require_once( "mvc/mapper/Term.php");			
	require_once( "mvc/mapper/Store.php");
	require_once( "mvc/mapper/StoreDetail.php");
	
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
        if ( class_exists( $collection ) ) {
            return new $collection();
        }
        throw new \MVC\Base\AppException( "Không biết: $collection" );
    }
}
?>
