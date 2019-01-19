<?php
require ("./config.php");
if(isset($_GET['id'])){
	$lib  =  new library();
	$id  =  $_GET['id'];
	$lib->hapusBarang($id);

} 

header('location:../list_barang.php');

?>
