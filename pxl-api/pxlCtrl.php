<?php
include('pxlConfig.php');

function sqlQuery($param){
	$sqlConex 	= mysql_query($param);
	return $sqlConex;
}

function sqlArry($param){
	$sqlConex 	= mysql_query($param);
	$sqlRow 	= mysql_fetch_array($sqlConex);
	return $sqlRow;
}

function sqlFilas($param){
	$sqlConex 	= mysql_query($param);
	$sqlNoFilas 	= mysql_num_rows($sqlConex);
	return $sqlNoFilas;
}

function vacio($param){
	if($param != ''){
		return true;
	}else{
		return false;
	}
}

?>
