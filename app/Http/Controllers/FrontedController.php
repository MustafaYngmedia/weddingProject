<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetails;


use Hash;
use Auth;
class FrontedController extends Controller
{
    public function register_custom(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required | unique:users,email",
            "password"=>"required"
        ]);
        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->userType = 1;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->save();

        Auth::login($newUser);
        return redirect()->route('guest.userDetailsForm');
    }
    public function dashboard(Request $request){
        die("In Development");
    }
    public function userDetailsForm(Request $request){
        $user_id = $request->user()->id;
        $user = $request->user();
        $details = UserDetails::where('user_id', $user_id)->first();
        if ($request->isMethod('post')) {

            $user_details = UserDetails::where('user_id', $user_id)->first();
            if($user_details == null){
                UserDetails::create(array_merge(request()->all(), ['user_id' => $user_id]));
            }else{
                UserDetails::where('user_id', $user_id)->update(request()->except('_token'));
            }
            if($request->razorpay_payment_id !=""){
                UserDetails::where('user_id', $user_id)->update(['status'=>1,'isPaymentSuccess'=>1]);
                return redirect()->route('guest.dashboard');
            }else{
                return redirect()->route('guest.userDetailsForm')->with('message','Information Saved ...');
            }
            
        }
        return view('pages.userDetailForm',compact('details','user'));
    }
}
