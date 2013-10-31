<?php	
	namespace MVC\Command;
	class InsertProductImport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
			
			$mFactory = new \MVC\Mapper\Factory();
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));
			$mProduct = new \MVC\Mapper\Product();
			$Products = $mProduct->findByType(array(1));
						
			$Date = $request->getProperty('Date');			
			if (isset($Date)){			
				$mProductImport = new \MVC\Mapper\ProductImport();
				$ProductImport = new \MVC\Domain\ProductImport(
					null,
					$request->getProperty('IdFactory'),
					$request->getProperty('IdProduct'),
					null,
					$request->getProperty('Date'),
					$request->getProperty('Quantity'),
					$request->getProperty('Price'),
					$request->getProperty('Description')
				);
				$mProductImport->insert($ProductImport);
				return self::statuses('CMD_OK');
			}			
			$request->setObject('Factory', $Factory);
			$request->setObject('Products', $Products);
			$request->setProperty('Title', 'THÊM NHẬN SẢN PHẨM CỦA '.mb_strtoupper($Factory->getName(), 'UTF8'));
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>