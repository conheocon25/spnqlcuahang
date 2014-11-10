<?php
namespace MVC\Domain;

interface UserCollection 			extends \Iterator {function add( Object $user );}
interface SupplierCollection 		extends \Iterator {function add( Object $supplier );}

interface PaidSupplierCollection 	extends \Iterator {function add( Object $PaidSupplier );}
interface PaidPayRollCollection 	extends \Iterator {function add( Object $PaidPayRoll );}
interface PaidGeneralCollection 	extends \Iterator {function add( Object $PaidGeneral );}
interface PaidEmployeeCollection 	extends \Iterator {function add( Object $PaidEmployee );}

interface TermPaidCollection 		extends \Iterator {function add( Object $TermPaid );}
interface TermCollectCollection 	extends \Iterator {function add( Object $TermCollect );}
interface CollectGeneralCollection 	extends \Iterator {function add( Object $CollectGeneral );}
interface CollectCustomerCollection extends \Iterator {function add( Object $CollectCustomer );}

interface ResourceCollection 		extends \Iterator {function add( Object $resource );	}
interface CustomerCollection 		extends \Iterator {function add( Object $Customer );}

interface OrderImportCollection 	extends \Iterator {function add( Object $orderimport );	}
interface OrderImportDetailCollection extends \Iterator {function add( Object $orderimportdetail );	}

interface OrderExportCollection 	extends \Iterator {function add( Object $orderexport );	}
interface OrderExportDetailCollection extends \Iterator {function add( Object $orderexportdetail );	}

interface EmployeeCollection 		extends \Iterator {function add( Object $Employee );}
interface ConfigCollection 			extends \Iterator {function add( Object $Config );}

interface TrackingCollection 		extends \Iterator {function add( Object $Tracking);}
//interface TrackingStoreCollection 	extends \Iterator {function add( Object $TrackingStore);}
interface TrackingDailyCollection 	extends \Iterator {function add( Object $TrackingDaily);}
interface TrackingSupplierDailyCollection 	extends \Iterator {function add( Object $TrackingSupplierDaily);}

interface PageCollection 			extends \Iterator {function add( Object $Page);}
interface GuestCollection 			extends \Iterator {function add( Object $Guest);}
?>
