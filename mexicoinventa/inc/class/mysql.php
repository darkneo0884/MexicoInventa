<?php 
class basededatos{
	public $sql;
	private $rows;
	private $mysql;

	function __construct($host,$user,$password,$db){
		$mysqli = new mysqli($host, $user, $password, $db);
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}else{
			$this->mysql = $mysqli;
		}
	}

	function consultaSeleccion($query){
		$regs = array();
		if ($result = $this->mysql->query($query)) {
		    while ($row = $result->fetch_assoc()) {
		        $regs[] = $row;
		    }
		    $result->free();
		    return $regs;
		}else{
			return false;
		}	
	}

	function consultaActualizacion($query){
		$result = $this->mysql->query($query);
		if ($result == true) {
		    return $this->mysql->affected_rows;
		}else{
			return $this->mysql->error;
		}	
	}

	function desconectar(){
		if($this->mysql!=FALSE)
			$this->mysql->close();
	}

}
?>