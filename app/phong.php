<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class phong extends Model
{
    protected $table = 'phong';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getList(){
    	return   DB::table('phong as p')
        ->join('hangsx as h','p.id_hangsx','=','h.id')
        ->where('thoihan','=',1)
        ->select('*','p.id as pid','h.id as hid','h.tenhsx as hname')
        ->paginate(15);
    }

    public function getList1(){
        return   DB::table('phong as p')
        ->join('hangsx as h','p.id_hangsx','=','h.id')
        ->join('danhmuchsx as dm','p.id_danhmuchsx','=','dm.id')
        ->join('danhmuc as dmuc','p.id_danhmuc','=','dmuc.id')
        ->join('danhmuc1 as dmuc1','p.id_danhmuc1','=','dmuc1.id')
        ->select('*','p.id as pid','h.id as hid','h.tenhsx as htenhsx','dm.name as dmname','dmuc.name as dmucname','dmuc1.name as dmuc1name')
        ->get();
    }

    public function getList2(){
        return  DB::table('phong as p')
            ->join('hangsx as h','p.id_hangsx','=','h.id')
            ->where('thoihan','=',0)
            ->select('*','p.id as pid','h.id as hid','h.tenhsx as hname')
            ->paginate(15);
    }

   

}
