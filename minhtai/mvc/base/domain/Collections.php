<?php
namespace MVC\Domain;

interface AppCollection extends \Iterator {function add( Object $App );}
interface UserCollection extends \Iterator {function add( Object $user );}
interface UserAppCollection extends \Iterator {function add( Object $user_app );}

interface CategoryCollection extends \Iterator {function add( Object $category );	}
interface SupplierCollection extends \Iterator {function add( Object $supplier );	}

interface PaidCustomerCollection extends \Iterator {function add( Object $PaidCustomer );}
interface PaidSupplierCollection extends \Iterator {function add( Object $PaidSupplier );}
interface PaidEmployeeCollection extends \Iterator {function add( Object $PaidEmployee );}
interface PaidOtherCollection extends \Iterator {function add( Object $PaidOther );}

interface ResourceCollection extends \Iterator {function add( Object $Resource );	}
interface OrderExportCollection extends \Iterator {function add( Object $OrderExport );	}
interface OrderExportDetailCollection extends \Iterator {function add( Object $OrderExportDetail );	}
interface OrderExportDetailExtraCollection extends \Iterator {function add( Object $OrderExportDetailExtra );}

interface OrderImportCollection extends \Iterator {function add( Object $OrderImport );	}
interface OrderImportDetailCollection extends \Iterator {function add( Object $OrderImportDetail );	}
interface CustomerCollection extends \Iterator {function add( Object $Customer );}

interface EmployeeCollection extends \Iterator {function add( Object $Employee );}

interface UnitCollection extends \Iterator {function add( Object $Unit );}
interface TermCollection extends \Iterator {function add( Object $Term );}
interface StoreCollection extends \Iterator {function add( Object $Store);}
interface PageCollection extends \Iterator {function add( Object $Page);}
interface StoreDetailCollection extends \Iterator {function add( Object $StoreDetail);}
?>
