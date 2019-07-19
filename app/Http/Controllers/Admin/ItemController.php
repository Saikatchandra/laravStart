<?php

namespace App\Http\Controllers\Admin;

use App\item;
use App\category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = item::all();
        return view('admin.item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view('admin.item.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'category'     => 'required',
            'name'         => 'required',
            'description'  => 'required',
            'price'        => 'required',
            'image'        => 'required|mimes:jpeg,jpg,png'
        ]);
     
         $image = $request->file('image');
         $slug = str_slug($request->name);
         if(null!==($image)){
             $currentDate = Carbon::now()->toDateString();
             $imageName = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
         if(!file_exists('uploads/item')){
             mkdir('uploads/item',0777,true);
         }
         $image->move('uploads/item',$imageName);
         } else {
             $imageName = 'default.png';
         }
 
         $item = new item();
         $item->category_id = $request->category;
         $item->name        = $request->name;
         $item->description = $request->description;
         $item->price       = $request->price;
         $item->image       = $imageName;
         $item->save();
         return redirect()->route('item.index')->with('successMsg','item Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = item::find($id);
        $categories = category::all();
        return view('admin.item.edit',compact('item','categories'));
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
        $this->validate($request,[
            'category'     => 'required',
            'name'         => 'required',
            'description'  => 'required',
            'price'        => 'required',
            'image'        => 'mimes:jpeg,jpg,png'
        ]);
     
        $item = item::find($id);
         $image = $request->file('image');
         $slug = str_slug($request->name);
         if(null!==($image)){
             $currentDate = Carbon::now()->toDateString();
             $imageName = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
         if(!file_exists('uploads/item')){
             mkdir('uploads/item',0777,true);
         }
         unlink('uploads/item/'.$item->image);
         $image->move('uploads/item',$imageName);
         } else {
             $imageName = $item->image;
         }
 
      
         $item->category_id = $request->category;
         $item->name        = $request->name;
         $item->description = $request->description;
         $item->price       = $request->price;
         $item->image       = $imageName;
         $item->save();
         return redirect()->route('item.index')->with('successMsg','item Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = item::find($id);
         if(file_exists('uploads/item/'.$item->image)){
            unlink('uploads/item/'.$item->image);
         }
        $item->delete();
        return redirect()->back()->with('successMsg','Item Deleted Successfully');
    }
}
