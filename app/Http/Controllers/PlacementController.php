<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Placement;

class PlacementController extends Controller
{
    public function placement()
    {
    	return view('admin.placement');
    }

    public function placement_save(Request $q)
    {
    	//print_r($q->all());
    	
    	$file = $q->file('image');
    
    	 $filename = 'image'. time().'.'.$q->image->extension();
    	 // dd($filename);
    	 $file->move("upload/",$filename);
		
		$d=new Placement;

    	$d->name=$q->name;
    	$d->company_name=$q->company_name;
    	$d->designation=$q->designation;
    	$d->image=$filename;

    	$d->save();
    	if ($d) {
    		return redirect('admin/placement');
    	}
    }

    public function display()
    {   
        
    	$display=Placement::all();
    	return view('admin.placement',compact('display'));
    }

    public function edit($id)
    {   
    	$edit=Placement::find($id);
    	return view('admin.placement_edit',compact('edit'));
    }

     public function update(Request $u)
    {   
        $file = $u->file('image');
       
         $filename = 'image'. time().'.'.$u->image->extension();
         
         $file->move("upload/",$filename);

    	$update=Placement::find($u->id);
    	$update->name=$u->name;
    	$update->company_name=$u->company_name;
    	$update->designation=$u->designation;
    	$update->image=$filename;
    	$update->save();
    	if ($update) 
    	{
    		return redirect('admin/placement');
    	}
    }

    public function delete($id)
    {
    	$a=Placement::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/placement');
    	}
	}
    
}
