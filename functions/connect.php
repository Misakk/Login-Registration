<?php
$dbc = false;

function connectDB (){
	global $dbc ;
	 $dbc = new mysqli ("localhost", "root", "", "sayt_base");
	$dbc->query("SET NAMES 'utf-8'");
}

function closeDB () {
	global $dbc;
	$dbc->close();
}


?>