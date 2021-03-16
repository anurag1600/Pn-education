<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contect;

use App\Navbar;

class ContectController extends Controller
{


    public function save(Request $s)
    {
    	//print_r($s->all());

    	$d=new Contect;
    	$d->name=$s->name;
    	$d->email=$s->email;
    	$d->phone_no=$s->phone_no;
    	$d->message=$s->message;
    	$d->save();
    	if ($d)
    	{
    		return redirect('contect');
    	}
    }

     public function display()
    {   
        
    	$display=Contect::all();
    	return view('admin.contect',compact('display'));
    }
}
