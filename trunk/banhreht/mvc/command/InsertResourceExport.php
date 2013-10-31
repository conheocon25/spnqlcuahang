<?php	
	namespace MVC\Command;
	class InsertResourceExport extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------			
						
			$mFactory = new \MVC\Mapper\Factory();
			$mResource = new \MVC\Mapper\Resource();
			
			$Factory = $mFactory->find( $request->getProperty('IdFactory'));
			$Resources = $mResource->findAll();
			
			$IdResource = $request->getProperty('IdResource');
			if (isset($IdResource)){
				$mResourceExport = new \MVC\Mapper\ResourceExport();
				
				$ResourceExport	= new \MVC\Domain\ResourceExport(
					null,
					$request->getProperty('IdFactory'),
					$request->getProperty('IdResource'),
					null,
					$request->getProperty('Date'),
					$request->getProperty('Quantity'),
					$request->getProperty('Price'),
					$request->getProperty('Description')
				);
				$mResourceExport->insert($ResourceExport);
				return self::statuses('CMD_OK');
			}
			
			$request->setObject('Factory', $Factory);
			$request->setObject('Resources', $Resources);
			$request->setProperty('Title', 'NHẬN NGUYÊN LIỆU CỦA '.mb_strtoupper($Factory->getName(), 'UTF8') );
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
