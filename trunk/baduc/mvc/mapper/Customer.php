<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Customer extends Mapper implements \MVC\Domain\CustomerFinder{

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select * from tbl_customer");
        $this->selectStmt = self::$PDO->prepare( 
                            "select * from tbl_customer where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update tbl_customer set name=?, alias=?, type=?, card=?, phone=?, address=?, note=?, picture=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into tbl_customer (name, alias, type, card, phone, address, note, picture) 
							values( ?, ?, ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from tbl_customer where id=?");
		$this->findByPositionStmt = self::$PDO->prepare("
						SELECT id 
						FROM tbl_customer
						WHERE idlocation=?
						LIMIT ?,1
						ORDER By id asc
		");
		$this->findByCardStmt = self::$PDO->prepare("select * from tbl_customer where card=?");
		
		$tblCustomer = "tbl_customer";
		$findByPageStmt = sprintf("SELECT * FROM  %s LIMIT :start,:max", $tblCustomer);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
		
		$this->findByDomainStmt = self::$PDO->prepare("
						SELECT *
						FROM tbl_customer C
						WHERE 
							C.id IN (SELECT CD.id_customer FROM tbl_customer_domain CD WHERE id_domain=?)
		");
		 
    } 
    function getCollection( array $raw ) {return new CustomerCollection( $raw, $this );}

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Customer( 
			$array['id'],  
			$array['name'],
			$array['alias'],
			$array['type'],
			$array['card'],
			$array['phone'],
			$array['address'],
			$array['note'],
			$array['picture']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Customer";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getName(),
			$object->getAlias(),
			$object->getType(),	
			$object->getCard(),	
			$object->getPhone(),	
			$object->getAddress(),	
			$object->getNote(),
			$object->getPicture()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getAlias(),
			$object->getType(),	
			$object->getCard(),	
			$object->getPhone(),	
			$object->getAddress(),
			$object->getNote(),
			$object->getPicture(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }
	
	function findByPostion($values) {		
        $str = "SELECT id FROM tbl_customer ORDER BY id LIMIT ". $values[0] .",1";		
		$this->findByPositionStmt = self::$PDO->prepare($str);
        $this->findByPositionStmt->execute($values);
		$result = $this->findByPositionStmt->fetchAll();
        return $result[0][0];
    }
	
	function findByCard( $values ) {	
		$this->findByCardStmt->execute( $values );
        $array = $this->findByCardStmt->fetch();
        $this->findByCardStmt->closeCursor();
        if ( ! is_array( $array ) ) { return null; }
        if ( ! isset( $array['id'] ) ) { return null; }
        $object = $this->doCreateObject( $array );
        return $object;		
    }
	
	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findByPage( $values ) {
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new CustomerCollection( $this->findByPageStmt->fetchAll(), $this );
    }
	
	function findByDomain($values ){
        $this->findByDomainStmt->execute( $values );
        return new CustomerCollection( $this->findByDomainStmt->fetchAll(), $this );
    }
	
}
?>