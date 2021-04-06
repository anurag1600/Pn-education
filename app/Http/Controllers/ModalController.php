<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modal;

class ModalController extends Controller
{
    public function modal()
    {
    	return view('admin.modal');
    }

    public function modal_save(Request $s)
    {
    	//print_r($s->all());
    	$d=new Modal;

    	$d->discription=$s->discription;
    	$d->valid_to=$s->valid_to;
    	$d->valid_from=$s->valid_from;
    	$d->save();
    	if ($d) {
    		return redirect('admin/modal');
    	}
    }

     public function display()
    {   
    	$display=Modal::all();
    	return view('admin.modal',compact('display'));
    }

     public function edit($id)
    {   
       
    	$edit=Modal::find($id);
    	return view('admin.modal_edit',compact('edit'));
    }

     public function update(Request $u)
    {   
     
    	$update=Modal::find($u->id);
    	$update->discription=$u->discription;
    	$update->valid_to=$u->valid_to;
    	$update->valid_from=$u->valid_from;
    	$update->save();
    	if ($update) 
    	{
    		return redirect('admin/modal');
    	}
    }

      public function delete($id)
    {
    	$a=Modal::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/modal');
    	}
    }
}
