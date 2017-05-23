<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\gioithieu;

class GioithieuController extends Controller
{
    public function index(){
    	$arItems = gioithieu::all();
    	return view('admin.gioithieu.index',[
    		'arItems' => $arItems
    	]);
    }

    public function getadd(){
    	return view('admin.gioithieu.add');
    }

    public function postadd(Request $request){
        $mota = $request->mota;
        $visao = $request->chitiet;
    	$name = $request->name;

    	$arGioithieu = array(
            'content' => $mota,
            'visao' => $visao,
    		'name' => $name,
    	);

    	gioithieu::insert($arGioithieu);

    	$request->session()->flash('msg','Thêm thành công');
    	return redirect()->route('admin.gioithieu.index');
    }

    public function getedit($id){
    	$arGioithieu = gioithieu::find($id);

    	return view('admin.gioithieu.edit',[
    		'arGioithieu' => $arGioithieu
    	]);
    }

    public function postedit($id, Request $request){
    	$arGioithieu = gioithieu::find($id);
        $arGioithieu->content = $request->mota;
        $arGioithieu->content_vn = $request->mota_vn;
        $arGioithieu->visao = $request->chitiet;
        $arGioithieu->visao_vn = $request->chitiet_vn;
        $arGioithieu->name = $request->name;
        $arGioithieu->name_vn = $request->name_vn;
        $arGioithieu->content1 = $request->content1;
        $arGioithieu->content1_vn = $request->content1_vn;
        $arGioithieu->content2 = $request->content2;
        $arGioithieu->content2_vn = $request->content2_vn;
        $arGioithieu->content3 = $request->content3;
        $arGioithieu->content3_vn = $request->content3_vn;
        $arGioithieu->content4 = $request->content4;
        $arGioithieu->content4_vn = $request->content4_vn;
        $arGioithieu->content5 = $request->content5;
        $arGioithieu->content5_vn = $request->content5_vn;
        $arGioithieu->content6 = $request->content6;
    	$arGioithieu->content6_vn = $request->content6_vn;

    	$arGioithieu->update();

    	$request->session()->flash('msg','Sửa thành công');
    	return redirect()->route('admin.gioithieu.edit',1);
    }

     public function del($id, Request $request){
        $arGioithieu = gioithieu::find($id);
        $arGioithieu->delete();
        $request->session()->flash('msg','Xóa thành công');
      	return redirect()->route('admin.gioithieu.index');
    }

}
