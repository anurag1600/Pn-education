<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

use App\Category;

use App\Navbar;



class CourseController extends Controller
{
    public function course()
    {
    	return view('admin.course');
    }
    public function save(Request $s)
    {
    	//print_r($s->all());
    	
    	$file = $s->file('image');
    	// dd($file);
    	// exit;
    	 $filename = 'image'. time().'.'.$s->image->extension();
    	 // dd($filename);
    	 $file->move("upload/",$filename);
		
		$d=new Course;

    	$d->course_name=$s->course_name;
    	$d->category=$s->category;
    	$d->discription=$s->discription;
    	$d->price=$s->price;
    	$d->detail=$s->detail;
    	$d->course_include=$s->course_include;
    	$d->course_content=$s->course_content;
    	$d->image=$filename;

    	$d->save();
    	if ($d) {
    		return redirect('admin/course');
    	}

    }

    public function display()
    {   
        $cate=Category::all();
    	$display=Course::all();
    	return view('admin.course',compact('display','cate'));
    }

    public function edit($id)
    {   
        $cate=Category::all();
    	$edit=Course::find($id);
    	return view('admin.course_edit',compact('edit','cate'));
    }

     public function update(Request $u)
    {   
        $file = $u->file('image');
       
         $filename = 'image'. time().'.'.$u->image->extension();
         
         $file->move("upload/",$filename);

    	$update=Course::find($u->id);
    	$update->course_name=$u->course_name;
    	$update->category=$u->category;
    	$update->discription=$u->discription;
    	$update->price=$u->price;
    	$update->detail=$u->detail;
    	$update->course_include=$u->course_include;
    	$update->course_content=$u->course_content;
    	$update->image=$filename;
    	$update->save();
    	if ($update) 
    	{
    		return redirect('admin/course');
    	}
    }

    public function delete($id)
    {
    	$a=Course::find($id);
    	$delete=$a->delete();
    	if ($delete) {
    		return redirect('admin/course');
    	}
    }

    ///frontend course controller//////

    public function course_detail($id)
    {
        $nav=Navbar::all();
        $cat=Category::all();
        $cou=Course::find($id);
        return view('front.course_detail',compact('nav','cat','cou'));
    }

    public function courses()
    {   
        $nav=Navbar::all();
        $cou=Course::all();
        $cate=Category::all();
        return view('front.course',compact('nav','cou','cate'));
    }

    public function category_course($id)
    {   
        $nav=Navbar::all();
        $cat=Category::find($id);
        $cou=Course::all();
        $cate=Category::all();
        return view('front.category_course',compact('nav','cat','cou','cate'));
    }

    
}
