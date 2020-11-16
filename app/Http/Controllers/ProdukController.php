<?php 
namespace App\Http\Controllers;

use App\Model\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
	public function index(){
		$data['list_produk'] = Produk::all();
		return view("produk.index", $data);
	}
	public function create(){
		return view("produk.create");
	}
	public function store(Request $req ){
		$produk = new Produk;
		$produk->id_produk = $req->id_produk;
		$produk->nama = $req->nama;
		$produk->harga = $req->harga;
		$produk->stok= $req->stok;
		$produk->save();

		return redirect ('produk')->with('success','Data Berhasil Disimpan');
		
	}
	public function show($id){
		$data['produk']= Produk::find($id);
		return view('produk.show', $data);
		 
	}
	public function edit($id){
		$data['produk']= Produk::find($id);
		return view('produk.edit', $data);
		
	}
	public function update( Request $req, $id){
		$produk = Produk::find($id);
		$produk->nama = $req->nama;
		$produk->harga = $req->harga;
		$produk->stok= $req->stok;
		$produk->save();
		return redirect ('produk')->with('success','Data Berhasil Diubah');;
		
	}
	public function delete($id){
		Produk::destroy ($id);
		return redirect('produk')->with('success','Data Berhasil Dihapus');;
	}
}
 ?>