<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Users;

class loginController extends Controller
{
	public function login(){
		return view('login');
	}
	public function loginProcess(Request $req){
		if(Auth::attempt(['username' => $req->username, 'password' => $req->password])){
			if(Auth::user()->level== 1){
				return redirect('menu')->with('success','Selamat Datang Admin');
			}else if(Auth::user()->level== 2){
				return redirect('dashboarduserxc/');
			}
		}else{
			return back()->with('login_error', "data login"); 
		}
	}
	
	public function logout(){
		Auth::logout();
		return redirect('login');
	}

}
 ?>
