<?php
	namespace MVC\Command;	
	class S2AGet extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");	
											
			$Session = \MVC\Base\SessionRegistry::instance();			
			$Type 		= strtoupper($request->getProperty('Type'));			
			
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
		function exeFIRST( \MVC\Controller\Request $request ){
			$ObjectName = $request->getProperty('ObjectName');
									
			$mMapper 	= \MVC\Domain\HelperFactory::getFinder( $ObjectName );
			$ObjAll		= $mMapper->findAll( );
			
			//Xuất ra file XML Doc			
			$Doc 		= new \DOMDocument();
			$Doc->formatOutput = true;
			
			//Nút App là nút gốc là con của Doc
			$App = $Doc->createElement( "app" );
			$Doc->appendChild( $App );
			
			//Nút Obj là con App
			$O 	=  $ObjAll->current()->toXML($Doc);
			$App->appendChild( $O );
			return $Doc;
			
			return $Doc;
		}
		
		function exeLAST( \MVC\Controller\Request $request ){
			$ObjectName = $request->getProperty('ObjectName');
									
			$mMapper 	= \MVC\Domain\HelperFactory::getFinder( $ObjectName );
			$ObjAll		= $mMapper->findAll( );
			
			//Xuất ra file XML Doc			
			$Doc 		= new \DOMDocument();
			$Doc->formatOutput = true;
			
			//Nút App là nút gốc là con của Doc
			$App = $Doc->createElement( "app" );
			$Doc->appendChild( $App );
			
			//Nút Obj là con App
			$O 	=  $ObjAll->last()->toXML($Doc);
			$App->appendChild( $O );
			return $Doc;
					
		}
		function exePAGE( \MVC\Controller\Request $request ){
			$ObjectName = $request->getProperty('ObjectName');
			$Page = $request->getProperty("Page");
			$RPP = $request->getProperty("RPP");
			
			$mMapper 	= \MVC\Domain\HelperFactory::getFinder( $ObjectName );
			$ObjAll 	= $mMapper->findByPage(array($Page, $RPP));
												
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
		function exeBYID( \MVC\Controller\Request $request ){
			$ObjectName 		= $request->getProperty('ObjectName');
			$ObjectParentName 	= $request->getProperty('ObjectParentName');
			$ObjectParentId 	= $request->getProperty('ObjectParentId');
									
			$mMapper 	= \MVC\Domain\HelperFactory::getFinder( $ObjectParentName );
			$Obj 		= $mMapper->find($ObjectParentId);
			$F			= "get".$ObjectName."All";
			$ObjAll		= $Obj->$F();
			
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
	}
?>