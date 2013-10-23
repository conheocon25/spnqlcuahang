<?php
namespace MVC\Domain;

interface AppCollection extends \Iterator {function add( Object $App );}
interface UserCollection extends \Iterator {function add( Object $user );}

interface TagCollection extends \Iterator {function add( Object $tag );}
interface TagSelectedCollection extends \Iterator {function add( Object $tag );}

interface SupplierCollection extends \Iterator {function add( Object $supplier );	}
interface ResourceCollection extends \Iterator {function add( Object $resource );	}

interface OrderImportCollection extends \Iterator {function add( Object $orderimport );	}
interface OrderImportDetailCollection extends \Iterator {function add( Object $orderimportdetail );	}
interface CustomerCollection extends \Iterator {function add( Object $Customer );}

interface OrderExportCollection extends \Iterator {function add( Object $orderexport );	}
interface OrderExportDetailCollection extends \Iterator {function add( Object $orderexportdetail );	}

interface EmployeeCollection extends \Iterator {function add( Object $Employee );}

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