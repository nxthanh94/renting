<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\danhmuc;

class DanhmucController extends Controller
{
    public function index(){
    	$arItems = danhmuc::all();

    	return view('admin.danhmuc.index',[
    		'arItems' => $arItems
    	]);
    }

    public function getadd(){
    	return view('admin.danhmuc.add');
    }

    public function postadd(Request $request){
        $name = $request->name;
    	$name_vn = $request->name_vn;
    	$arLoaisp	= array(
            'name' => $name,
    		'name_vn' => $name_vn
    	);

    	danhmuc::insert($arLoaisp);

    	$request->session()->flash('msg','Thêm thành công');
    	return redirect()->route('admin.danhmuc.index');
    }

    public function getedit($id){
    	$arLoaisp = danhmuc::find($id);

    	return view('admin.danhmuc.edit',[
    		'arLoaisp' => $arLoaisp
    	]);
    }

    public function postedit($id, Request $request){
    	$arLoaisp = danhmuc::find($id);

        $arLoaisp->name = $request->name;
    	$arLoaisp->name_vn = $request->name_vn;

    	$arLoaisp->update();

    	$request->session()->flash('msg','Sửa thành công');
    	return redirect()->route('admin.danhmuc.index');
    }

    public function del($id, Request $request){
    	$arLoaisp = danhmuc::find($id);
    	$arLoaisp->delete();

    	$request->session()->flash('msg','Xóa thành công');
    	return redirect()->route('admin.danhmuc.index');
    }
}
