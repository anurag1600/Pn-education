<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navbar;

use App\Ourteam;

class OurteamController extends Controller
{
    public function ourteam()
    {	
    	
    	return view('admin.ourteam');
    }

    public function ourteam_save(Request $s)
    {
    	
    	
    	$file = $s->file('image');
    
    	 $filename = 'image'. time().'.'.$s->image->extension();
    	 // dd($filename);
    	 $file->move("upload/",$filename);
		
		$d=new Ourteam;

    	$d->name=$s->name;
    	$d->discription=$s->discription;
    	$d->image=$filename;

    	$d->save();
    	if ($d) {
    		return redirect('admin/ourteam');
    	}
    }

    public function display()
    {   
        
    	$display=Ourteam::all();
    	return view('admin.ourteam',compact('display'));
    }

    public function edit($id)
    {   
    	$edit=Ourteam::find($id);
    	return view('admin.ourteam_edit',compact('edit'));
    }

     public function update(Request $u)
    {   
        $file = $u->file('image');
       
         $filename = 'image'. time().'.'.$u->image->extension();
         
         $file->move("upload/",$filename);

    	$update=Ourteam::find($u->id);
    	$update->name=$u->name;
    	$update->discription=$u->discription;
    	$update->image=$filename;
    	$update->save();
    	if ($update) 
    	{
    		return redirect('admin/ourteam');
    	}
    }

    public function delete($id)
    {
    	$a=Ourteam::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/ourteam');
    	}
	}

}




