<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\sanpham;
use App\phong;
use App\User;
use App\list_news;
class NewsController extends RightController
{
    public function index(){
        $arNews = news::orderBy('id','desc')->paginate(10);

        return view('category.index',[
                'arNews' => $arNews,
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
            ]);
    }

    public function vnindex(){
        $arNews = news::orderBy('id','desc')->paginate(10);

        return view('vn.category.index',[
                'arNews' => $arNews,
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
            ]);
    }


    public function danhmuc($slug, $id){
        $arNews = news::where('id_list','=',$id)->orderBy('id','desc')->paginate(10);

        $arNews1 = news::where('id_list','=',$id)->first();
        $id_list = $arNews1->id_list;

        $arName = list_news::where('id','=',$id_list)->first();
        $name = $arName['name'];

            return view('category.danhmuc',[
                'arNews' => $arNews,
                'namedm' => $name,
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
            ]);
    }

    public function vndanhmuc($slug, $id){
        $arNews = news::where('id_list','=',$id)->orderBy('id','desc')->paginate(10);

        $arNews1 = news::where('id_list','=',$id)->first();
        $id_list = $arNews1->id_list;

        $arName = list_news::where('id','=',$id_list)->first();
        $name = $arName['name'];

            return view('vn.category.danhmuc',[
                'arNews' => $arNews,
                'namedm' => $name,
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
            ]);
    }

    public function detail($slug, $id){
        $arNews = news::find($id);
        $id_list = $arNews->id_list;
        $parent = news::where('id_list','=',$id_list)->count();
        $arNewslienquan = news::where('id_list','=',$id_list)->where('id','!=',$id)->take(3)->get();

        $arName = list_news::where('id','=',$id_list)->first();
        $name = $arName['name'];

        $arSanPham = phong::orderBy('id','desc')->take(6)->get();
        
        return view('category.detail',[
            'arNews' => $arNews,
            'name' => $name,
            'parent' => $parent,
            'arNewslienquan' => $arNewslienquan,
            'arSanPham' => $arSanPham,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
        ]);
    }

    public function vndetail($slug, $id){
        $arNews = news::find($id);
        $id_list = $arNews->id_list;
        $parent = news::where('id_list','=',$id_list)->count();
        $arNewslienquan = news::where('id_list','=',$id_list)->where('id','!=',$id)->take(3)->get();

        $arName = list_news::where('id','=',$id_list)->first();
        $name = $arName['name'];

        $arSanPham = phong::orderBy('id','desc')->take(6)->get();
        
        return view('vn.category.detail',[
            'arNews' => $arNews,
            'name' => $name,
            'parent' => $parent,
            'arNewslienquan' => $arNewslienquan,
            'arSanPham' => $arSanPham,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
        ]);
    }
}
