<?php
require ("./config.php");
if(isset($_POST['submit'])) {
	$lib  =  new library();
	$id  =  $_POST['id_barang'];
	$name  =  $_POST['nama_barang'];
	$harga =  $_POST['harga_barang'];
	$stock  =  $_POST['stock_barang'];
	$store  =  	$lib->updateBarang($id,$name,$harga,$stock);
	if($store == "success") {
		header("location:../list_barang.php");
	} else {
		echo "<h1>gagal merubah barang :(</h1>";
	}
}






?>