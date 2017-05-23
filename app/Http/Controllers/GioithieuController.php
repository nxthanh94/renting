<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gioithieu;

class GioithieuController extends RightController
{
    public function index(){
    	$arItems = gioithieu::all();
    	return view('aboutus.index',[
    		'arItems' => $arItems
    	]);
    }

    public function vnindex(){
        $arItems = gioithieu::all();
        return view('vn.aboutus.index',[
            'arItems' => $arItems
        ]);
    }

    public function detail($slug, $id){
        $arNews = gioithieu::find($id);

            return view('aboutus.detail',[
                'arNews' => $arNews,
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
            ]);
    }

    public function vndetail($slug, $id){
        $arNews = gioithieu::find($id);

            return view('vn.aboutus.detail',[
                'arNews' => $arNews,
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
            ]);
    }
}
