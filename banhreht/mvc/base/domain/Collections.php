<?php
namespace MVC\Domain;

interface AppCollection extends \Iterator {function add( Object $App );}
interface UserCollection extends \Iterator {function add( Object $user );}

interface CollectGeneralCollection extends \Iterator {function add( Object $CollectGeneral );}
interface CollectCustomerCollection extends \Iterator {function add( Object $CollectCustomer );}
interface PaidGeneralCollection extends \Iterator {function add( Object $PaidGeneral );}

interface TagCollection extends \Iterator {function add( Object $tag );}
interface TagSelectedCollection extends \Iterator {function add( Object $tag );}

interface FactoryCollection extends \Iterator {function add( Object $Factory );	}

interface SupplierCollection extends \Iterator {function add( Object $supplier );	}
interface ResourceCollection extends \Iterator {function add( Object $resource );	}
interface SupplierOrderCollection extends \Iterator {function add( Object $SupplierOrder );	}
interface SupplierOrderDetailCollection extends \Iterator {function add( Object $SupplierOrderDetail );	}

interface CustomerCollection extends \Iterator {function add( Object $Customer );}
interface CustomerProductCollection extends \Iterator {function add( Object $CustomerProduct );}

interface CustomerOrderCollection extends \Iterator {function add( Object $CustomerOrder );	}
interface OrderExportDetailCollection extends \Iterator {function add( Object $orderexportdetail );	}

interface EmployeeCollection extends \Iterator {function add( Object $Employee );}
interface PayRollCollection extends \Iterator {function add( Object $PayRoll );}

interface R2TCollection extends \Iterator {function add( Object $R2T );}

interface UnitCollection extends \Iterator {function add( Object $Unit );}
interface ConfigCollection extends \Iterator {function add( Object $Config );}
interface TrackingCollection extends \Iterator {function add( Object $Tracking);}
interface TrackingStoreCollection extends \Iterator {function add( Object $TrackingStore);}

interface PageCollection extends \Iterator {function add( Object $Page);}
interface GuestCollection extends \Iterator {function add( Object $Guest);}
interface TermCollectCollection extends \Iterator {function add( Object $TermCollect);}
interface TermPaidCollection extends \Iterator {function add( Object $TermPaid);}
?>