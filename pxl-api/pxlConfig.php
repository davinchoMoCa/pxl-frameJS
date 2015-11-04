<?php
class pxlConn{
	var $host 	= 'localhost';
	var $user 	= '';
	var $pass 	= '';
	var $db 	= '';

	var $pxlSqlConnect;
	var $pxlUtf;
	var $pxlOk;

	function pxlNet(){
		$this->pxlSqlConnect 	= mysql_connect($this->host, $this->user,$this->pass);
		mysql_set_charset("UTF8", $this->pxlSqlConnect);
		$this->pxlOk			= mysql_select_db($this->db, $this->pxlSqlConnect);
		return $this->pxlOk;
	}
}

$pxlHost = new pxlConn;
$pxlHost->pxlNet();

header('Access-Control-Allow-Origin: *');
?>
