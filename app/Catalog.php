<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Catalog extends Model
{
    //

 public static function insertGetId($request){
 		$name = $request['name'];
 		$detail = $request['detail'];
 		$id = DB::table('catalogs')->insertGetId(array('name'=>$name, 'detail'=>$detail));
 }
}
