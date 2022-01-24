<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function __construct(){
        $this->middleware('auth');
    }*/
    
    public function index()
    {
         
         $items=Item::latest()->paginate(9);
        return view('Admin.main',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create_item');
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
        'name' => 'required|unique:item|max:255',
        'price' => 'required|max:255',
        'image'=>'required|image',
        
    ]);
         

         $item=new Item();
         $item->name=$request->name;
         $item->price=$request->price;
         

         /*$imageName=date('YmdHis').".".request()->image->getClientOriginalExtension();
         request->image->move(public_path('images'),$imageName);
         $dish->image=$imageName;*/

          $imageName = date('YmdHis') . "." . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $item->image=$imageName;
        
         $item->save();

        return redirect('/main')->with('status','New Item is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $item=Item::findOrFail($id);
        return view('Admin.edit_item',compact('item'));
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
        'name' => 'required|unique:item|max:255',
        'price' => 'required|max:255',
        'image'=>'required|image',
        
    ]);
          $item=Item::find($id);

        $item->name=$request->name;
        $item->price=$request->price;

        if($request->image)
        {
        $imageName = date('YmdHis') . "." . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $item->image=$imageName;
        }
         
        $item->save();
        return redirect('/main')->with('editstatus','successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Item::find($id);

         $item->delete();
        return redirect('/main')->with('delstatus','successfully deleted');
    }
}
