<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navbar;

class NavbarController extends Controller
{
    public function index()
    {
    	return view('admin.navbar');
    }

    public function save(Request $m)
    {
    	//print_r($m->all());

    	$file = $m->file('image');
    	// dd($file);
    	// exit;
    	 $filename = 'image'. time().'.'.$m->image->extension();
    	 // dd($filename);
    	 $file->move("upload/",$filename);
		
		$d=new Navbar;

    	$d->phone_no=$m->phone_no;
    	$d->email=$m->email;
    	$d->address=$m->address;
    	$d->discription=$m->discription;
    	$d->image=$filename;

    	$d->save();
    	if ($d) {
    		return redirect('admin/navbar');
    	}

    }

    public function display()
    {   
        
    	$display=Navbar::all();
    	return view('admin.navbar',compact('display'));
    }

    public function edit($id)
    {   
        
    	$edit=Navbar::find($id);
    	return view('admin.navbar_edit',compact('edit'));
    }

     public function update(Request $u)
    {   
        $file = $u->file('image');
    	// dd($file);
    	// exit;
    	 $filename = 'image'. time().'.'.$u->image->extension();
    	 // dd($filename);
    	 $file->move("upload/",$filename);
		
		$d=Navbar::find($u->id);

    	$d->phone_no=$u->phone_no;
    	$d->email=$u->email;
    	$d->address=$u->address;
    	$d->discription=$u->discription;
    	$d->image=$filename;
    	$d->save();
    	if ($d) {
    		return redirect('admin/navbar');
    	}

    }

    public function delete($id)
    {
    	$a=Navbar::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/navbar');
    	}
    }
    
    

}
