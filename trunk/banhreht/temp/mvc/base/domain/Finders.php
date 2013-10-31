<?php
namespace MVC\Domain;

interface Finder {
    function find( $id );
    function findAll();

    function update( Object $object );
    function insert( Object $obj );
    //function delete();
}
interface FactoryFinder  extends Finder {}
interface FactoryLogFinder  extends Finder {}
interface FactoryLoanFinder  extends Finder {}
interface FactoryTrackingFinder  extends Finder {}
interface FactoryLoanTrackingFinder  extends Finder {}

interface EmployeeFinder  extends Finder {}
interface EmployeeLoanFinder  extends Finder {}
interface EmployeeProduceFinder  extends Finder {}
interface EmployeeTrackingFinder  extends Finder {}
interface EmployeeProduceTrackingFinder  extends Finder {}
interface EmployeeLoanTrackingFinder  extends Finder {}

interface PriceEmployeeProduceFinder  extends Finder {}
interface PriceEmployeeProduceTrackingFinder  extends Finder {}
interface PriceProductImportFinder  extends Finder {}
interface PriceProductImportTrackingFinder  extends Finder {}
interface PriceProductExportFinder  extends Finder {}
interface PriceProductExportTrackingFinder  extends Finder {}
interface PriceResourceExportTrackingFinder  extends Finder {}
interface PriceResourceExportFinder  extends Finder {}
interface PriceResourceImportFinder  extends Finder {}
interface PriceResourceImportTrackingFinder  extends Finder {}

interface CustomerFinder  extends Finder {}
interface CustomerLogFinder  extends Finder {}
interface CustomerTrackingFinder  extends Finder {}
interface CustomerPaidFinder  extends Finder {}
interface CustomerPaidTrackingFinder  extends Finder {}

interface ProductFinder  extends Finder {}
interface ProductImportFinder  extends Finder {}
interface ProductImportTrackingFinder  extends Finder {}

interface ProductExportFinder  extends Finder {}
interface ProductExportTrackingFinder  extends Finder {}

interface ResourceFinder  extends Finder {}
interface ResourceExportFinder  extends Finder {}
interface ResourceExportTrackingFinder  extends Finder {}
interface ResourceImportFinder  extends Finder {}
interface ResourceImportTrackingFinder  extends Finder {}

interface UserFinder  extends Finder {}
interface SupplierFinder  extends Finder {}
interface SupplierDebtFinder  extends Finder {}
?>