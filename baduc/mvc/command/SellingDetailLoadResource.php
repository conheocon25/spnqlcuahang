<?php		
	namespace MVC\Command;	
	class SellingDetailLoadResource extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain 	= $request->getProperty("IdDomain");
			$IdSupplier = $request->getProperty("IdSupplier");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mDomain 	= new \MVC\Mapper\Domain();
			$mSupplier 	= new \MVC\Mapper\Supplier();
			$mResource 	= new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Domain 			= $mDomain->find($IdDomain);			
			$ResourceAll		= $mResource->findBySupplier(array($IdSupplier));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Domain'			, $Domain);
			$request->setObject('ResourceAll'		, $ResourceAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>