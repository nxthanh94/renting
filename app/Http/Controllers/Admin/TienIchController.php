<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\phong;
use App\tienich;

class TienIchController extends Controller
{
    public function index(){
        $arItems = tienich::all();

    	return view('admin.tienich.index',[
    		'arItems' => $arItems
    	]);
    }

    public function getadd(){
        $arQCao = phong::all();
    	return view('admin.tienich.add',[
            'arQCao' => $arQCao,
        ]);
    }

    public function postadd(Request $request){
    	
        $name = $request->name;
    	$name_vn = $request->name_vn;
        $id_list = $request->id_list;

    	$arNews = array(
            'name' => $name,
    		'name_vn' => $name_vn,
            'id_phong' => $id_list
    	);
    	tienich::insert($arNews);
    	$request->session()->flash('msg','Thêm thành công');
    	return redirect()->route('admin.tienich.index');
    }

    public function getedit($id){
    	$arNews = tienich::find($id);
        $arQCao = phong::all();

    	return view('admin.tienich.edit',[
            'arNews' => $arNews,
    		'arQCao' => $arQCao,
    	]);
    }

    public function postedit($id, Request $request){
        $arNews = tienich::find($id);
        
        $arNews->name = $request->name;
    	$arNews->name_vn = $request->name_vn;
        $arNews->id_phong = $request->id_list;

    	$arNews->update();

    	$request->session()->flash('msg','Sửa thành công');
    	return redirect()->route('admin.tienich.index');
    }

    public function del($id, Request $request){
            $arNews = tienich::find($id);
            $arNews->delete();
            $request->session()->flash('msg','Xóa thành công');
            return redirect()->route('admin.tienich.index');
      
    }

}

