<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class thuvien extends Model
{
    protected $table = 'thuvien';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getList(){
    	return  DB::table('thuvien as t')->
    	join('list_thuvien as l','t.id_list','=','l.id')->
    	join('phong as p','t.id_list','=','p.id')->
    	select('*','t.id as tid','l.name as lname','p.id as pid','p.ten as ten')->get();


    }
}
