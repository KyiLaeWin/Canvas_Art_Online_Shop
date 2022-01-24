<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class MainBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
       
        $blogs=Blog::latest()->paginate(5);
        return view('Admin.mainblog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        'title' => 'required|unique:blog',
        'body' => 'required',
        'image'=>'required|image',
        
    ]);
         

         $blog=new Blog();
         $blog->title=$request->title;
         $blog->body=$request->body;
         //$body = Input::get('body');
         //$blog->body = $body;
         

         /*$imageName=date('YmdHis').".".request()->image->getClientOriginalExtension();
         request->image->move(public_path('images'),$imageName);
         $dish->image=$imageName;*/

          $imageName = date('YmdHis') . "." . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $blog->image=$imageName;
        
         $blog->save();

        return redirect('/mainblog')->with('status','New Blog is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Blog::findOrFail($id);
        return view('Admin.viewblog',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
         $blog=Blog::find($id);
        return view('Admin.edit_blog',compact('blog'));
    }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'title' => 'required|unique:blog',
        'body' => 'required',
        'image'=>'required|image',
        
    ]);
        
          $blog=Blog::find($id);

        $blog->title=$request->title;
        $blog->body=$request->body;

        if($request->image)
        {
        $imageName = date('YmdHis') . "." . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $blog->image=$imageName;
        }
         
        $blog->save();
        return redirect('/mainblog')->with('editstatus','successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);

         $blog->delete();
        return redirect('/mainblog')->with('delstatus','successfully deleted');
    }
}
