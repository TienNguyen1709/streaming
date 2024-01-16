<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function list_video(){
        $all_vid = Video::all();
        return view ('admin.video_list', compact('all_vid'));
    }

    public function add_video(){
        return view ('admin.video_add');
    }

    public function edit_video($id){
        $edit_vid = Video::where('id',$id)->get();
        return view ('admin.video_edit', compact('edit_vid'));
    }
    public function update_video(Request $request, $id){
        $data = array();
        $data['name'] = $request->name;
        $data['image'] = $request->image;
        $data['embed'] = $request->embed;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['image'] = $new_image;
            Video::where('id',$id)->update($data);
            Session::put('message','Sửa thành công');
            return Redirect::to('/admin/list-video');
        }
        $data['image'] = '';
        Video::where('id',$id)->update($data);
        Session::put('message','Sửa thành công');
        return Redirect::to('/admin/list-video');
    }

    public function delete_video($id){
        $update_vid = Video::where('id', $id)->first();
        $update_vid->delete();
        Session::flash('message', 'Delete Successfully.');
        return redirect('/admin/list-video');
    }

    public function save_video(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['image'] = $request->image;
        $data['embed'] = $request->embed;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['image'] = $new_image;
            Video::insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('/admin/list-video');
        }
        $data['image'] = '';
        Video::insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('/admin/list-video');
    }
    public function unactive_video($id){
    	Video::where('id',$id)->update(['status'=>1]);
    	Session::put('message','Successfully');
    	return redirect('/admin/list-video');

    }
    public function active_video($id){
    	Video::where('id',$id)->update(['status'=>0]);
    	Session::put('message','Successfully');
    	return redirect('/admin/list-video');
    }

    //End admin page
    public function detail_video($id){
        $detail_video = Video::where('id',$id)->get();
        return view('detail', compact('detail_video'));
    }
}
