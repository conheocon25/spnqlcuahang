<?php
namespace MVC\Domain;

interface UserCollection 				extends \Iterator {function add( Object $user );		}
interface CategoryCollection 			extends \Iterator {function add( Object $Category );	}
interface Category1Collection 			extends \Iterator {function add( Object $Category1 );	}
interface SupplierCollection 			extends \Iterator {function add( Object $supplier );	}
interface ResourceCollection 			extends \Iterator {function add( Object $resource );	}
interface ImageCollection 				extends \Iterator {function add( Object $Image );		}

interface AttributeCollection 			extends \Iterator {function add( Object $Attribute );	}
interface GAttributeCollection 			extends \Iterator {function add( Object $GAttribute );	}
interface ManufacturerCollection 		extends \Iterator {function add( Object $Manufacturer );}

interface OrderImportCollection 		extends \Iterator {function add( Object $orderimport );	}
interface OrderImportDetailCollection 	extends \Iterator {function add( Object $orderimportdetail );	}
interface OrderExportCollection 		extends \Iterator {function add( Object $orderexport );	}
interface OrderExportDetailCollection 	extends \Iterator {function add( Object $orderexportdetail );	}

interface CustomerCollection 			extends \Iterator {function add( Object $Customer );	}
interface TagCollection 				extends \Iterator {function add( Object $Tag );			}
interface PostTagCollection 			extends \Iterator {function add( Object $PostTag );		}

interface EmployeeCollection 			extends \Iterator {function add( Object $Employee );	}
interface ConfigCollection 				extends \Iterator {function add( Object $Config );		}
interface TrackingCollection 			extends \Iterator {function add( Object $Tracking);		}
interface TrackingDailyCollection 		extends \Iterator {function add( Object $TrackingDaily);}
interface PageCollection 				extends \Iterator {function add( Object $Page);			}
interface GuestCollection 				extends \Iterator {function add( Object $Guest);		}
interface PostCollection 				extends \Iterator {function add( Object $Post);			}
interface PresentationCollection 		extends \Iterator {function add( Object $Presentation);	}
interface SlideCollection 				extends \Iterator {function add( Object $Slide);		}
interface SaveCollection 				extends \Iterator {function add( Object $Save);			}
interface SaveResourceCollection 		extends \Iterator {function add( Object $SaveResource);	}

?>
