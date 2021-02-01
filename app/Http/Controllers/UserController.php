<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Phone;
use App\PhoneDetail;
use App\Brand;
use App\Article;

class UserController extends Controller
{
    public function home(){
        $phone = Phone::all();
        $brand = Brand::all();
        $article = Article::all();

        return view('pages/userHome', ['phone'=>$phone,'brand'=>$brand, 'article' => DB::table('article')->paginate(2)]);
    }

    public function phones($id){

        $phone = Phone::where('brand_id',$id)->get();
        $brand = Brand::where('id', $id)->first();

        return view('pages/userPhones', ['brand'=>$brand,'phone'=>$phone]);
    }

    public function phoneDetail($id){
        $phone = Phone::find($id);
        $phoneD = PhoneDetail::find($id);


        return view('pages/userPhoneDetail', ['phone'=>$phone, 'phoneD'=>$phoneD]);
    }

    public function userListArticle(){
        $article = Article::all();

        return view('pages/userListArticle', ['article'=>$article]);
    }

    public function userArticleDetail($id){
        $article = Article::find($id);

        return view('pages/userArticleDetail', ['article'=>$article]);
    }



}
