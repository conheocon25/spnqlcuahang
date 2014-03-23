<?php
namespace MVC\Domain;

interface UserCollection 			extends \Iterator {function add( Object $user );		}
interface CategoryCollection 		extends \Iterator {function add( Object $Category );	}
interface Category1Collection 		extends \Iterator {function add( Object $Category1 );	}
interface SupplierCollection 		extends \Iterator {function add( Object $supplier );	}
interface ResourceCollection 		extends \Iterator {function add( Object $resource );	}
interface ImageCollection 			extends \Iterator {function add( Object $Image );		}
interface OrderImportCollection 	extends \Iterator {function add( Object $orderimport );	}
interface OrderImportDetailCollection extends \Iterator {function add( Object $orderimportdetail );	}
interface CustomerCollection 		extends \Iterator {function add( Object $Customer );	}
interface CustomerLogCollection 	extends \Iterator {function add( Object $CustomerLog );	}
interface EmployeeCollection 		extends \Iterator {function add( Object $Employee );	}
interface ConfigCollection 			extends \Iterator {function add( Object $Config );		}
interface TrackingCollection 		extends \Iterator {function add( Object $Tracking);		}
interface TrackingDailyCollection 	extends \Iterator {function add( Object $TrackingDaily);}
interface PageCollection 			extends \Iterator {function add( Object $Page);			}
interface GuestCollection 			extends \Iterator {function add( Object $Guest);		}
?>
