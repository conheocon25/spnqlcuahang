<?php	
	namespace MVC\Command;
	class UpdateFactoryLoan extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//------------------------------------------------------------
			$ses = \MVC\Base\SessionRegistry::instance();
						
			$ColumnId = $request->getProperty('columnId');
			$RowId = $request->getProperty('rowId');
			$Value = $request->getProperty('value');
									
			$mFactory = new \MVC\Mapper\Factory();
			$IdFactory = $ses->getCurrentFactory();
			$Factory = $mFactory->find($IdFactory);
						
			$Today = $ses->getCurrentDate();
			$cd = strtotime($Today);
			$Date = date('Y-m-d', mktime(0,0,0,date('m',$cd),$RowId+1,date('Y',$cd)));
				
			//echo $RowId."-".$Factory->getName()."-".$Value."-".$Date;
			$mFactoryLoan = new \MVC\Mapper\FactoryLoan();
			$Id = $request->getProperty('Id');
			
			$Id = $mFactoryLoan->checkExist(array($IdFactory, $Date));
			if ($Id == 0){
				$FactoryLoan = new \MVC\Domain\FactoryLoan(
					null, $IdFactory, $Date, $Value, ""
				);
				$mFactoryLoan->insert($FactoryLoan);
				$Id = $FactoryLoan->getId();
			}else{
				if ($ColumnId == 1){
					$FactoryLoan = $mFactoryLoan->find($Id);
					$FactoryLoan->setValue($Value);
					$mFactoryLoan->update($FactoryLoan);
				}else if ($ColumnId == 2){
					$FactoryLoan = $mFactoryLoan->find($Id);
					$FactoryLoan->setDescription($Value);
					$mFactoryLoan->update($FactoryLoan);
				}
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>