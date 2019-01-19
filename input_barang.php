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
						<h2 class="text-center">DATA BARANG</h2>
						<div class="container-fluid">
							<form action="./core/store_barang.php" class="py-5" method="post" >
								<div class="form-group row">
									<label for="" class="col-3">ID BARANG</label>
									<span class="col-1">:</span>
									<input  required type="text" class="form-control col-8" name="id_barang">
								</div>
								<div class="form-group row">
									<label for="" class="col-3">NAMA BARANG</label>
									<span class="col-1">:</span>
									<input  required type="text" class="form-control col-8" name="nama_barang">
								</div>
								<div class="form-group row">
									<label for="" class="col-3">HARGA BARANG</label>
									<span class="col-1">:</span>
									<input  required name="harga_barang" class="form-control col-8" type="number">
								</div>
								<div class="form-group row">
									<label for="" class="col-3">STOCK BARANG</label>
									<span class="col-1">:</span>
									<input  required name="stock_barang"  class="form-control col-8" type="number">
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