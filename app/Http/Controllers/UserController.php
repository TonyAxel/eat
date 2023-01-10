<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\SmsaeroApiV2Service;
use Illuminate\Support\Facades\Auth;
use InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function SendSmsToUserFromRegistration(SmsaeroApiV2Service $sms, Request $request)
    {
        try{
            $phone = preg_replace('/[^0-9]/', '', $request->phone);
            if(strlen($phone) != 11){
                return response()->json(['errors' => 'loginNumberPhone', 'status' => 'error']);
            }
            $rand = substr(str_shuffle("0123456789"), 0, rand(4, 6));
            session([
            'sms' => $rand,
            'phone' => $phone
            ]);
            // $sms = new SmsaeroApiV2Service();
            // $sms->send([$phone], 'Kod podtverzhdenia:\n' . $rand);
            return response()->json(['status' => 'ok', $rand]);
        }
        catch(InvalidArgumentException $e)
        {
            return response()->json(['errors' => 'InvalidArgumentExeptiom', 'status' => 'error']);
        }
    }

    public function validateSmsToUserFromRegistration(Request $request){
        $sessionSMS = session('sms');
        $keySMS = $request->smsKey;
        if($sessionSMS != $keySMS){
            return response()->json(['errors' => 'SmsDoNotMatch', 'status' => 'error']);
        }
        return response()->json(['status' => 'ok']);
    }

    public function addCasstomertoDB(Request $request){
        $validator = $request->validate([
            'nameCustomer' => 'required',
            'sernameCustomer' => 'required',
            'fatherName' => 'required'
        ]);
    
        $user = User::create([
            'name_customer' => $request->nameCustomer,
            'sername' => $request->sernameCustomer,
            'father_name' => $request->fatherName,
            'phone_number' => session('phone')
        ]);
        if($user){
            Auth::login($user);
            //return response()->json(['status' => 'ok']);
            return redirect()->route('welcome');
        }
    
        return redirect(route('login'));
    }

    public function logoutCustomer(){
        Auth::logout();
        return redirect()->back();
    }
    public function cartUser(){
        $userID = Auth::id();
    }
}
