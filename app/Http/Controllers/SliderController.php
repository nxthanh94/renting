<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;

class SliderController extends RightController
{
    public function index($slug, $id){
        $arNews = slider::find($id);

    	return view('quangcao.index',[
    		'arNews' => $arNews,
    	]);
    }

    public function vnindex($slug, $id){
        $arNews = slider::find($id);

    	return view('vn.quangcao.index',[
    		'arNews' => $arNews,
    	]);
    }
}
