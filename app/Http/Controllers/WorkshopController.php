<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workshop;

use App\Navbar;

class WorkshopController extends Controller
{
    public function workshop()
    {
    	return view('admin.workshop');
    }

    public function workshop_save(Request $s)
    {
    	$file = $s->file('image');
    	 $filename = 'image'. time().'.'.$s->image->extension();
    	 // dd($filename);
    	 $file->move("upload/",$filename);
		
		$d=new Workshop;

    	$d->workshop_title=$s->workshop_title;
    	$d->image=$filename;

    	$d->save();
    	if ($d) {
    		return redirect('admin/workshop');
    	}

    }

     public function display()
    {   
    	$display=Workshop::all();
    	return view('admin.workshop',compact('display'));
    }

     public function edit($id)
    {   
    	$edit=Workshop::find($id);
    	return view('admin.workshop_edit',compact('edit'));
    }

     public function update(Request $u)
    {   
        $file = $u->file('image');
       
         $filename = 'image'. time().'.'.$u->image->extension();
         
         $file->move("upload/",$filename);

    	$update=Workshop::find($u->id);
    	$update->workshop_title=$u->workshop_title;
    	$update->image=$filename;
    	$update->save();
    	if ($update) 
    	{
    		return redirect('admin/workshop');
    	}
    }

     public function delete($id)
    {
    	$a=Workshop::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/workshop');
    	}
    }

    public function mpct_workshop()
    {
        $nav=Navbar::all();
        $mpct=Workshop::where('workshop_title','Mpct college')->get();
        return view('front.mpct',compact('nav','mpct'));
    }

     public function rjit_workshop()
    {
        $nav=Navbar::all();
        $rjit=Workshop::where('workshop_title','Rjit college')->get();
        return view('front.rjit',compact('nav','rjit'));
    }

     public function mi_workshop()
    {
        $nav=Navbar::all();
        $mi=Workshop::where('workshop_title','Xiaomi MI Company')->get();
        return view('front.mi',compact('nav','mi'));
    }

     public function bentchair_workshop()
    {
        $nav=Navbar::all();
        $bent=Workshop::where('workshop_title','Bentchair Company')->get();
        return view('front.bentchair',compact('nav','bent'));
    }


}

