<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.index');
    }
    public function save(Request $a)
    {
    	
        $file = $a->file('image');
       
        $filename = 'image'. time().'.'.$a->image->extension();
         
        $file->move("upload/",$filename);
        

    	$d = new Category;
    	$d->name=$a->name;
    	$d->status=1;
        $d->image=$filename;
    	$d->save();
    	if ($d) 
    	{
    		return redirect('admin/category');
    	}
    }
    public function display()
    {
    	$display=Category::all();
    	return view('admin.category',compact('display'));


    }

    public function edit($id)
    {
    	$edit=Category::find($id);
    	return view('admin.edit',compact('edit'));
    }

    public function update(Request $u)
    {   
        $file = $u->file('image');
       
         $filename = 'image'. time().'.'.$u->image->extension();
         
         $file->move("upload/",$filename);
    	$update=Category::find($u->id);
    	$update->name=$u->name;
        $update->image=$filename;

    	$update->save();
    	if ($update) 
    	{
    		return redirect('admin/category');
    	}
    }

    public function delete($id)
    {
    	$a=Category::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/category');
    	}
    }
}
