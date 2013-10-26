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
			$Type 		= strtoupper($request->getProperty('Type'));			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			header('Content-Type: text/xml');
			$fName = "exe".$Type;
			$Doc = $this->$fName($request);
			echo $Doc->saveXML();
		}
		function exeONE( \MVC\Controller\Request $request ){
						
			$ObjectName = $request->getProperty('ObjectName');
			$ObjectId 	= $request->getProperty('ObjectId');
						
			$mMapper 	= \MVC\Domain\HelperFactory::getFinder( $ObjectName );
			$Obj 		= $mMapper->find( $ObjectId );
			
			//Xuất ra file XML Doc			
			$Doc 		= new \DOMDocument();
			$Doc->formatOutput = true;
			
			//Nút App là nút gốc là con của Doc
			$App = $Doc->createElement( "app" );
			$Doc->appendChild( $App );
			
			//Nút Obj là con App
			$O 	=  $Obj->toXML($Doc);				
			$App->appendChild( $O );
			return $Doc;
		}
		function exeALL( \MVC\Controller\Request $request ){
			$ObjectName = $request->getProperty('ObjectName');
			$mMapper 	= \MVC\Domain\HelperFactory::getFinder( $ObjectName );
			$ObjAll 	= $mMapper->findAll();
			
			//Xuất ra file XML Doc			
			$Doc 		= new \DOMDocument();
			$Doc->formatOutput = true;
			
			//Nút App là nút gốc là con của Doc
			$App = $Doc->createElement( "app" );
			$Doc->appendChild( $App );
			
			while ($ObjAll->valid()){
				$Obj = $ObjAll->current();
				
				//mỗi nút Obj là con App
				$O 	=  $Obj->toXML($Doc);				
				$App->appendChild( $O );
									
				$ObjAll->next();
			}
			return $Doc;
		}
		function exeSIZE( \MVC\Controller\Request $request ){
			$ObjectName = $request->getProperty('ObjectName');
			$mMapper 	= \MVC\Domain\HelperFactory::getFinder( $ObjectName );
			$ObjAll 	= $mMapper->findAll();
			
			//Xuất ra file XML Doc
			$Doc 		= new \DOMDocument();
			$Doc->formatOutput = true;
			
			//Nút App là nút gốc là con của Doc
			$App = $Doc->createElement( "app" );
			$Doc->appendChild( $App );
			$Size = $Doc->createElement( "size" );
			$Size->appendChild($Doc->createTextNode( $ObjAll->count() ));
			$App->appendChild($Size);
			
			return $Doc;
		}
	}
?>