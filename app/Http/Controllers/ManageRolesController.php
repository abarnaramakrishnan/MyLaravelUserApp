<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use App\Http\Requests;
class ManageRolesController extends Controller
{
    public function insert(Request $request){
        $customerId = $request->input('customerId');
        $rolename = $request->input('rolename');
        $descriptions = $request->input('description');
        $statuss = $request->input('status');
        $today= new DateTime();

     DB::insert('insert into manage_roles(id,role_name,description,status,created_date,modified_date) values (?,?,?,?,?,?);',[$customerId ,$rolename,$descriptions,$statuss,$today , $today ]);
 
     return redirect('/ManageUsers') ;
    }




    public function ShowManageRoles() {

        $idss = DB::select('select * from manage_roles ');
 
        // $idss = DB::select('select * from manage_roles where id = ?',[$id]);

        return view('ManageRoles',['idss'=>$idss]);
     }

     public function EditManageRoles($id) {
        $idss = DB::select('select * from manage_roles  where id = ?',[$id]);

        return response()->json($idss);
   
       }
       
}
