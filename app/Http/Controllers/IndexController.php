<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sanpham;
use App\news;
use App\hangsx;
use App\quangcao;
use App\dichvu;
use App\danhmuc;
use App\phong;

class IndexController extends RightController
{
    public function index(){
        // $arItems = news::orderBy('id','desc')->take(6)->get();
        $objQuangcao = new phong;
        $arItems = $objQuangcao->getList();


       

    	return view("index.index",[
            'arItems' => $arItems,
            // 'arPhong' => $arPhong,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
    	]);
    }

    public function vnindex(){
        // $arItems = news::orderBy('id','desc')->take(6)->get();
        $objQuangcao = new phong;
        $arItems = $objQuangcao->getList();


       

        return view("vn.index.index",[
            'arItems' => $arItems,
            // 'arPhong' => $arPhong,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
        ]);
    }


    public function timkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $longshort = $request->longshort;
        $danhmuc = $request->danhmuc;
        $danhmuc1 = $request->danhmuc1;
        $tinh = $request->tinh;
        $huyen = $request->huyen;
        $min = $request->min;
        $max = $request->max;
        $min_area = $request->min_area;
        $max_area = $request->max_area;
        $arSanpham = phong::where('id','!=',0);
        if($longshort == 2)
            $arSanpham->where('thoihan',0);
        if($longshort == 1)
            $arSanpham->where('thoihan',1);
        if($danhmuc != "0"){
            $arSanpham->where('id_danhmuc',$danhmuc);
        }
        if($danhmuc1 != "0"){
            $arSanpham->where('id_danhmuc1',$danhmuc1);
        }
        if($tinh != "0"){
            $arSanpham->where('id_hangsx',$tinh);
        }
        if($huyen != "0"){
            $arSanpham->where('id_danhmuchsx',$huyen);
        }
        if(($min != "0") && ($max != "0"))
        {
            $arSanpham->where('gia', '>=', $min)->where('gia', '<=', $max);
        }
        if(($min_area != "") && ($min_area != ""))
        {
            $arSanpham->where('rong', '>=', $min_area)->where('rong', '<=', $max_area);
        }
        if($tukhoa != "")
            $arSanpham->where('ten_vn','like',"%$tukhoa%")
        ->orWhere('chitiet_vn','like',"%$tukhoa%");

        $houses = $arSanpham->paginate(15);
       


       
        return  view('vn.phong.search',[
            'tukhoa' => $tukhoa,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'arSanpham' => $houses
        ]);

    }

    public function search(Request $request){
        $tukhoa = $request->tukhoa;
        $longshort = $request->longshort;
        $danhmuc = $request->danhmuc;
        $danhmuc1 = $request->danhmuc1;
        $tinh = $request->tinh;
        $huyen = $request->huyen;
        $min = $request->min;
        $max = $request->max;
        $min_area = $request->min_area;
        $max_area = $request->max_area;
        $arSanpham = phong::where('id','!=',0);
        if($longshort == 2)
            $arSanpham->where('thoihan',0);
        if($longshort == 1)
            $arSanpham->where('thoihan',1);
        if($danhmuc != "0"){
            $arSanpham->where('id_danhmuc',$danhmuc);
        }
        if($danhmuc1 != "0"){
            $arSanpham->where('id_danhmuc1',$danhmuc1);
        }
        if($tinh != "0"){
            $arSanpham->where('id_hangsx',$tinh);
        }
        if($huyen != "0"){
            $arSanpham->where('id_danhmuchsx',$huyen);
        }
        if(($min != "0") && ($max != "0"))
        {
            $arSanpham->where('gia', '>=', $min)->where('gia', '<=', $max);
        }
        if(($min_area != "") && ($min_area != ""))
        {
            $arSanpham->where('rong', '>=', $min_area)->where('rong', '<=', $max_area);
        }
        if($tukhoa != "")
            $arSanpham->where('ten','like',"%$tukhoa%")
        ->orWhere('chitiet','like',"%$tukhoa%");

        $houses = $arSanpham->paginate(15);
       
        return  view('phong.search',[
            'tukhoa' => $tukhoa,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'arSanpham' => $houses
        ]);

    }

    public function short(){

        $arSanPham = phong::where('thoihan','=',0)->orderBy('id','desc')->paginate(15);


            return view('index.short',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
    }

    public function vnshort(){

        $arSanPham = phong::where('thoihan','=',0)->orderBy('id','desc')->paginate(15);


            return view('vn.index.short',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
    }

    public function long(){

        $arSanPham = phong::where('thoihan','=',1)->orderBy('id','desc')->paginate(15);


            return view('index.long',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
    }

    public function vnlong(){

        $arSanPham = phong::where('thoihan','=',1)->orderBy('id','desc')->paginate(15);


            return view('vn.index.long',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
    }

    public function office(Request $request){
        if($request->ajax()){
            $arSanPham = phong::orderBy('id','desc')->paginate(15);

            return view('index.office',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
        }else{
            echo "no";
        }
    }

    public function vnoffice(Request $request){
        if($request->ajax()){
            $arSanPham = phong::orderBy('id','desc')->paginate(15);

            return view('vn.index.office',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
        }else{
            echo "no";
        }
    }


}
