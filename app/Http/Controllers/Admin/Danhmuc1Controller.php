<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\danhmuc;
use App\danhmuc1;

class Danhmuc1Controller extends Controller
{
    public function index(){
        $objQuangcao = new danhmuc1;
        $arItems = $objQuangcao->getList();

    	return view('admin.danhmuc1.index',[
    		'arItems' => $arItems
    	]);
    }

    public function getadd(){
        $arQCao = danhmuc::all();
    	return view('admin.danhmuc1.add',[
            'arQCao' => $arQCao,
        ]);
    }

    public function postadd(Request $request){
    	
        $name = $request->name;
        $name_vn = $request->name_vn;
        $mota = $request->mota;
        $mota_vn = $request->mota_vn;
        $chitiet = $request->chitiet;
    	$chitiet_vn = $request->chitiet_vn;
        $id_list = $request->id_list;

    	$arNews = array(
    		'name' => $name,
            'id_danhmuc' => $id_list,
            'name_vn' => $name_vn,
            'mota' => $mota,
            'mota_vn' => $mota_vn,
            'chitiet' => $chitiet,
            'chitiet_vn' => $chitiet_vn,
    	);
    	danhmuc1::insert($arNews);
    	$request->session()->flash('msg','Thêm thành công');
    	return redirect()->route('admin.danhmuc1.index');
    }

    public function getedit($id){
    	$arNews = danhmuc1::find($id);
        $arQCao = danhmuc::all();

    	return view('admin.danhmuc1.edit',[
            'arNews' => $arNews,
    		'arQCao' => $arQCao,
    	]);
    }

    public function postedit($id, Request $request){
        $arNews = danhmuc1::find($id);
        
        $arNews->name = $request->name;
        $arNews->name_vn = $request->name_vn;
        $arNews->mota = $request->mota;
        $arNews->mota_vn = $request->mota_vn;
        $arNews->chitiet = $request->chitiet;
    	$arNews->chitiet_vn = $request->chitiet_vn;
        $arNews->id_danhmuc = $request->id_list;

    	$arNews->update();

    	$request->session()->flash('msg','Sửa thành công');
    	return redirect()->route('admin.danhmuc1.index');
    }

    public function del($id, Request $request){
            $arNews = danhmuc1::find($id);
            $arNews->delete();
            $request->session()->flash('msg','Xóa thành công');
            return redirect()->route('admin.danhmuc1.index');
      
    }

    public function chitiet($id){
        $arItem   = danhmuc1::find($id);
        return view('admin.danhmuc1.chitiet',[
            'arItem' => $arItem
        ]);
    }

}

