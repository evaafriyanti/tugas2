@extends('template.baseadmin')

@section('content')

	<section class="content-header">
	<h1>
		Info Data Produk
	</h1>
	
	<ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dasboard"></i> Master Data</a></li>
	<li class="active"> Produk </li>
	</ol>
	</section>
	<section class="content container-fluid">
	<div class="box box-info">
	<div class="box-header">
	<div class="box-title">
		Data Produk
	</div> 
	<div>
    				
	</div>
    </div>

	<div class="box-body">


<tbody>
	<div class="row">
            		<label for="" class="control-label col-md-6 col-sm-6 col-xs-12"> Id Produk</label>
            		<div class="col-md-6 col-sm-6 col-xs-12">:
                		{{$produk->id_produk}}
            		</div>
        		</div>
           		<div class="row">
            		<label for="" class="control-label col-md-6 col-sm-6 col-xs-12"> Nama Produk</label>
            		<div class="col-md-6 col-sm-6 col-xs-12">:
               			{{$produk->nama}}
           			</div>
           		</div>
           		<div class="row">
            		<label for="" class="control-label col-md-6 col-sm-6 col-xs-12"> Harga</label>
            		<div class="col-md-6 col-sm-6 col-xs-12">:
               			{{$produk->harga}}
               		</div>
       			</div>
       			<div class="row">
            		<label for="" class="control-label col-md-6 col-sm-6 col-xs-12"> Stok</label>
            		<div class="col-md-6 col-sm-6 col-xs-12">:
               			{{$produk->stok}}
               		</div>
       			</div>
            <td>
				
				</center>
			</td>
</tbody>


<a class="btn btn-success" onclick="goBack()" > <i class="fa fa-mail-reply"></i> Kembali</a>
    			<script>
    				function goBack(){
    					window.history.back();
    				}
    			</script>
    		</div>
</div>
</div>
</section>

@endsection

