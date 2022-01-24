<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Item;

class CustomerController extends Controller
{
    public function index(){

         $blogs=Blog::orderBy('created_at', 'desc')->take(3)->get();
         $latests=Item::orderBy('created_at','desc')->take(4)->get();
         $highs=Item::orderBy('price','desc')->take(4)->get();
         $lows=Item::orderBy('price','asc')->take(4)->get();


    	return view('Customer.index',compact('blogs','latests','highs','lows'));
    }

    public function product(){

    	$items=Item::latest()->paginate(9);
        return view('Customer.product',compact('items'));
    }
    public function blog(){

    	$blogs=Blog::latest()->paginate(5);
        return view('Customer.blog',compact('blogs'));
    }
    public function about(){

    	return view('Customer.about');
    }
    public function contact(){

    	return view('Customer.contact');
    }
    public function single($id){

    	$blog=Blog::findOrFail($id);
        return view('Customer/single',compact('blog'));
        //dd($blog);
    }

}
