<?php
require_once(__DIR__."/../core/PDOConnection.php");

class ClienteMapper {
	private $db;  
	public function __construct() {
	$this->db = PDOConnection::getInstance();
}

public function isValidClient($dni){
    $stmt = $this->db->prepare("SELECT count(dni) FROM clientes where dni=?");
	var_dump($stmt);
$stmt->execute(array($dni));
	if ($stmt->fetchColumn() > 0) {
	echo "dni valido";
	return true;    
	}
}
}

    
  
  

