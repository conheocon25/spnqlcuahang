<?php
namespace MVC\Domain;
interface FactoryCollection extends \Iterator {
    function add( Object $Factory );
}
interface FactoryLogCollection extends \Iterator {
    function add( Object $FactoryLog );
}
interface FactoryLoanCollection extends \Iterator {
    function add( Object $FactoryLoan );
}
interface FactoryTrackingCollection extends \Iterator {
    function add( Object $FactoryTracking );
}
interface FactoryLoanTrackingCollection extends \Iterator {
    function add( Object $FactoryLoanTracking );
}

//-----------------------------------------------------------------
//-----------------------------------------------------------------
//-----------------------------------------------------------------
interface EmployeeCollection extends \Iterator {
    function add( Object $Employee );
}
interface EmployeeLoanCollection extends \Iterator {
    function add( Object $EmployeeLoan);
}
interface EmployeeProduceCollection extends \Iterator {
    function add( Object $EmployeeProduce);
}
interface EmployeeTrackingCollection extends \Iterator {
    function add( Object $EmployeeTracking);
}

interface EmployeeProduceTrackingCollection extends \Iterator {
    function add( Object $EmployeeProduceTracking);
}
interface EmployeeLoanTrackingCollection extends \Iterator {
    function add( Object $EmployeeLoanTracking);
}
interface PriceEmployeeProduceCollection extends \Iterator {
    function add( Object $PriceEmployeeProduce);
}
interface PriceEmployeeProduceTrackingCollection extends \Iterator {
    function add( Object $PriceEmployeeProduceTracking);
}

interface PriceProductImportCollection extends \Iterator {
    function add( Object $PriceProductImport);
}

interface PriceProductExportCollection extends \Iterator {
    function add( Object $PriceProductExport);
}

interface PriceProductExportTrackingCollection extends \Iterator {
    function add( Object $PriceProductExportTracking);
}

interface PriceResourceExportTrackingCollection extends \Iterator {
    function add( Object $PriceResourceExportTracking);
}

interface PriceResourceExportCollection extends \Iterator {
    function add( Object $PriceResourceExport);
}

interface PriceResourceImportTrackingCollection extends \Iterator {
    function add( Object $PriceResourceImportTracking);
}
//-----------------------------------------------------------------
//-----------------------------------------------------------------
//-----------------------------------------------------------------
interface CustomerCollection extends \Iterator {
    function add( Object $customer );
}
interface CustomerLogCollection extends \Iterator {
    function add( Object $customerlog );
}
interface CustomerTrackingCollection extends \Iterator {
    function add( Object $customertracking );
}
interface CustomerPaidCollection extends \Iterator {
    function add( Object $CustomerPaid);
}
interface CustomerPaidTrackingCollection extends \Iterator {
    function add( Object $CustomerPaidTracking );
}

//-------------------------------------------------------------------
//-----------------------------------------------------------------
//-----------------------------------------------------------------
interface ProductCollection extends \Iterator {
    function add( Object $product );
}
interface ProductImportCollection extends \Iterator {
    function add( Object $ProductImport );
}
interface ProductImportTrackingCollection extends \Iterator {
    function add( Object $ProductImportTracking );
}
interface PriceProductImportTrackingCollection extends \Iterator {
    function add( Object $PriceProductImportTracking );
}

interface ProductExportCollection extends \Iterator {
    function add( Object $ProductExport );
}
interface ProductExportTrackingCollection extends \Iterator {
    function add( Object $ProductExportTracking );
}

interface ResourceCollection extends \Iterator {
    function add( Object $Resource );
}

interface ResourceExportCollection extends \Iterator {
    function add( Object $ResourceExport );
}

interface ResourceImportCollection extends \Iterator {
    function add( Object $ResourceImport );
}

interface ResourceExportTrackingCollection extends \Iterator {
    function add( Object $ResourceExportTracking );
}
interface ResourceImportTrackingCollection extends \Iterator {
    function add( Object $ResourceImportTracking );
}


interface UserCollection extends \Iterator {
    function add( Object $user );	
}

interface SupplierCollection extends \Iterator {
    function add( Object $supplier );	
}
interface SupplierDebtCollection extends \Iterator {
    function add( Object $supplierdebt );	
}
?>
