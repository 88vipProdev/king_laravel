<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function viewlogin()
    {
        return view("login");
    }

    public function login(loginRequest $request)
    {
        $credentials = $request->only("email","password");
      
        if(Auth::attempt($credentials)){
            return redirect()->route("home")->with("success","đăng nhập thành công ");

        }else{
            return redirect()->route("viewlogin")->with("error","Thông tin đăng nhập không chính xác ");
        }
    }
    public function viewRegister()
    {
        return view("register");
    }
    public function register(RegisterRequest $request)
    {
        $datalist = [
            "username" => $request->input("username"),
            "email"=> $request->input("email"),
            "password"=>Hash::make($request->input("password")),
        ];  
            
            $user = User::createUser($datalist);

            $existingUser = User::where("email", $datalist["email"])->first();
        if($existingUser)
        {
            return redirect()->route("viewlogin")->with("success","Đăng ký thành công ");
        }
        else
        {
            return redirect()->back()->withInput()->withError(["email","người dùng đã tồn tại "]);
        }

        
    }
}
