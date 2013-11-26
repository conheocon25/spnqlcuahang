<?php
namespace MVC\Domain;
if ( ! isset( $EG_DISABLE_INCLUDES ) ) {
	require_once( "mvc/mapper/App.php" );
	require_once( "mvc/mapper/User.php" );
	
	require_once( "mvc/mapper/Domain.php" );
	
	require_once( "mvc/mapper/CollectGeneral.php" );
	require_once( "mvc/mapper/CollectCustomer.php" );
	require_once( "mvc/mapper/PaidGeneral.php" );
	require_once( "mvc/mapper/PaidSupplier.php" );
	require_once( "mvc/mapper/PaidCustomer.php" );
	
	require_once( "mvc/mapper/Tag.php");
	require_once( "mvc/mapper/TagSelected.php");
	require_once( "mvc/mapper/R2T.php");
	
	require_once( "mvc/mapper/Supplier.php" );	
	require_once( "mvc/mapper/SupplierDomain.php" );
	require_once( "mvc/mapper/Resource.php" );
		
	require_once( "mvc/mapper/OrderExport.php" );
	require_once( "mvc/mapper/OrderExportDetail.php" );
	
	require_once( "mvc/mapper/Customer.php" );
	require_once( "mvc/mapper/CustomerTracking.php" );
	require_once( "mvc/mapper/CustomerDomain.php" );
	require_once( "mvc/mapper/OrderImport.php" );
	require_once( "mvc/mapper/OrderImportDetail.php");
		
	require_once( "mvc/mapper/Employee.php" );
	require_once( "mvc/mapper/PayRoll.php" );
	
	require_once( "mvc/mapper/Unit.php");
	require_once( "mvc/mapper/Config.php");
	
	require_once( "mvc/mapper/Tracking.php");
	require_once( "mvc/mapper/TrackingStore.php");
	require_once( "mvc/mapper/TrackingCT.php");
	require_once( "mvc/mapper/TrackingCTR.php");
	
	require_once( "mvc/mapper/Guest.php");
	require_once( "mvc/mapper/TermCollect.php");
	require_once( "mvc/mapper/TermPaid.php");
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
	
	static function getModel( $model ) {
        $model = preg_replace( "/^.*_/", "", $model );
        $model = "\\MVC\\Domain\\{$model}";
        if ( class_exists( $model ) ) {
            return new $model();
        }
        throw new \MVC\Base\AppException( "Không biết: $model" );
    }
	
}
?>