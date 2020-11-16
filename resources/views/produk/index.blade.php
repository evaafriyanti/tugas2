@extends('template.baseadmin')

@section('content')

	<section class="content-header">

      <h1>
       <center> Master Data Produk </center>
      </h1>
      
    </section>
    <div class="x_panel">
    	@if (\Session::has('danger'))
    	<div class="alert alert-danger">
    	<b> {!! \Session::get('danger') !!}</b>
    	</div>
    	@endif

    	@if (\Session::has ('success'))
    	<div class="alert alert-info">
    	<b> {!! \Session::get('success') !!}</b>
    	</div>
    	@endif

    
    <section class="content container-fluid">
    	<div class="box box-info">
    		<div class="box-header">
    			<div class="box-title">
    			<h5> Data Produk </h5>
    			</div>
    			<div>
    				<a href="{{url('produkcreate')}}" class="btn btn-primary pull-right">
						<i class="fa fa-plus"></i> Tambah Data </a>	
				</div>
    		</div>

    	<div class="box-body">
    		<table class ="table table-striped table-bordered" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

			<thead>
			<th><center>No</center></th>
            <th><center>Aksi</center></th>
            <th><center>Id Produk</center></th>
            <th><center>Nama Produk</center></th>
            <th><center>Harga</center></th>
            <th><center>Stok</center></th>-
			</thead>
	
	<tbody>
		@foreach($list_produk as $key => $produk)
		<tr>
			<td><center>{{$key+1}}</center></td>
            <td><center>
            <a class="btn btn-info" href="{{url("$produk->id_produk")}}">
                    <i class="fa fa-info"></i></a>
                <a class="btn btn-warning" href="{{url("produk/edit/$produk->id_produk")}}">
                    <i class="fa fa-edit"></i></a>
                <a class="btn btn-danger" onclick="return confirm('Yakin Anda Ingin Menghapus Data ini?')" href="{{url("produk/delete/$produk->id_produk")}}">
                    <i class="fa fa-trash"></i></a>
                </center>
            </td>
			<td><center>P0{{$produk->id_produk}}</center></td>
            <td><center>{{$produk->nama}}</center></td>
            <td><center>{{$produk->harga}}</center></td>
            <td><center>{{$produk->stok}}</center></td>
    
				
		</tr>
		@endforeach
	</tbody>
			</table>
    	</div>
    </div>
</section>
</div>
@endsection