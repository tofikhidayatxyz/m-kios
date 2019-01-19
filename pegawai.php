<?php
	require("./core/config.php");
	$lib  =  new library();
	$view  =  $lib->viewALl();
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
 

	<table border="" class="table table-striped" >
		<thead class="bg-dark text-white">
			<td>No</td>
			<td>Id Pegaway</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
		</thead>
		<tbody>

		<?php
		foreach($view as $key=>$data ):
		?>
			<tr>
				<td><?= ++$key ?></td>
				<td><?= $data['id_pegawai'] ?></td>
				<td><?= $data['nama_pegawai'] ?></td>
				<td><?= $data['alamat_pegawai'] ?></td>
			</tr>
			<?php
		endforeach;
			?>
		</tbody>
	</table>
	
</body>
</html>