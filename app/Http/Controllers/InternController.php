<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Intern;


class InternController extends Controller
{
    public function intern()
    {
    	return view('admin.intern');
    }

     public function intern_save(Request $q)
    {
    	//print_r($q->all());
    	
    	$file = $q->file('image');
    
    	 $filename = 'image'. time().'.'.$q->image->extension();
    	 // dd($filename);
    	 $file->move("upload/",$filename);
		
		$d=new Intern;

    	$d->name=$q->name;
    	$d->company_name=$q->company_name;
    	$d->designation=$q->designation;
    	$d->image=$filename;

    	$d->save();
    	if ($d) {
    		return redirect('admin/intern');
    	}
    }

    public function display()
    {   
        
    	$display=Intern::all();
    	return view('admin.intern',compact('display'));
    }

    public function edit($id)
    {   
    	$edit=Intern::find($id);
    	return view('admin.intern_edit',compact('edit'));
    }

     public function update(Request $u)
    {   
        $file = $u->file('image');
       
         $filename = 'image'. time().'.'.$u->image->extension();
         
         $file->move("upload/",$filename);

    	$update=Intern::find($u->id);
    	$update->name=$u->name;
    	$update->company_name=$u->company_name;
    	$update->designation=$u->designation;
    	$update->image=$filename;
    	$update->save();
    	if ($update) 
    	{
    		return redirect('admin/intern');
    	}
    }

    public function delete($id)
    {
    	$a=Intern::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/intern');
    	}
	}
}
