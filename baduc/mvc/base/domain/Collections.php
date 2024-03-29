<?php
namespace MVC\Domain;

interface AppCollection 				extends \Iterator {function add( Object $App );}
interface UserCollection 				extends \Iterator {function add( Object $user );}

interface DomainCollection 				extends \Iterator {function add( Object $Domain );}

interface CollectGeneralCollection 		extends \Iterator {function add( Object $CollectGeneral );}
interface CollectCustomerCollection 	extends \Iterator {function add( Object $CollectCustomer );}
interface PaidGeneralCollection 		extends \Iterator {function add( Object $PaidGeneral );}
interface PaidSupplierCollection 		extends \Iterator {function add( Object $PaidSupplier );}
interface PaidCustomerCollection 		extends \Iterator {function add( Object $PaidCustomer );}

interface TagCollection 				extends \Iterator {function add( Object $tag );}
interface TagSelectedCollection 		extends \Iterator {function add( Object $tag );}

interface SupplierCollection 			extends \Iterator {function add( Object $supplier );	}
interface SupplierDomainCollection 		extends \Iterator {function add( Object $SupplierDomain );	}
interface ResourceCollection 			extends \Iterator {function add( Object $resource );	}

interface OrderImportCollection 		extends \Iterator {function add( Object $orderimport );	}
interface OrderImportDetailCollection 	extends \Iterator {function add( Object $orderimportdetail );	}
interface CustomerCollection 			extends \Iterator {function add( Object $Customer );}
interface CustomerTrackingCollection 	extends \Iterator {function add( Object $CustomerTracking );}
interface CustomerDomainCollection 		extends \Iterator {function add( Object $CustomerDomain );}

interface OrderExportCollection 		extends \Iterator {function add( Object $orderexport );	}
interface OrderExportLogCollection 		extends \Iterator {function add( Object $orderexportlog );	}
interface OrderExportDetailCollection 	extends \Iterator {function add( Object $orderexportdetail );	}

interface EmployeeCollection 			extends \Iterator {function add( Object $Employee );}
interface PayRollCollection 			extends \Iterator {function add( Object $PayRoll );}

interface R2TCollection 				extends \Iterator {function add( Object $R2T );}

interface UnitCollection 				extends \Iterator {function add( Object $Unit );}
interface ConfigCollection 				extends \Iterator {function add( Object $Config );}
interface TrackingCollection 			extends \Iterator {function add( Object $Tracking);}
interface TrackingStoreCollection 		extends \Iterator {function add( Object $TrackingStore);}
interface TrackingCTCollection 			extends \Iterator {function add( Object $TrackingCT);}
interface TrackingCTRCollection 		extends \Iterator {function add( Object $TrackingCTR);}

interface PageCollection 				extends \Iterator {function add( Object $Page);}
interface GuestCollection 				extends \Iterator {function add( Object $Guest);}
interface TermCollectCollection 		extends \Iterator {function add( Object $TermCollect);}
interface TermPaidCollection 			extends \Iterator {function add( Object $TermPaid);}
?>