<?php	
	namespace MVC\Base;	
	require_once( "mvc/base/controller/AppController.php");
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');		
	/*--------------------------------------------------------------------------------*/	
	abstract class Registry { 
		abstract protected function get( $key );
		abstract protected function set( $key, $val );
	} 
	
	/*--------------------------------------------------------------------------------*/
	class SessionRegistry extends Registry { 
		private static $instance; 
		
		private function __construct() { 
			session_start(); 
		}
		
 		static function instance() { 
			if ( ! isset(self::$instance) ) { self::$instance = new self(); } 
				return self::$instance;          
		} 
 
		protected function get( $key ) { 
			if ( isset( $_SESSION[__CLASS__][$key] ) ) { 
				return $_SESSION[__CLASS__][$key]; 
			} 
			return null; 
		}  
		protected function set( $key, $val ) { 
			$_SESSION[__CLASS__][$key] = $val; 
		} 
		
		//Quản lí HeadNetwork
		function setCurrentHeadNetwork( $value ) { 
			self::instance()->set('bra_HeadNetwork', $value); 
		}
		function getCurrentHeadNetwork( ) { 
			return self::instance()->get('bra_HeadNetwork');
		}
		
		function setCurrentNetwork( $value ) { 
			self::instance()->set('bra_CurrentNetwork', $value); 
		}
		function getCurrentNetwork( ) { 
			return self::instance()->get('bra_CurrentNetwork');
		}
		
		//Quản lí IdDomain
		function setCurrentDomain( $value ) { 
			self::instance()->set('bra_IdDomain', $value); 
		}
		function getCurrentDomain( ) { 
			return self::instance()->get('bra_IdDomain');
		}
				
		//Quản lí ngày tháng lọc thông tin
		function setCurrentMonth( $value ) { 
			self::instance()->set('bra_CurrentMonth', $value ); 
		}
		function getCurrentMonth( ) { 
			return self::instance()->get('bra_CurrentMonth');
		}
		
		function setCurrentYear( $value ) { 
			self::instance()->set('bra_CurrentYear', $value ); 
		}
		function getCurrentYear( ) { 
			return self::instance()->get('bra_CurrentYear');
		}
		
		//Quản lí User
		function setCurrentUser( $user ) {
			return self::instance()->set('bra_CurrentUser', $user);
		}
		function getCurrentUser() {
			return self::instance()->get('bra_CurrentUser');
		}
		
		function setCurrentIdUser( $user ) {
			return self::instance()->set('bra_CurrentIdUser', $user);
		}
		function getCurrentIdUser() {
			return self::instance()->get('bra_CurrentIdUser');
		}
		
		function setCurrentPermission( $permission ) {
			return self::instance()->set('bra_CurrentPermission', $permission);
		}
		function getCurrentPermission() {
			return self::instance()->get('bra_CurrentPermission');
		}
		function setCurrentOrder( $order ) {
			return self::instance()->set('bra_CurrentOrder', $order);
		}
		function getCurrentOrder() {
			return self::instance()->get('bra_CurrentOrder');
		}
		function setCurrentCustomer( $Customer ) {
			return self::instance()->set('bra_CurrentCustomer', $Customer);
		}
		function getCurrentCustomer() {
			return self::instance()->get('bra_CurrentCustomer');
		}
		
		function setViewProductsPage( $ViewProducts ) {
			return self::instance()->set('bra_ViewProducts', $ViewProducts);
		}
		function getViewProductsPage() {
			return self::instance()->get('bra_ViewProducts');
		}
		
		function setViewProductsCompany( $ViewProductsCompany ) {
			return self::instance()->set('bra_ViewProductsCompany', $ViewProductsCompany);
		}
		function getViewProductsCompany() {
			return self::instance()->get('bra_ViewProductsCompany');
		}
		function setViewImportsPage( $ViewImports ) {
			return self::instance()->set('bra_ViewImports', $ViewImports);
		}
		function getViewImportsPage() {
			return self::instance()->get('bra_ViewImports');
		}
		function setViewImportsCompany( $ViewImportsCompany ) {
			return self::instance()->set('bra_ViewImportsCompany', $ViewImportsCompany);
		}
		function getViewImportsCompany() {
			return self::instance()->get('bra_ViewImportsCompany');
		}		
		function setViewExportsCustomer( $ViewExportsCustomer ) {
			return self::instance()->set('bra_ViewExportsCustomer', $ViewExportsCustomer);
		}
		function getViewExportsCustomer() {
			return self::instance()->get('bra_ViewExportsCustomer');
		}
		function setViewExportsPage( $ViewExportsPage ) {
			return self::instance()->set('bra_ViewExportsPage', $ViewExportsPage);
		}
		function getViewExportsPage() {
			return self::instance()->get('bra_ViewExportsPage');
		}
		function setCurrentDate( $CurrentDate ) {
			return self::instance()->set('bra_CurrentDate', $CurrentDate);
		}
		function getCurrentDate() {
			return self::instance()->get('bra_CurrentDate');
		}
		
		function setCurrentFactory( $CurrentFactory ) {
			return self::instance()->set('bra_CurrentFactory', $CurrentFactory);
		}
		function getCurrentFactory() {
			return self::instance()->get('bra_CurrentFactory');
		}
		
		function setCurrentDateStart( $CurrentDateStart ) {
			return self::instance()->set('bra_CurrentDateStart', $CurrentDateStart);
		}
		function getCurrentDateStart() {
			return self::instance()->get('bra_CurrentDateStart');
		}
		
		function setCurrentDateEnd( $CurrentDateEnd ) {
			return self::instance()->set('bra_CurrentDateEnd', $CurrentDateEnd);
		}
		function getCurrentDateEnd() {
			return self::instance()->get('bra_CurrentDateEnd');
		}
		
		function setCurrentSupplier( $CurrentSupplier ) {
			return self::instance()->set('bra_CurrentSupplier', $CurrentSupplier);
		}
		function getCurrentSupplier() {
			return self::instance()->get('bra_CurrentSupplier');
		}
		
	}
	/*--------------------------------------------------------------------------------*/
	class RequestRegistry extends Registry { 
		private $values = array(); 
		private static $instance; 
 
		private function __construct() {} 
		static function instance() { 
			if ( ! isset(self::$instance) ) { self::$instance = new self(); } 
				return self::$instance; 
		} 
 
		protected function get( $key ) { 
			if ( isset( $this->values[$key] ) ) { 
				return $this->values[$key]; 
			} 
			return null; 
		} 
 
		protected function set( $key, $val ) { 
			$this->values[$key] = $val; 
		} 
 
		static function getRequest() { 
			return self::instance()->get('request'); 
		} 
 
		static function setRequest( \MVC\Controller\Request $request ) { 
			return self::instance()->set('request', $request ); 
		}
	}
	
	/*--------------------------------------------------------------------------------*/
	class ApplicationRegistry extends Registry {
		private static $instance;
		private $freezedir = "data";
		private $values = array();
		private $mtimes = array();

		private function __construct() { }

		static function instance() {
			if ( ! isset(self::$instance) ) { self::$instance = new self(); }
			return self::$instance;
		}

		protected function get( $key ) {
			$path = $this->freezedir . DIRECTORY_SEPARATOR . $key;
			if ( file_exists( $path ) ) {
				clearstatcache();
				$mtime=filemtime( $path );
				if ( ! isset($this->mtimes[$key] ) ) { $this->mtimes[$key]=0; }
				if ( $mtime > $this->mtimes[$key] ) {
					$data = file_get_contents( $path );
					$this->mtimes[$key]=$mtime;
					return ($this->values[$key]=unserialize( $data ));
				}
			}
			if ( isset( $this->values[$key] ) ) {
				return $this->values[$key];
			}
			return null;
		}

		protected function set( $key, $val ) {
			$this->values[$key] = $val;
			$path = $this->freezedir . DIRECTORY_SEPARATOR . $key;
			file_put_contents( $path, serialize( $val ) );
			$this->mtimes[$key]=time();
		}
		
		static function setInfo( $info ) {
			return self::instance()->set('info', $info);
		}
		static function getInfo() {
			return self::instance()->get('info');
		}
			
		static function getDSN() {
			return self::instance()->get('dsn');
		}
		static function setDSN( $dsn ) {
			return self::instance()->set('dsn', $dsn);
		}
		/*
		static function setUser( \MVC\Domain\User $user ) {
			return self::instance()->set('user', $user);
		}
		static function getUser() {
			return self::instance()->get('user');
		}
		*/
		static function setControllerMap( \MVC\Controller\ControllerMap $map  ) {
			self::instance()->set( 'cmap', $map );
		}

		static function getControllerMap() {
			return self::instance()->get( 'cmap' );
		}

		static function appController() {
						
			$obj = self::instance();
			if ( ! isset( $obj->appController ) ) {
				$cmap = $obj->getControllerMap();
				$obj->appController = new \MVC\Controller\AppController( $cmap );
			}
			return $obj->appController;
		}
	}
	
	/*--------------------------------------------------------------------------------*/
	class MemApplicationRegistry extends Registry {
		private static $instance;
		private $values=array();
		private $id;
		const DSN=1;

		private function __construct() {
			$this->id = @shm_attach(55, 10000, 0600);
			if ( ! $this->id ) {
				throw new Exception("could not access shared memory");
			}
		}

		static function instance() {
			if ( ! isset(self::$instance) ) { self::$instance = new self(); }
			return self::$instance;
		}

		protected function get( $key ) {
			return shm_get_var( $this->id, $key );
		}

		protected function set( $key, $val ) {
			return shm_put_var( $this->id, $key, $val );
		}

		static function getDSN() {
			return self::instance()->get(self::DSN);
		}

		static function setDSN( $dsn ) {
			return self::instance()->set(self::DSN, $dsn);
		}

	}	
?>
