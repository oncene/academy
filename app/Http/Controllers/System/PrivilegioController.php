<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//use App\User;
class PrivilegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getPrivilegio(){
        $data = DB::select(DB::RAW('select u.id,u.name,u.email,r.name as privilegio,u.deleted_at from users u left join model_has_roles mr on u.id=mr.model_id left join roles r on mr.role_id=r.id'));
        return datatables()->of($data)->toJson();
    }
    public function getRol(){
        $data = Role::orderBy('id','DESC')->get();
        return datatables()->of($data)->toJson();
    }

    public function getRolAll(){
        $data = Role::orderBy('id','DESC')->get();
        return response()->json($data);
    }



    public function getPermissionWhereRol($id){
        $data = DB::SELECT(DB::RAW('select id,name,if((select rp.role_id from  role_has_permissions rp where rp.permission_id=p.id and rp.role_id='.$id.') is not null,"selected",null) as selected from permissions p'));
        return response()->json($data);
    }

    public function getRoleWhereUser($id){
        $data = DB::SELECT(DB::RAW('select r.id,r.name,if((select mr.model_id from  model_has_roles mr where mr.role_id=r.id and mr.model_id='.$id.') is not null,"selected",null) as selected from roles r'));
        return response()->json($data);
    }

    public function permissionRolCreate(Request $request){
        if ($request->ajax()) {
            $role_id = $request->input('role');
            $role = Role::find($role_id);
            $data = json_decode($request->input('permissions'));

            $role->syncPermissions($data);

            if ($data) {
                return response()->json(['success' => 'true']);
            }else {
                return response()->json(['success' => 'false']);
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function rolCreate(Request $request)
    {
        if ($request->ajax()) {
            $this->validate($request, ['name' => 'required|unique:roles'],['name.required' =>'El nombre del rol es obligatorio','name.unique'=>'El rol ya se encuentra en uso']);
            $role = $request->input('name');
            $data = Role::create(['name' => $role]);
            if ($data) {
                return response()->json(['success' => 'true']);
            }else {
                return response()->json(['success' => 'false']);
            }
        }else{
            return 'no autorizado';
        }
    }

    public function deleteRol($id){
//        $data = Role::removeRole($id);
        $data = DB::table('roles')->where('id', '=', $id)->delete();
        if ($data) {
            return response()->json(['success' => 'true']);
        }else {
            return response()->json(['success' => 'false']);
        }
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
