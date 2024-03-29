<?php
namespace MVC\Domain;

interface UserCollection 			extends \Iterator {function add( Object $user );}
interface ConfigCollection 			extends \Iterator {function add( Object $Config );}
interface CategoryCollection 		extends \Iterator {function add( Object $category );	}
interface SupplierCollection 		extends \Iterator {function add( Object $supplier );	}
interface PaidCustomerCollection 	extends \Iterator {function add( Object $PaidCustomer );}
interface PaidSupplierCollection 	extends \Iterator {function add( Object $PaidSupplier );}
interface PaidGeneralCollection 	extends \Iterator {function add( Object $PaidGeneral );}
interface CollectGeneralCollection 	extends \Iterator {function add( Object $CollectGeneral );}
interface CollectCustomerCollection extends \Iterator {function add( Object $CollectCustomer);}
interface ResourceCollection 		extends \Iterator {function add( Object $Resource );}
interface OrderExportCollection 	extends \Iterator {function add( Object $OrderExport );	}
interface OrderExportDetailCollection extends \Iterator {function add( Object $OrderExportDetail );	}
interface OrderExportDetailExtraCollection extends \Iterator {function add( Object $OrderExportDetailExtra );}
interface OrderImportCollection 	extends \Iterator {function add( Object $OrderImport );	}
interface OrderImportDetailCollection extends \Iterator {function add( Object $OrderImportDetail );	}
interface CustomerCollection 		extends \Iterator {function add( Object $Customer );}
interface CustomerLogCollection 	extends \Iterator {function add( Object $CustomerLog );}
interface EmployeeCollection 		extends \Iterator {function add( Object $Employee );}
interface UnitCollection 			extends \Iterator {function add( Object $Unit );}
interface TermCollectCollection 	extends \Iterator {function add( Object $TermCollect );}
interface TermPaidCollection 		extends \Iterator {function add( Object $TermPaid );}
interface StoreCollection 			extends \Iterator {function add( Object $Store);}
interface PageCollection 			extends \Iterator {function add( Object $Page);}
interface TrackingCollection 		extends \Iterator {function add( Object $Tracking);}
interface TrackingDailyCollection 	extends \Iterator {function add( Object $TrackingDaily);}
?>