<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormUser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminusercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $User;
    public function __construct()
    {
        $this->User = new User();
    }
    public function index()
    {
        $users = $this->User->showuser();


        return view("admin/User/index", ["users" => $users]);
    }
    public function indexaccount()
    {
        // $user = User::all();
        return view("admin/User/account");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::all();
        return view("/logup", compact("role"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormUser $request)
    {
        $name = $request->input("name");
        $phone = $request->input("phone");
        $email = $request->input("email");
        $address = $request->input("address");
        $password = $request->input("password");
        $role = $request->input("role");

        $hinhanh = $request->file("hinhanh")->getClientOriginalName();
        $request->file("hinhanh")->storeAs("public/img", $hinhanh);
        $data = [
            "name" => $name,
            "phone" => $phone,
            "hinhanh" => $hinhanh,
            "email" => $email,
            "password" => $password,
            "address" => $address,
            "role" => $role,

        ];
        $user = User::create($data);

        $role_id = $request->role_id;
        $user->roles()->attach($role_id);
        // dd($user);
        return redirect("/login");
        // ->flash("success", "Đăng Ký Thành Công");
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
        $role = Role::all();
        $user = User::find($id);
        $userrole = $user->roles;
        return view("admin/User/edit", compact("role", "user", "userrole"));
    }

    public function editaccount(string $id)
    {
        $role = Role::all();
        $user = User::find($id);

        return view("admin/User/editaccount", compact("role", "user"));
    }


    public function updateaccount(StoreFormUser $request, string $id)
    {
        $user = User::find($id);
        $name = $request->input("name");
        $phone = $request->input("phone");
        $email = $request->input("email");
        $address = $request->input("address");
        $password = $request->input("password");

        $data = [
            "name" => $name,
            "phone" => $phone,

            "email" => $email,
            "password" => $password,
            "address" => $address,

        ];
        if ($request->file("hinhanh") !== null) {
            $hinhanh = $request->file("hinhanh")->getClientOriginalName();
            $request->file("hinhanh")->storeAs("public/img", $hinhanh);
            $data = [

                "hinhanh" => $hinhanh,


            ];
        }
        $user->update($data);

        return redirect("/account_user")->with("success", "Update Thành Công");
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $name = $request->input("name");
        $phone = $request->input("phone");
        $email = $request->input("email");
        $address = $request->input("address");
        $password = $request->input("password");

        $data = [
            "name" => $name,
            "phone" => $phone,

            "email" => $email,
            "password" => $password,
            "address" => $address,

        ];
        if ($request->file("hinhanh") !== null) {
            $hinhanh = $request->file("hinhanh")->getClientOriginalName();
            $request->file("hinhanh")->storeAs("public/img", $hinhanh);
            $data = [

                "hinhanh" => $hinhanh,


            ];
        }


        $user->update($data);
        $role_id = $request->role_id;
        $user->roles()->sync($role_id);
        return redirect("/account_user")->with("success", "Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete($id);
        return redirect("/index_user")->with("success", "Xóa Thành Công");
    }
}
