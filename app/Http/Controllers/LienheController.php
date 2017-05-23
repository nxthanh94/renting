<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phanhoi;
use Mail;

class LienheController extends Controller
{
    public function getindex(){
    	return view('contactus.index');
    }

    public function vngetindex(){
        return view('vn.contactus.index');
    }

    public function postlienhe(Request $request){
        // $data = ['hoten' => $request->name,
        //         'noidung' => $request->noidung,
               
        //         ];
        // Mail::send('lienhe.index1',$data,function($msg){
        //     $msg->from('nxthanh941@gmail.com','Xuân Thanh');
        //     $msg->to('nxthanh94@gmail.com','Thanh')->subject('Test');
        // });

    	$lienhe = new phanhoi;

    	$lienhe->name = $request->name;
    	$lienhe->email = $request->email;
    	$lienhe->dienthoai = $request->phone;
        $lienhe->noidung = $request->noidung;
    	$lienhe->diachi = $request->company;

    	$lienhe->save();

    	$request->session()->flash('msg','Thank You! Your message has been sent.');
    	return redirect()->route('public.contactus');

    }

    public function vnpostlienhe(Request $request){
        // $data = ['hoten' => $request->name,
        //         'noidung' => $request->noidung,
               
        //         ];
        // Mail::send('lienhe.index1',$data,function($msg){
        //     $msg->from('nxthanh941@gmail.com','Xuân Thanh');
        //     $msg->to('nxthanh94@gmail.com','Thanh')->subject('Test');
        // });

        $lienhe = new phanhoi;

        $lienhe->name = $request->name;
        $lienhe->email = $request->email;
        $lienhe->dienthoai = $request->phone;
        $lienhe->noidung = $request->noidung;
        $lienhe->diachi = $request->company;

        $lienhe->save();

        $request->session()->flash('msg','Tin nhắn của bạn đã được gửi. Xin cảm ơn !');
        return redirect()->route('vn.public.contactus');

    }
}
