<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class loaisp extends Model
{
    protected $table = 'loaisp';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function getList(){
    	return  DB::table('loaisp as l')->
    	join('sanpham as s','l.id','=','s.id_loaisp')->
    	join('danhmuc as d','l.id','=','d.id_loaisp')->
    	select('*','d.id as did','d.name as dname')->get();


    }
}
