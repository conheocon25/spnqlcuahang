<?php
/** 
 * PHP version 5.3
 *
 * LICENSE: Lưu hành nội bộ
 *
 * @category   Database
 * @package    Mapper
 * @author     Bùi Thanh Tuấn <tuanbuithanh@gmail.com> 
 * @copyright  2010-2012 SPN Group
 * @license    Bản quyền nhóm
 * @version    SVN: ?
 * @link       mvc/mapper/Term.php
 * @see        Term
 * @note       Định danh các khoản chi tiêu trong hệ thống
 */
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class Term extends Mapper implements \MVC\Domain\TermFinder{

    function __construct() {
        parent::__construct();
		
		$tblTerm = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."term";
						
		$selectAllStmt = sprintf("select * from %s", $tblTerm);
		$selectStmt = sprintf("select * from %s where id=?", $tblTerm);
		$updateStmt = sprintf("update %s set name=? where id=?", $tblTerm);
		$insertStmt = sprintf("insert into %s ( name) values(?)", $tblTerm);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTerm);
						
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
									
    } 
    function getCollection( array $raw ) {
        return new TermCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Term( 
			$array['id'],
			$array['name']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Term";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	function create( $prefix ){
		$tblTerm = $prefix."term";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS `%s` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;
			INSERT INTO `%s` (`id`, `name`) VALUES
			(1, 'Tiền điện'),
			(2, 'Tiền nước'),
			(3, 'Tiền thuế');
		", $tblTerm, $tblTerm);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute();
		$this->createStmt->closeCursor();		
    }
	function drop( $prefix ){
		$tblTerm = $prefix."term";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblTerm);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
	
}
?>