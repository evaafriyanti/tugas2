<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{ 
	public $table = 'produk';
	protected $primaryKey = 'id_produk';
	public $incrementing = false;

}