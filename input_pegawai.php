<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-12 mt-5">
					<div class="card shadow p-3">
						<h2 class="text-center">DATA PEGAWAI</h2>
						<div class="container-fluid">
							<form action="core/store_employee.php" class="py-5" method="post" >
								<div class="form-group row">
									<label for="" class="col-3">ID PEGAWAI</label>
									<span class="col-1">:</span>
									<input type="text" class="form-control col-8" name="id_pagawai">
								</div>
								<div class="form-group row">
									<label for="" class="col-3">NAMA PEGAWAI</label>
									<span class="col-1">:</span>
									<input type="text" class="form-control col-8" name="nama_pagawai">
								</div>
								<div class="form-group row">
									<label for="" class="col-3">ALAMAT PEGAWAI</label>
									<span class="col-1">:</span>
									<textarea name="alamat_pegawai" class="form-control col-8" id=""  rows="5"></textarea>
								</div>
								<div class="form-group row justify-content-end">
									<button class="btn btn-danger  mr-4 px-4" type="reset">Reset</button>
									<button class="btn btn-primary  px-4" type="submit" value="submit" name="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>