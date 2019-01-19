<?php
	require("./core/config.php");
	$lib  =  new library();
	$view  =  $lib->viewBarang();
			//$get  =  $lib->viewALl()->fetch(PDO::FETCH_ARRAY);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>pegawai</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			
			<a href="./input_barang.php" class="my-3 px-5 btn-primary btn">Tambah Barang</a>
			<table border="" class="table table-striped" >
				<thead class="bg-dark text-white">
					<td>No</td>
					<td>Id Barang</td>
					<td>Nama Barang</td>
					<td>Harga barang</td>
					<td>Stock</td>
					<td>Action</td>
				</thead>
				<tbody>
					<?php
					foreach($view as $key=>$data ):
					?>
					<tr>
						<td><?= ++$key ?></td>
						<td><?= $data['id_barang'] ?></td>
						<td><?= $data['nama_barang'] ?></td>
						<td><?= $data['harga_barang'] ?></td>
						<td><?= $data['stock'] ?></td>
						<td><a href="./edit_barang.php?id=<?=$data['id_barang']?>"  class="float-left px-2 py-2 mr-3 btn btn-warning">Edit</a>
							<a href="./core/hapus_barang.php?id=<?= $data['id_barang']?>"  class="float-left px-2 py-2 mr-3 btn btn-danger">Hapus</a></td>
					</tr>
					<?php
					endforeach;
					?>
				</tbody>
			</table>
		</div>
		
	</body>
</html>