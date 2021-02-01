<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Phone;
use App\PhoneDetail;
use App\Brand;
use App\Article;


use Helper;

class PhoneController extends Controller
{
    public function home(){
        $phone = Phone::all();
        $brand = Brand::all();
        // $phone = Phone::where('brand_id',$id)->paginate(5);
        // $brand = Brand::where('id', $id)->first();
        $article = Article::all();
      
        return view('pages/home', ['phone'=>$phone,'brand'=>$brand, 'article' => DB::table('article')->paginate(2)]);
    }

    public function phones($id){
       
        $phone = Phone::where('brand_id',$id)->get();         
        $brand = Brand::where('id', $id)->first(); 

        return view('pages/phones', ['brand'=>$brand,'phone'=>$phone]);
    }

    public function phoneDetail($id){
        $phone = Phone::find($id); 
        $phoneD = PhoneDetail::find($id);
     
        return view('pages/phoneDetail', ['phone'=>$phone, 'phoneD'=>$phoneD]); 
    }

    public function articleDetail($id){
        $article = Article::find($id);
     
        return view('pages/articleDetail', ['article'=>$article]); 
    }

    public function listArticle(){
        $article = Article::all();

        return view('pages/listArticle', ['article'=>$article]);
    }

    //Add Phone
    public function addPhone(){
        $phone = Phone::all(); 
        $brand = Brand::all();
        $phoneD = PhoneDetail::all();
        
        return view('pages/addPhone', ['brand'=>$brand,'phone'=>$phone,'phoneD'=>$phoneD]); 
    }

   
    public function addPhoneVal( Request $request){
        
        $this->validate($request,[
            'type_name' => 'required|min:5', 
            'brand_id' => 'required', 
            'photo' => 'required', 
        ]);

       
        Phone::create([
            'type_name' => $request->type_name, 
            'brand_id' => $request->brand_id,
            'photo' => $request->photo,
        ]);
        
        return redirect('home');  
    }

    //Add Detail Phone
    public function addDetailPhone(){
        $phone = Phone::all(); 
        $brand = Brand::all();
        $phoneD = PhoneDetail::all();
        
        return view('pages/addDetailPhone', ['brand'=>$brand,'phone'=>$phone,'phoneD'=>$phoneD]); 
    }

    
   
    public function addDetailPhoneVal( Request $request){
        
        $this->validate($request,[
            'phone_id' => 'required', 
            'color' => 'required', 
            'memory' => 'required',
            'storage' => 'required',
            'stock' => 'required',
            'price' => 'required', 
        ]);

       
        PhoneDetail::create([
            'phone_id' => $request->phone_id, 
            'color' => $request->color,
            'memory' => $request->memory,
            'storage' => $request->storage,
            'stock' => $request->stock,
            'price' => $request->price,
        ]);
        
        return redirect('home');  
    }

     //Add New Brand
     public function addNewBrand(){
        $brand = Brand::all();
        
        return view('pages/addNewBrand', ['brand'=>$brand]); 
    }

   
    public function addNewBrandVal ( Request $request){
        
        $this->validate($request,[
            'brand_name' => 'required', 
            'photo' => 'required', 
        ]);

       
        Brand::create([
            'brand_name' => $request->brand_name, 
            'photo' => $request->photo,
        ]);
        
        return redirect('home');  
    }

    //Delete Phone
    public function deletePhone($id){
        $phone = Phone::find($id); 
        $phone->delete();

        return redirect('home');

    }

    //Update Phone
    public function updatePhone($id){
        $phone = Phone::find($id); 
        $brand = Brand::find($id);

        return view('updatePhone',['phone'=>$phone,'brand'=>$brand]); 
    }

    
    public function updatePhoneVal($id, Request $request){
        $this->validate($request,[
            'type_name' => 'required|min:5', 
            'brand_id' => 'required', 
            'photo' => 'required', 
        ]);
        
        $phone = Phone::find($id);
        $phone->type_name = $request->type_name;
        $phone->brand_id = $request->brand_id;
        $phone->photo = $request->photo;
        $phone->save();
        
        return redirect('/home'); 
    }
    

    //Update Phone Detail
    public function updatePhoneDetail($id){
        $phone = Phone::find($id); 
        $brand = Brand::find($id);
        $phoneD = PhoneDetail::find($id);

        return view('updatePhoneDetail',['phone'=>$phone,'brand'=>$brand, 'phoneD'=>$phoneD]); 
    }

    
    
    public function updatePhoneDetailVal($id, Request $request){    
        $this->validate($request,[
            'phone_id' => 'required', 
            'color' => 'required', 
            'memory' => 'required',
            'storage' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);
        
        $phoneD = PhoneDetail::find($id);
        $phoneD->phone_id = $request->phone_id;
        $phoneD->color = $request->color;
        $phoneD->memory = $request->memory;
        $phoneD->storage = $request->storage;
        $phoneD->stock = $request->stock;
        $phoneD->price = $request->price;
        $phoneD->save();
        
        return redirect('/home'); 
    }

    //manage brand
    public function manageBrand(){
        $brand = Brand::all(); 

        return view('pages/manageBrand')->with('brand',$brand); 
    }

    //delete brand
    public function deleteBrand($id){
        $brand = Brand::find($id); 
        $brand->delete(); 
       
        
        return redirect('/manageBrand');

    }

    //update brand
    public function updateBrand($id){
        $brand = Brand::find($id); 
       
        return view('updateBrand', ['brand'=>$brand]); 
    }

    public function updateBrandVal($id, Request $request){
        
        $this->validate($request,[
            'brand_name' => 'required', 
            'photo' => 'required', 
        ]);

        $brand = Brand::find($id);
        $brand->brand_name = $request->brand_name;
        $brand->photo = $request->photo;
        $brand->save();
       
        
        return redirect('/manageBrand'); 
    }

    public function deleteArticle($id){
        $article = Article::find($id); 
        $article->delete(); 
       
        
        return redirect('/listArticle');

    }

     //Add New Brand
     public function addArticle(){
        $article = Article::all();
        
        return view('pages/addArticle', ['article'=>$article]); 
    }

   
    public function addArticleVal ( Request $request){
        
        $this->validate($request,[
            'title_article' => 'required', 
            'description_article' => 'required', 
            'small_desc_article' => 'required', 
            'photo' => 'required', 
        ]);

       
        Article::create([
            'title_article' => $request->title_article, 
            'description_article' => $request->description_article, 
            'small_desc_article' => $request->small_desc_article, 
            'photo' => $request->photo,
        ]);
        
        return redirect('home');  
    }

    //edit article
    public function editArticle($id){
        $article = Article::find($id); 
       
        return view('editArticle', ['article'=>$article]); 
    }

    public function editArticleVal($id, Request $request){
        
        $this->validate($request,[
            'title_article' => 'required', 
            'description_article' => 'required', 
            'small_desc_article' => 'required', 
            'photo' => 'required', 
        ]);

        $article = Article::find($id);
        $article->title_article = $request->title_article;
        $article->description_article = $request->description_article;
        $article->small_desc_article = $request->small_desc_article;
        $article->photo = $request->photo;
        $article->save();
       
        
        return redirect('/listArticle'); 
    }


}
