<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Fx extends Model
{
    //
//get all records + order by fllow "name"
 public static function getAllorderByName(){
 	$data = DB::table('fxes')->orderBy('name')->get();
 	return $data;
 }
 // lẩy bản ghi theo id 
 public static function getById($id){
 	$data = DB::table('fxes')->where('idFx', '=', $id)->get();
 	return $data;
 }
 // insert bản ghi theo id
 public static function insertGetId($request){
 		$name = $request['name'];
 		$detail = $request['detail'];
 		$id = DB::table('fxes')->insertGetId(array('name'=>$name, 'detail'=>$detail));
 }
 // xóa bản ghi theo id
 public static function destroyById($id){
 	DB::table('fxes')->where('idFx', '=', $id)->delete();
	return true;

 }
}
