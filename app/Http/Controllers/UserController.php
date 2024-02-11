<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function addUser(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => "required",
            "email" => "required|unique:users",
            "adresse" => "required",
            "phone" => "required",
            "profil"=>"required",
            'password' => 'required',
        ]);
        if($request->hasFile("profil")){
            $destination_path = "public/images/profiles";
            $image = $request->file("profil");
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($destination_path,$image_name);
            $incomingFields["profil"] = $image_name;
        }
        $incomingFields["password"] = bcrypt($incomingFields["password"]);
        $user = User::create($incomingFields);
        Auth::login($user);
        return redirect("/home");

    }
    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => "required",
            'password' => 'required',
        ]);
        if (
            Auth::attempt([
                'name' => $incomingFields['name'],
                'password' => $incomingFields['password'],
            ])
        ) {
            $request->session()->regenerate();
            return redirect("/home");

        } else {
            return redirect("/");
        }

    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

}
