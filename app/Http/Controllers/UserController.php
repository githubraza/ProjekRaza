<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required|numeric',
            'password' => 'required|min:8|required_with:confirmation|same:confirmation',
            'confirmation'=>'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credential = $request->only('email', 'password');
        $user = User::where(['email'=>$request->email])->first();
        if(Auth::attempt($credential)){
            $request->session()->put('user', $user);
            if($request->remember_me==null){

            }
            else{
                setcookie('email', $request->email, time()+3600);
                setcookie('password', $request->password, time()+3600);
            }
            Auth::login($user);
            return redirect()->intended('/')->withSuccess('Login successful');
        }
        // return redirect()->intended('login')->withErrors("Login Credentials Doesn't Match");
        return back()->withErrors([
            'email' => "Email or Password Doesn't Match",
        ]);
    }

    public function addToListing(Request $request){
        // $check = Listing::where('prop_id',
        if(Auth::check()){
            $listing = new Listing();
            $listing->user_id = Auth::user()->id;
            $listing->prop_id = $request->id;
            $listing->save();
            return redirect()->back()->with('message', 'Building Added to Cart');
        }
        return redirect('/login');

    }
    public function getCart(){
        $data = Listing::where('user_id', Auth::user()->id)->get();
        // return $data;
        return view('cart',['title'=>'Cart','data'=>$data]);
    }
    public function deleteItemCart($id){
        $data = Listing::find($id);
        $data->delete();
        return redirect()->back();
    }

}
