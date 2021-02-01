<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Request\ChangePassword;
use App\User;

class RegisterController extends Controller
{
    //direct halaman regis saat menekan navbar Register
    public function regis(){

        return view('pages/regis');
    }

    public function regis_new(Request $request){
        //validasi data untuk memproses data register
        $this->validate($request,[
            'username' => 'required|min:5', //deklarasi data tersebut wajib dan minimum value 5
            'email' => 'required|unique:user', //deklarasi data tersebut wajib dan bersifat unique (tidak boleh sama)
            'password' => 'required|min:8', //deklarasi data tersebut wajib dan minimum value 8
            'address' => 'required|min:10|max:255', //deklarasi data tersebut wajib, minimum value 10, max 255
            'gender' => 'required', //deklarasi data tersebut wajib
            'dateofbirth' => 'required', //deklarasi data tersebut wajib
            // 'role' => 'required',
        ]);
        //membuat hash pada password agar password memiliki variabel random dan bersifat rahasia
        $password = Hash::make($request->password);

        //memproses insert data apabila data tersebut sesuai dengan validasi yang ada
        DB::table('user')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $password,
            'address' => $request->address,
            'gender' => $request->gender,
            'dateofbirth' => $request->dateofbirth,
            'role' => 'user',
        ]);
        // auth()->loginUsingId($user->id);

        // $user->roles()->attach(Role::where('name', 'user')->first());
        return redirect('/login');  //kembali ke halaman login apabila register berhasil
    }

    //membuat public function untuk berpindah ke halaman change-pass
    public function changePassword(){
        return view('/pages/change-pass');
    }

    //membuat public function untuk mengupdate password berdasarkan auth
    public function updatePassword(Request $request){
        $password = auth()->user()->password;
        $user_id = auth()->user()->id;

        //melakukan pengecekan terhadap password
        if(Hash::check($request->input('password'), $password)){
            //user terdaftar dapat melakukan perubahan password
            $user = User::find($user_id);
            $user->password = Hash::make($request->input('new_password'));


            if($user->save()){
                return redirect()->back()->with('success', 'change password has been successful'); //jika password lama sesuai maka berhasil
            }else{
                return redirect()->back()->with('failed', 'change password failed'); //jika password lama tidak sesuai maka tidak berhasil
            }
        }else{
            return redirect()->back()->with('failed', 'change password failed'); //tidak seluruh password yang diminta tidak sesuai
        }
    }

}
