<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class danhmuchsx extends Model
{
    protected $table = 'danhmuchsx';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getList(){
    	return  DB::table('danhmuchsx as d')->
    	join('hangsx as h','d.id_danhmuc','=','h.id')->
    	select('*','h.id as hid','h.tenhsx as hname','d.name as dname','d.id as did')->get();


    }
}