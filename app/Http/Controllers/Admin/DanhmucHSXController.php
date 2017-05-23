<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hangsx;
use App\danhmuchsx;

class DanhmucHSXController extends Controller
{
    public function index(){
        $objQuangcao = new danhmuchsx;
        $arItems = $objQuangcao->getList();

    	return view('admin.danhmuchsx.index',[
    		'arItems' => $arItems
    	]);
    }

    public function getadd(){
        $arQCao = hangsx::all();
    	return view('admin.danhmuchsx.add',[
            'arQCao' => $arQCao,
        ]);
    }

    public function postadd(Request $request){
    	
    	$name = $request->name;
        $id_list = $request->id_list;

    	$arNews = array(
    		'name' => $name,
            'id_danhmuc' => $id_list
    	);
    	danhmuchsx::insert($arNews);
    	$request->session()->flash('msg','Thêm thành công');
    	return redirect()->route('admin.danhmuchsx.index');
    }

    public function getedit($id){
    	$arNews = danhmuchsx::find($id);
        $arQCao = hangsx::all();

    	return view('admin.danhmuchsx.edit',[
            'arNews' => $arNews,
    		'arQCao' => $arQCao,
    	]);
    }

    public function postedit($id, Request $request){
        $arNews = danhmuchsx::find($id);
        
    	$arNews->name = $request->name;
        $arNews->id_danhmuc = $request->id_list;

    	$arNews->update();

    	$request->session()->flash('msg','Sửa thành công');
    	return redirect()->route('admin.danhmuchsx.index');
    }

    public function del($id, Request $request){
            $arNews = danhmuchsx::find($id);
            $arNews->delete();
            $request->session()->flash('msg','Xóa thành công');
            return redirect()->route('admin.danhmuchsx.index');
      
    }

}

