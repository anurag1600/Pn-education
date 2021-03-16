<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Onlinelearn;

class OnlinelearnController extends Controller
{
    public function index()
    {
    	return view('admin.onlinelearn');
    }

    public function save(Request $t)
    {

    	$file = $t->file('image');
    	$filename = 'image'. time().'.'.$t->image->extension();
    	$file->move("upload/",$filename);
		$d=new Onlinelearn;
    	$d->title=$t->title;
    	$d->discription=$t->discription;
    	$d->image=$filename;
    	$d->save();
    	if ($d) {
    		return redirect('admin/onlinelearn');
    	}

    }

    public function display()
    {   
        
    	$display=Onlinelearn::all();
    	return view('admin.onlinelearn',compact('display'));
    }

    public function edit($id)
    {   
        
    	$edit=Onlinelearn::find($id);
    	return view('admin.onlinelearn_edit',compact('edit'));
    }

     public function update(Request $u)
    {   
        $file = $u->file('image');
    	// dd($file);
    	// exit;
    	 $filename = 'image'. time().'.'.$u->image->extension();
    	 // dd($filename);
    	 $file->move("upload/",$filename);
		
		$d=Onlinelearn::find($u->id);

    	$d->title=$u->title;
    	$d->discription=$u->discription;
    	$d->image=$filename;
    	$d->save();
    	if ($d) {
    		return redirect('admin/onlinelearn');
    	}

    }

    public function delete($id)
    {
    	$a=Onlinelearn::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/onlinelearn');
    	}
    }
}
