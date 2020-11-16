@extends('template.baseadmin')

@section('content')

<section class="content-header">
	<h1>
		Edit Data Produk
	</h1>


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
<form action="{{url("produk/update/$produk->id_produk")}}" method="post">
@csrf

<div class="form - group">
	<label class="control-label">Id Produk</label>
	<input class="form-control" type="text" name="id_produk" value="{{$produk->id_produk}}" required="" placeholder="Kolom harus diisi">
</div>
<div class="form-group">
	<label class="control-label">Nama Produk</label>
	<input class="form-control" type="text" name="nama" value="{{$produk->nama}}" required="" placeholder="Kolom harus diisi">
</div>
<div class="form-group">
	<label class="control-label">Harga</label>
	<input class="form-control" type="text" name="harga" value="{{$produk->harga}}" required="" placeholder="Kolom harus diisi">
</div>
<div class="form-group">
	<label class="control-label">Stok</label>
	<input class="form-control" type="text" name="stok" value="{{$produk->stok}}" required="" placeholder="Kolom harus diisi"> 
</div>
<div class="form-group">
<button class="btn btn-default" type="reset">Reset</button>
<button class="btn btn-success"> Simpan</button>

	
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</div>



@endsection