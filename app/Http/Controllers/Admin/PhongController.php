<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\phong;
use App\danhmuc1;
use App\danhmuc;
use App\tienich;
use App\hangsx;
use App\danhmuchsx;
use App\thuvien;
use Image;

class PhongController extends Controller
{
    public function index(){
        $objQuangcao = new phong;
        $arItems = $objQuangcao->getList1();
        // $arItems = phong::all();
        return view('admin.phong.index',[
            'arItems' => $arItems
        ]);
    }

    public function getadd(){
        $arQCao = danhmuc1::all();
        $arQCao1 = danhmuc::all();
        $arQCao2 = hangsx::all();
        $arQCao3 = danhmuchsx::all();
        $arQCao3 = danhmuchsx::all();
        $tienich = tienich::all();
        return view('admin.phong.add',[
            'arQCao' => $arQCao,
            'arQCao1' => $arQCao1,
            'arQCao2' => $arQCao2,
            'arQCao3' => $arQCao3,
            'tienich' => $tienich,
        ]);
    }

    public function postadd(Request $request){
            // $phong = new phong;

            // $string = implode(",", Input::get('checkbox'));
            // $phong->id_tienich =  $string;

            // $mang = $phong->id_tienich;
            // $phong->save();

           
        $picName = $request->picture;

            if($request->picture != ''){
                $image = $request->file('picture');
                $filename  = time() . '.' . $image->getClientOriginalExtension();
                $path = storage_path('app/files/' . $filename);
                Image::make($image->getRealPath())->resize(772, 515)->save($path);
                $tmp = explode('/',$filename);
                $picName = end($tmp);
            }
            $name = $request->name;
            $name_vn = $request->name_vn;
            $chitiet = $request->chitiet;
            $chitiet_vn = $request->chitiet_vn;
            $thoihan = $request->thoihan;
            $rong = $request->dientich;
            $phongtam = $request->phongtam;
            $giuong = $request->giuong;
            $gia = $request->gia;
            $huong = $request->huong;
            $huong_vn = $request->huong_vn;
            $diachi = $request->diachi;
            $id_danhmuc = $request->id_list;
            $id_danhmuc1 = $request->id_list1;
            $id_hangsx = $request->id_list3;
            $id_danhmuchsx = $request->id_list4;
            $string = implode(",", Input::get('checkbox'));
            $id_tienich =  $string;

            // echo 'Vĩ độ (latitude): ' . $diachi->results[0]->geometry->location->lat;
            // echo 'Kinh độ (longitude): ' . $diachi->results[0]->geometry->location->lng;

    	$arphong = array(
            'ten' => $name,
    		'ten_vn' => $name_vn,
            'chitiet' => $chitiet,
    		'chitiet_vn' => $chitiet_vn,
            'hinhanh' => $picName,
            'id_danhmuc' => $id_danhmuc,
            'id_danhmuc1' => $id_danhmuc1,
            'id_hangsx' => $id_hangsx,
            'id_danhmuchsx' => $id_danhmuchsx,
            'diachi' => $diachi,
            'huong' => $huong,
            'huong_vn' => $huong_vn,
            'id_tienich' => $id_tienich,
            'gia' => $gia,
            'giuong' => $giuong,
            'phongtam' => $phongtam,
            'rong' => $rong,
    		'thoihan' => $thoihan,

    	);
    	phong::insert($arphong);
    	$request->session()->flash('msg','Thêm thành công');
    	return redirect()->route('admin.phong.index');
    }

    public function getedit($id){
        $arphong = phong::find($id);
        $arQCao = danhmuc1::all();
        $arQCao1 = danhmuc::all();
        $arQCao2 = hangsx::all();
        $arQCao3 = danhmuchsx::all();
        $arQCao3 = danhmuchsx::all();
        $tienich = tienich::all();
       

        return view('admin.phong.edit',[
            'arphong' => $arphong,
            'arQCao' => $arQCao,
            'arQCao1' => $arQCao1,
            'arQCao2' => $arQCao2,
            'arQCao3' => $arQCao3,
            'tienich' => $tienich,
        ]);
    }

    public function postedit($id, Request $request){
        $arphong = phong::find($id);
        //xu ly hiinh anh
        $picNameOld = $arphong['hinhanh'];
        $picNameNew = $request->picture;
        if($picNameNew != ''){//co up hinh moi
            //up hinh moi
            $image = $request->file('picture');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = storage_path('app/files/' . $filename);
            Image::make($image->getRealPath())->resize(772, 515)->save($path);
            $tmp = explode('/',$filename);
            $picName = end($tmp);

            //xoa hinh cu
            if($picNameOld != ''){
                Storage::delete("files/{$picNameOld}");
            }
        }else{
            $picName = $picNameOld;
        }
        $arphong->ten = $request->name;
    	$arphong->ten_vn = $request->name_vn;
        $arphong->chitiet = $request->chitiet;
        $arphong->chitiet_vn = $request->chitiet_vn;
    	$arphong->hinhanh = $picName;
        $arphong->id_danhmuc = $request->id_list;
        $arphong->id_danhmuc1 = $request->id_list1;
        $arphong->id_hangsx = $request->id_list3;
        $arphong->id_danhmuchsx = $request->id_list4;
        $arphong->huong = $request->huong;
        $arphong->huong_vn = $request->huong_vn;
        $arphong->gia = $request->gia;
        $arphong->diachi = $request->diachi;
        $arphong->giuong = $request->giuong;
        $arphong->phongtam = $request->phongtam;
        $arphong->rong = $request->dientich;
    	$arphong->thoihan = $request->thoihan;
        $string = implode(",", Input::get('checkbox'));
        $arphong->id_tienich = $string;


    	$arphong->update();

    	$request->session()->flash('msg','Sửa thành công');
    	return redirect()->route('admin.phong.index');
    }

    public function del($id, Request $request){
            $arphong = phong::find($id);
            $arphong->delete();
            $picNameOld = $arphong['picture'];
            Storage::delete("files/{$picNameOld}");
            $request->session()->flash('msg','Xóa thành công');
            return redirect()->route('admin.phong.index');
      
    }

    public function chitiet($id){
        $arItem   = phong::find($id);
        return view('admin.phong.chitiet',[
            'arItem' => $arItem
        ]);
    }

     public function geteditpic($id){
        $arphong = phong::find($id);

        return view('admin.phong.addpic',[
            'arphong' => $arphong,
        ]);
    }

    public function posteditpic($id, Request $request){
        $arphong = phong::find($id);
        //xu ly hiinh anh
        if(Input::hasFile('picture')){
            foreach(Input::file('picture') as $file){
                $product_img = new thuvien();
                if(isset($file)){
                    $product_img->id_list = $id;
                    $product_img->hinhanh = time().$file->getClientOriginalName();
                    $file->move(storage_path('app/files'),time().$file->getClientOriginalName());
                    $product_img->save();
                }
            }
        }



        $request->session()->flash('msg','Sửa thành công');
        return redirect()->route('admin.phong.index');
    }

}
