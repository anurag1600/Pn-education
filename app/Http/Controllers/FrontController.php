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

use App\Modal;

use App\About;

use Session;

use DB;

use Auth;



class FrontController extends Controller
{
    public function index()
    {	
    	$dis=Banner::all();
    	$cou=Course::all();
    	$cat=Category::all();
    	$nav=Navbar::all();
    	$online=Onlinelearn::all();
        $show=Modal::all();
        
    	return view('front.index',compact('dis','cou','cat','nav','online','show'));
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
        if ($d) {
            return redirect('front/login');
        }
    }

    public function login()
    {	
    	$nav=Navbar::all();

    	return view('front.login',compact('nav'));
    }

    public function login_save(Request $b)

    {
        $session_id=Session::getId();
        $data=$b->all();
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
        {
            Cart::where('session_id',$session_id)->update(['user_email'=>$data['email']]);
            return redirect("front/cart")->with('message','Login Successfully');
        }
        else
        {
            return redirect("front/login")->with('message','Login Unsuccessfully');
        }  

    	// $query= User::where('email',$b->email)->where('password',$b->password)->get()->first();
    	// print_r($query);

        // if ($query) {
        //     return redirect('checkout')->with('message','Login successfuly');
        // }
        // else{
        //     return redirect('front/login')->with('message','Login Unsuccessfuly');
        // }

    }





    //cart//////////////

    public function addtocart(Request $c)
    {

        $session_id=Session::getId();
        // print_r($session_id);
        // die;
    	$d=new Cart;
    	$d->course_id=$c->course_id;
    	$d->course_name=$c->course_name;
    	$d->price=$c->price;
    	$d->image=$c->image;
        $d->session_id=$session_id;
    	$d->save();
    	if ($d) {
    		return redirect('front/cart');
    	}
    	
    }

     public function cart()
    {	
        
        
    	$nav=Navbar::all();
        
        if (Auth::check()) 
        {
           $user_email=Auth::user()->email;
           $cart=Cart::where('user_email',$user_email)->get();
        }
        else
        {
            $session_id=Session::getId();
            $cart=Cart::where('session_id',$session_id)->get();
        
        }
    	
    	return view('front.cart',compact('nav','cart'));
    }


    public function update_quantity($id=null,$quantity=null)
    {
    
        // echo $id;
        // echo $course_quantity;
        DB::table('carts')->where('id',$id)->increment('quantity',$quantity);
        return redirect('front/cart')->with('message','Product Quantity Has Been Updated');
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

    public function about()
    {
        $nav=Navbar::all();
       
        return view('front.about',compact('nav'));
    }

    public function checkout()
    {
        $nav=Navbar::all();
        return view('front.checkout',compact('nav'));
    }

    



}
