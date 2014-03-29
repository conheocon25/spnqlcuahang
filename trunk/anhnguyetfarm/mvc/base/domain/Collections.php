<?php
namespace MVC\Domain;

interface AppCollection extends \Iterator {function add( Object $App );}
interface UserCollection extends \Iterator {function add( Object $user );}
interface UserAppCollection extends \Iterator {function add( Object $user_app );}

interface CategoryCollection extends \Iterator {function add( Object $category );}
interface SupplierCollection extends \Iterator {function add( Object $supplier );}

interface PaidSupplierCollection extends \Iterator {function add( Object $PaidSupplier );}
interface PaidPondCollection extends \Iterator {function add( Object $PaidPond );}
interface PaidPondTrackingCollection extends \Iterator {function add( Object $PaidPondTracking );}

interface ResourceCollection extends \Iterator {function add( Object $Resource );	}
interface OrderExportCollection extends \Iterator {function add( Object $OrderExport );	}
interface OrderExportTrackingCollection extends \Iterator {function add( Object $OrderExportTracking );	}
interface OrderExportDetailCollection extends \Iterator {function add( Object $OrderExportDetail );	}

interface OrderImportCollection extends \Iterator {function add( Object $OrderImport );	}
interface OrderImportDetailCollection extends \Iterator {function add( Object $OrderImportDetail );	}

interface PondCollection extends \Iterator {function add( Object $Pond );}
interface PondSessionCollection extends \Iterator {function add( Object $PondSession );}
interface PondLogCollection extends \Iterator {function add( Object $PondLog );}

interface EmployeeCollection extends \Iterator {function add( Object $Employee );}

interface UnitCollection extends \Iterator {function add( Object $Unit );}
interface StoreCollection extends \Iterator {function add( Object $Store);}
interface StoreDetailCollection extends \Iterator {function add( Object $StoreDetail);}

interface DateTrackingCollection extends \Iterator {function add( Object $DateTracking );}
interface WeekTrackingCollection extends \Iterator {function add( Object $WeekTracking );}
?>
