<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\hangsx;
use App\hoadon;
use App\chitiethoadon;
use App\phanhoi;
use App\User;
use App\thanhtoan;
use App\phong;
use App\danhmuc1;
use App\danhmuc;
use App\tienich;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;


class SanphamController extends RightController
{
    public function index(){
        $arItems = phong::orderBy('id','desc')->paginate(15);
        // $objQuangcao = new phong;
        // $arItems = $objQuangcao->getList();
    	return view('phong.index',[
            'arItems' => $arItems
        ]);
    }

    public function vnindex(){
        $arItems = phong::orderBy('id','desc')->paginate(15);
        // $objQuangcao = new phong;
        // $arItems = $objQuangcao->getList();
        return view('vn.phong.index',[
            'arItems' => $arItems
        ]);
    }

    public function danhmuc($slug, $id){

        $arSanPham = phong::where('thoihan','=',1)->where('id_danhmuc','=',$id)->orderBy('id','desc')->paginate(15);


        $arNews1 = phong::where('id_danhmuc','=',$id)->first();
        $id_list = $arNews1->id_danhmuc;

        $arName = danhmuc::where('id','=',$id_list)->first();
        $name = $arName['name'];


            return view('phong.danhmuc',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
                'namedm' => $name,
            ]);
    }

    public function vndanhmuc($slug, $id){

        $arSanPham = phong::where('thoihan','=',1)->where('id_danhmuc1','=',$id)->orderBy('id','desc')->paginate(15);


        $arNews1 = phong::where('id_danhmuc','=',$id)->first();
        $id_list = $arNews1->id_danhmuc;

        $arName = danhmuc::where('id','=',$id_list)->first();
        $name = $arName['name'];


            return view('vn.phong.danhmuc',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
                'namedm' => $name,
            ]);
    }

    public function long(){

        $arSanPham = phong::where('thoihan','=',1)->orderBy('id','desc')->paginate(15);


            return view('phong.long',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
    }

    public function vnlong(){

        $arSanPham = phong::where('thoihan','=',1)->orderBy('id','desc')->paginate(15);


            return view('vn.phong.long',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
    }

    public function short(){

        $arSanPham = phong::where('thoihan','=',0)->orderBy('id','desc')->paginate(15);


            return view('phong.short',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
    }

    public function vnshort(){

        $arSanPham = phong::where('thoihan','=',0)->orderBy('id','desc')->paginate(15);


            return view('vn.phong.short',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
            ]);
    }

    public function danhmuc1($slug, $id){

        $arSanPham = phong::where('thoihan','=',0)->where('id_danhmuc','=',$id)->orderBy('id','desc')->paginate(15);

        $arNews1 = phong::where('id_danhmuc','=',$id)->first();
        $id_list = $arNews1->id_danhmuc;

        $arName = danhmuc::where('id','=',$id_list)->first();
        $name = $arName['name'];


            return view('phong.danhmuc1',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
                'namedm' => $name,
            ]);
    }

    public function vndanhmuc1($slug, $id){

        $arSanPham = phong::where('thoihan','=',0)->where('id_danhmuc1','=',$id)->orderBy('id','desc')->paginate(15);

        $arNews1 = phong::where('id_danhmuc','=',$id)->first();
        $id_list = $arNews1->id_danhmuc;

        $arName = danhmuc::where('id','=',$id_list)->first();
        $name = $arName['name'];


            return view('vn.phong.danhmuc1',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                'arSanPham' => $arSanPham,
                'namedm' => $name,
            ]);
    }

    public function detail($slug, $id){
        $arNews = phong::find($id);
        $tienich = tienich::all();
        $id_hangsx = $arNews->id_danhmuc1;

        $arHangsx1 = hangsx::where('id','=',$id_hangsx)->first();
        $tenhsx = $arHangsx1['tenhsx'];

        $arDanhMuc1 = danhmuc1::where('id','=',$id_hangsx)->first();
        $MotaDM = $arDanhMuc1['mota'];
        $TenDM = $arDanhMuc1['name'];
        $ChitietDM = $arDanhMuc1['chitiet'];

        $sPhamlienquan = phong::where('id_danhmuc1','=',$id_hangsx)->where('id','!=',$id)->take(6)->get();

        
    	return view('phong.detail',[
    		'arNews' => $arNews,
            'MotaDM' => $MotaDM,
            'ChitietDM' => $ChitietDM,
            'TenDM' => $TenDM,
            'tienichDM' => $tienich,
    		'tenhsx' => $tenhsx,
    		'sPhamlienquan' => $sPhamlienquan,
    		'arCat' => $this->_arCat,
        	'arCat1' => $this->_arCat1
    	]);
    }

    public function vndetail($slug, $id){
        $arNews = phong::find($id);
        $tienich = tienich::all();
        $id_hangsx = $arNews->id_danhmuc1;

        $arHangsx1 = hangsx::where('id','=',$id_hangsx)->first();
        $tenhsx = $arHangsx1['tenhsx'];

        $arDanhMuc1 = danhmuc1::where('id_danhmuc','=',$id_hangsx)->first();
        $MotaDM = $arDanhMuc1['mota'];
        $TenDM = $arDanhMuc1['name'];
        $ChitietDM = $arDanhMuc1['chitiet'];

        $sPhamlienquan = phong::where('id_danhmuc1','=',$id_hangsx)->where('id','!=',$id)->take(6)->get();

        
        return view('vn.phong.detail',[
            'arNews' => $arNews,
            'MotaDM' => $MotaDM,
            'ChitietDM' => $ChitietDM,
            'TenDM' => $TenDM,
            'tienichDM' => $tienich,
            'tenhsx' => $tenhsx,
            'sPhamlienquan' => $sPhamlienquan,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);
    }

    public function giohang(){
        $content  = Cart::content();
        return view('sanpham.giohang',[
            'content' => $content
        ]);
    }

    public function muahang($id, Request $request){
        $arCart = sanpham::find($id);
        $hinhanh = $arCart->hinhanh;
        $img = asset("storage/app/files/{$hinhanh}");
        Cart::add([
            'id'         => $id,
            'name'       => $arCart->name,
            'price'      => $arCart->gia,
            'qty'        => 1,
            'options' => ['img' => $img]
        ]);
        return redirect()->route('public.sanpham.giohang');
    }

    public function capnhatsanpham($slug,$id, Request $request){
       if($request->ajax()){
            $id = $request->id;
            $qty = $request->qty;
            Cart::update($id,$qty);
       }
    }
    

    public function xoasanpham($slug, Request $request){
        
        Cart::remove($slug);

        return redirect()->route('public.sanpham.giohang');
    }

    public function getsetinfo(){
        return view('sanpham.setinfo',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);
    }

    public function postsetinfo(Request $request){
        $thanhtoan = $request->thanhtoan;
        if($thanhtoan == 2){
            return redirect()->route('public.sanpham.setinfo');
        }else{
            return redirect()->route('auth.dangki');
        }
       
    }

    public function thongtinthanhtoan(Request $request){
        
            $arSetinfo = array(
            'name'          => $request->name,
            'email'         => $request->email,
            'dienthoai'     => $request->phone,
            'diachi'       => $request->diachi
          
            );
            $id_contact = phanhoi::insertGetId($arSetinfo);
            $arUser = phanhoi::where('id','=',$id_contact)->first();
            $arThanhtoan = thanhtoan::all();
        


        return view('sanpham.thongtinthanhtoan',[
            'arThanhtoan' => $arThanhtoan,
            'arUser' => $arUser,
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);
    }




    public function getxacnhanthanhtoan(Request $request){
        $content  = Cart::content();
        $name = $request->hoten;
        $diachi = $request->diachi;
        $thanhtoan = $request->thanhtoan;
        $email = $request->email;
        $sodienthoai = $request->phone;
        $thongtinthem = $request->thongtinthem;
        $array = thanhtoan::where('id','=',$thanhtoan)->first();
        $tentt = $array['loaithanhtoan'];
        $idtt = $array['id'];

        
        return view('sanpham.xacnhanthanhtoan',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'name' => $name,
            'diachi' => $diachi,
            'tentt' => $tentt,
            'thongtinthem' => $thongtinthem,
            'thanhtoan' => $thanhtoan,
            'content' => $content,
            'email' => $email,
            'sodienthoai' => $sodienthoai,
            'idtt' => $idtt,
        ]);
    }

    public function postxacnhanthanhtoan(Request $request){
        $content  = Cart::content();
        $name = $request->hoten;
        $diachi = $request->diachi;
        $thanhtoan = $request->thanhtoan;
        $email = $request->email;
        $sodienthoai = $request->phone;
        $thongtinthem = $request->thongtinthem;
        $array = thanhtoan::where('id','=',$thanhtoan)->first();
        $tentt = $array['loaithanhtoan'];
        $idtt = $array['id'];

        
        return view('sanpham.xacnhanthanhtoan',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'name' => $name,
            'diachi' => $diachi,
            'tentt' => $tentt,
            'thongtinthem' => $thongtinthem,
            'thanhtoan' => $thanhtoan,
            'content' => $content,
            'email' => $email,
            'sodienthoai' => $sodienthoai,
            'idtt' => $idtt,
        ]);
    }
    
    public function getthanhcong(){
        return view('sanpham.thanhcong',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);
    }  

    public function postthanhcong(Request $request){
        $diachi = $request->diachi;
        $email = $request->email;
        $name = $request->hoten;
        $sodienthoai = $request->phone;
        $thanhtoan = $request->thanhtoan;
        $thongtinthem = $request->thongtinthem;
        $Cart = Cart::content();
        $total = Cart::subtotal(0,'','');

            $array = array(
                'id_users' => 4,
                'id_thanhtoan' => $thanhtoan,
                'tonggia' => $total,
                'diachi' => $diachi,
                'thongtinthem' => $thongtinthem,
                'email' => $email,
                'name' => $name,
                'sodienthoai' => $sodienthoai,
                'trangthai' => 0,
            );

            $hoadon = hoadon::insertGetId($array);

            //////////////////
            $count = Cart::content()->count();
            foreach ($Cart as $key => $value) {
                $id_sp = $value->id;
                $qty = $value->qty;
                $price = $value->price;
                $array = array(
                    'id_hoadon' => $hoadon,
                    'id_sp' => $id_sp,
                    'soluong' => $qty,
                );
            chitiethoadon::insertGetId($array);

            }

        Cart::destroy();
        return view('sanpham.thanhcong',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1
        ]);

    }

    public function pagination(Request $request){
        if($request->ajax()){
            $id = $request->id;
            // $arTimkiem = phong::where('id_loaisp','=',$id)->orderBy('id','desc')->paginate(6);

            return view('phong.pagination',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                // 'arTimkiem' => $arTimkiem,
            ]);
        }
         return view('phong.pagination',[
                'arCat' => $this->_arCat,
                'arCat1' => $this->_arCat1,
                // 'arTimkiem' => $arTimkiem,
            ]);

    }

    public function sanphamtimkiem1($id){
        $arTimkiem = sanpham::where('id_hangsx','=',$id)->orderBy('id','desc')->paginate(6);

        return view('sanpham.timkiem1',[
            'arCat' => $this->_arCat,
            'arCat1' => $this->_arCat1,
            'arTimkiem' => $arTimkiem,
        ]);
    }
       
}
