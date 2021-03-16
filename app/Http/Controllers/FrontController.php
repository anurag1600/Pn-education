<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Banner;

use App\Course;

use App\Category;

use App\Navbar;

use App\Onlinelearn;

use App\User;

use App\Cart;

use App\Ourteam;

use App\Placement;

use App\Intern;

use App\Contect;


class FrontController extends Controller
{
    public function index()
    {	
    	$dis=Banner::all();
    	$cou=Course::all();
    	$cat=Category::all();
    	$nav=Navbar::all();
    	$online=Onlinelearn::all();
    	return view('front.index',compact('dis','cou','cat','nav','online'));
    }

    public function signup()
    {	
    	$nav=Navbar::all();
    	return view('front.signup',compact('nav'));
    }

    public function signup_save(Request $m)
    {
    	$d=new User;
    	$d->name=$m->name;
    	$d->email=$m->email;
    	$d->password=Hash::make($m->password);
    	$d->save();
    }

    public function login()
    {	
    	$nav=Navbar::all();
    	return view('front.login',compact('nav'));
    }

    public function login_save(Request $z)
    {
    	$query= User::where('email',$z->email)->where('password',$z->password)->get()->first();
    	print_r($query);
    }





    //cart//////////////

    public function addtocart(Request $c)
    {
    	$d=new Cart;
    	$d->course_id=$c->course_id;
    	$d->course_name=$c->course_name;
    	$d->price=$c->price;
    	$d->image=$c->image;
    	$d->save();
    	if ($d) {
    		return redirect('front/cart');
    	}
    	
    }

     public function cart()
    {	
    	$nav=Navbar::all();
    	$cart=Cart::all();
    	return view('front.cart',compact('nav','cart'));
    }
  

  //////////our team//////

    public function our()
    {
        $nav=Navbar::all();
        $our=Ourteam::all();
        return view('front.ourteam',compact('nav','our'));
    }


  /////////placement///////

    public function place()
    {
        $nav=Navbar::all();
        $place=Placement::all();
        return view('front.placement',compact('nav','place'));
    }

  ////////intern///////

    public function internship()
    {
        $nav=Navbar::all();
        $intern=Intern::all();
        return view('front.intern',compact('nav','intern'));
    }

     public function contect()
    {
        $nav=Navbar::all();
        $cont=Contect::all();
        return view('front.contect',compact('nav','cont'));
    }


}
