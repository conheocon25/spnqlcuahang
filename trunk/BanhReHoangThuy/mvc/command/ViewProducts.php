<?php	
	namespace MVC\Command;
	class ViewProducts extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$mProduct = new \MVC\Mapper\Product();						
			$TypeProduct = $request->getProperty('TypeProduct');
			if ( !isset($TypeProduct)){
				$TypeProduct = 1;				
			}
			if ($TypeProduct ==1) 
				$Title = 'CÁC SẢN PHẨM LOẠI [HÀNG GIA CÔNG]';
			else
				$Title = 'CÁC SẢN PHẨM LOẠI [HÀNG THƯƠNG PHẨM]';
			
			$Products = $mProduct->findByType(array($TypeProduct));
			$request->setObject('Products', $Products);
			$request->setProperty('Title', $Title);
						
			return self::statuses('CMD_OK');
		}
	}
?>
