<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class danhmuc1 extends Model
{
    protected $table = 'danhmuc1';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getList(){
    	return  DB::table('danhmuc1 as d1')->
    	join('danhmuc as d','d1.id_danhmuc','=','d.id')->
    	select('*','d.id as did','d.name as dname','d1.name as d1name','d1.id as d1id')->get();


    }
}