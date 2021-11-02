<?php

class library {
	public function __construct() {
		$this->db  =   new pdo("mysql:host=localhost;dbname=db_kios","root","");
	}

	public function viewALl() {
		$sql  = "SELECT * FROM tb_pegawai";
		$query  = $this->db->query($sql);
		return $query;
	}

	/* buat barang */
	public function storeBarang($id,$name,$harga,$stock) {
		
		$sql  =  "INSERT INTO tb_barang (id_barang,nama_barang,harga_barang,stock) VALUES ('$id','$name','$harga','$stock') ";
		$query  =  $this->db->query($sql);
		if(!$query) {
			return "error";
		} else {
			return "success";
		}
	}

	public function viewBarang() {
		$sql = "SELECT * FROM tb_barang";
		$query =  $this->db->query($sql);
		return $query;
	}

	public function editBarang($id) {	
		$sql  =  "SELECT *  FROM tb_barang WHERE id_barang='$id'";
		$query  =  $this->db->query($sql);
		return $query;
	}

	public function updateBarang($id,$name,$harga,$stock) {
		
		$sql  =  "UPDATE tb_barang SET nama_barang='$name' ,  harga_barang='$harga' ,  stock ='$stock' WHERE id_barang = '$id' ";
		$query  =  $this->db->query($sql);
		if(!$query) {
			return "error";
		} else {
			return "success";
		}
	}

	public function hapusBarang($id) {
		$sql  =  "DELETE FROM tb_barang WHERE id_barang='$id' ";
		$query  = $this->db->query($sql);
		return $query;
	}
}


?>
