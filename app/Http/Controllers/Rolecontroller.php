<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRole;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class Rolecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Role::paginate(10);
        return view("admin/role/index" ,["role"=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permisstion = Permission::where("parent_id",0)->get();
        // $permisstiont = Permission::where("parent_id",)->get();
        return view("admin/role/create", compact("permisstion") );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormRole $request)
    {
    $name = $request->input("name");
    $display_name = $request->input("display_name");
    $data = [
        "name"=> $name,
        "display_name"=> $display_name
    ];

  $role = Role::create($data);
$role->permissionrole()->attach($request->permission_id);
return redirect("/index_role")->with("success","Thêm Thành Công");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        $permisstion = Permission::where("parent_id",0)->get();
        $permissionchecket = $role->permissionrole;
        return view("admin/role/edit", compact("permisstion","role","permissionchecket") );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFormRole $request, string $id)
    {
        $role = Role::find($id);
        $name = $request->input("name");
        $display_name = $request->input("display_name");
        $data = [
            "name"=> $name,
            "display_name"=> $display_name
        ];

      $role ->update($data);
      $role->permissionrole()->sync($request->permission_id);
      return redirect("index_role")->with("success","Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete($id);
        return redirect("/index_role")->with("success","Xóa Thành Công");
    }
}
