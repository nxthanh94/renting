<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\list_news;

class ListNewsController extends Controller
{
    public function index(){
    	$arItems = list_news::all();

    	return view('admin.listnews.index',[
    		'arItems' => $arItems
    	]);
    }

    public function getadd(){
    	return view('admin.listnews.add');
    }

    public function postadd(Request $request){
        $name = $request->name;
    	$name_vn = $request->name_vn;
    	$arLoaisp	= array(
            'name' => $name,
    		'name_vn' => $name_vn,
    	);

    	list_news::insert($arLoaisp);

    	$request->session()->flash('msg','Thêm thành công');
    	return redirect()->route('admin.listnews.index');
    }

    public function getedit($id){
    	$arLoaisp = list_news::find($id);

    	return view('admin.listnews.edit',[
    		'arLoaisp' => $arLoaisp
    	]);
    }

    public function postedit($id, Request $request){
    	$arLoaisp = list_news::find($id);

        $arLoaisp->name = $request->name;
    	$arLoaisp->name_vn = $request->name_vn;

    	$arLoaisp->update();

    	$request->session()->flash('msg','Sửa thành công');
    	return redirect()->route('admin.listnews.index');
    }

    public function del($id, Request $request){
    	$arLoaisp = list_news::find($id);
    	$arLoaisp->delete();

    	$request->session()->flash('msg','Xóa thành công');
    	return redirect()->route('admin.listnews.index');
    }
}
