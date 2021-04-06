<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Coupan;

class CoupanController extends Controller
{
    public function coupan()
    {
    	return view('admin.coupan');
    }

    public function coupan_save(Request $s)
    {
		$d=new Coupan;

    	$d->coupan_code=$s->coupan_code;
    	$d->amount=$s->amount;
    	$d->amount_type=$s->amount_type;
    	$d->status=$s->status;
    	$d->expiry_date=$s->expiry_date;
    	$d->save();
    	if ($d) {
    		return redirect('admin/coupan');
    	}

    }
      public function display()
    {   
    	$display=Coupan::all();
    	return view('admin.coupan',compact('display'));
    }

    public function edit($id)
    {   
    	$edit=Coupan::find($id);
    	return view('admin.coupan_edit',compact('edit'));
    }

     public function update(Request $u)
    {   
    	$update=Coupan::find($u->id);
    	$update->coupan_code=$u->coupan_code;
    	$update->amount=$u->amount;
    	$update->amount_type=$u->amount_type;
    	$update->status=$u->status;
    	$update->expiry_date=$u->expiry_date;
    	$update->save();
    	if ($update) 
    	{
    		return redirect('admin/coupan');
    	}
    }
     public function delete($id)
    {
    	$a=Coupan::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/coupan');
    	}
    }
}
