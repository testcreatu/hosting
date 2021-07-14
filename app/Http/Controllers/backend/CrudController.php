<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Client;
use App\Domain;
use DB;

class CrudController extends Controller
{
    public function save($request , $tableName="")
    {

    	$data = DB::table($tableName)->insert($request);
    	return $data;
    }

    public function update($request,$tablename="",$id)
    {
        $data = DB::table($tablename)->where('uuid',$id)->update($request);
        return $data;
    }

    public function edit($tablename="",$id)
    {
        $data = DB::table($tablename)->where('uuid',$id)->get()->first();
        return $data;
    }

    public function view($tablename="")
    {
    	$data = DB::table($tablename)->get();
    	return $data;
    }

    public function delete($tablename="",$id)
    {
        $data = DB::table($tablename)->where('uuid',$id)->delete();
        return $data;
    }

    public function vieweach($tablename="",$id)
    {
        $data = DB::table($tablename)->where('uuid',$id)->get()->first();
        return $data;
    }
}
