<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = User::paginate(10);

        return view("admin/User/index",["user"=>$user]);
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
        return view("home/logup");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $phone = $request->input("phone");
        $email = $request->input("email");
        $address = $request->input("address");
        $password = $request->input("password");


        $hinhanh = $request->file("hinhanh")->getClientOriginalName();
        $request->file("hinhanh")->storeAs("public/img",$hinhanh);
        $data = [
            "name" => $name,
            "phone" => $phone,
            "hinhanh" => $hinhanh,
            "email" => $email,
            "password" => $password,
            "address" => $address,


        ];
        User::create($data);
        return redirect("/login");


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

        $user = User::find($id);


        return view("admin/User/edit",compact("user"));
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
        $role = $request->input("role");

        $data = [
            "name" => $name,
            "phone" => $phone,

            "email" => $email,
            "password" => $password,
            "address" => $address,
            "role" => $role,

        ];
       if ($request->file("hinhanh")!==null) {
       $hinhanh = $request->file("hinhanh")->getClientOriginalName();
        $request->file("hinhanh")->storeAs("public/img",$hinhanh);
        $data = [

            "hinhanh" => $hinhanh,


        ];
       }


    $user->update($data);
    return redirect("/index_user");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete($id);
        return redirect("/index_user")->with("success","Xóa Thành Công");
    }
}
