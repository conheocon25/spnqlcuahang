<?php
	namespace MVC\Command;	
	class S2AGet extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");	
			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Type = $request->getProperty('Type');
			$Params = $request->getProperty('Params');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			//Params[0]	:	Tên của Model
			//Params[1]	: 	Mã của Model						
			if ($Type == "one"){
				$mMapper 	= \MVC\Domain\HelperFactory::getFinder($Params[0]);
				$Obj 		= $mMapper->find($Params[1]);				
				
				//Xuất ra file XML Doc
				$Doc 		= new \DOMDocument('1.0', 'utf-8');
				$Doc->formatOutput = true;
				
				//Nút App là nút gốc là con của Doc
				$App = $Doc->createElement( "App" );				
				$Doc->appendChild( $App );
				
				//Nút Obj là con App
				$O 	=  $Obj->toXML($Doc);				
				$App->appendChild( $O );
			}
			else if ($Type == "all"){				
				$mMapper 	= \MVC\Domain\HelperFactory::getFinder($Params[0]);
				$ObjAll 	= $mMapper->findAll();
				
				//Xuất ra file XML Doc
				$Doc 		= new \DOMDocument('1.0', 'utf-8');
				$Doc->formatOutput = true;
				
				//Nút App là nút gốc là con của Doc
				$App = $Doc->createElement( "App" );				
				$Doc->appendChild( $App );
				
				while ($ObjAll->valid()){
					$Obj = $ObjAll->current();
					
					//mỗi nút Obj là con App
					$O 	=  $Obj->toXML($Doc);				
					$App->appendChild( $O );
										
					$ObjAll->next();
				}
				
			}else if ($Type == "page"){
				
			}else if ($Type == "condition"){
				
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			echo $Doc->saveXML();
		}
	}
?>