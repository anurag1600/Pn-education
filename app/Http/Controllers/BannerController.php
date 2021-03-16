<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;

class BannerController extends Controller
{

	public function banner()
	{
		return view('admin.banner');
	}

	public function save(Request $s)
	{
		//print_r($s->all());
		$file = $s->file('image');

    	 $filename = 'image'. time().'.'.$s->image->extension();
    	
    	 $file->move("upload/",$filename);

    	 $data = new Banner;

    	 $data->title=$s->title;
    	 $data->discription=$s->discription;
    	 $data->image=$filename;

    	 $data->save();
    	 if ($data) {
    	 	return redirect('admin/banner');
    	 }
	}

	public function display()
	{
		$display=Banner::all();
		return view('admin.banner',compact('display'));
	}

	public function edit($id)
	{
		$edit=Banner::find($id);
		return view('admin.banner_edit',compact('edit'));
	}

	public function update(Request $u)
	{
		$file = $u->file('image');

    	 $filename = 'image'. time().'.'.$u->image->extension();
    	
    	 $file->move("upload/",$filename);

    	 $update=Banner::find($u->id);
    	 $update->title=$u->title;
    	 $update->discription=$u->discription;
    	 $update->image=$filename;
    	 $update->save();
    	 if ($update) {
    	 	return redirect('admin/banner');
    	 }
	}

	public function delete($id)
	{
		$d=Banner::find($id);
		$delete=$d->delete();
		if ($delete) {
			return redirect('admin/banner');
		}
	}

}
