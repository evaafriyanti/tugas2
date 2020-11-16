@extends('template.baseadmin')

@section('content')

<section class="content-header">
	<h1>
		Tambah Data Produk
	</h1>
	
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Master data</a></li>
		<li class="active">Produk</li>
	</ol>
	</section>
	<section class="content container-fluid">
		<div class="row">
		<div class="col-md-12">
		<div class="box box-info">
		<div class="box-header">
			<div class="box-title">
				Data Produk				
			</div>
		</div>
		<div class="box-body">
		<form action="{{url('produk/store')}}" method="post">
		@csrf
			<div class="form-group">
				<label class="control-label">Id Produk</label>
				<input class="form-control" type="text" name="id_produk" required="" placeholder="Kolom harus diisi">
			</div>
			<div class="form-group">
				<label class="control-label">Nama Produk</label>
				<input class="form-control" type="text" name="nama" required="" placeholder="Kolom harus diisi">
			</div>

			<div class="form-group">
				<label class="control-label">Harga</label>
				<input class="form-control" type="text" name="harga" required="" placeholder="Kolom harus diisi">
			</div>
			<div class="form-group">
				<label class="control-label">Stok</label>
				<input class="form-control" type="text" name="stok" required="" placeholder="Kolom harus diisi">
			</div>
			
			<div class="form-group">
				<button class="btn btn-default" type="reset">Reset</button>
				<button class="btn btn-success">Simpan</button>

				
</form>

</div>
</div>
</div>
</div>
</section>
@endsection
