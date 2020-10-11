<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Products;

class UserController extends BaseController
{
    public function index()
    {
    $result = DB::select("SELECT * FROM product");
    return $result;    
    
    }
    public function tambahData()
    {
    DB::table("product")->insert(
        [
            'name'=>'Jaket',
            'price'=>'1500000',
            'rating'=>'4',
            'quantity'=>'10'
        ]
        );
    return "berhasil";
    }

    public function getDatabyid(Request $request, $id )
    {
    $result = DB::select("SELECT * FROM product where id = $id");
    return $result;
    }

    public function putData(Request $request, $id )
    {
    DB::table("product")->where('id',$id)->update(['name'=>'Celana']);
    return "berhasil diupdate";
    }

    // public function deleteData(Request $request, $id)
    // {
    // DB::table("product")->where('id',$id)->delete();
    // return "berhasil dihapus";
    // }

    public function deleteData(Request $request, $id)
    {
        $delete = Products::find($id);
        $delete->delete();
        return "berhasil dihapus"; 
    }
}
