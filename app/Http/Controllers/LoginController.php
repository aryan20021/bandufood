<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Farmer;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class LoginController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function AdminloginView()
    {
        return view('AdminLoginpage');
    }

    public function loginoptionView()
    {
        return view('Login.loginoption');
    }

    public function farmerloginView()
    {
        return view('Login.farmerlogin');
    }

    // for customer registration and login
    public function customerloginView()
    {
        return view('Login.customerlogin');
    }



    public function customersignupView()
    {
        return view('Login.customersignup');
    }
    // for customer login

    public function customerLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credential = $req->only('email', 'password');

        if (Auth::guard('customer')->attempt($credential)) {
            return redirect()->route('home')->with('error', 'Login successfull');
        }
        return redirect()->route('customerloginview')->with('error', 'Login details are not valid');
    }

    //customer registration
    public function customerRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:customers',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|',
        ]);

        $customers = Customer::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hashing the password
        ]);

        if (!$customers) {
            return redirect()->route('customersignupview')->with('error', 'Registration failed, try again');
        }

        return redirect()->route('customerloginview')->with('success', 'Registration success, Please login to access the app');
    }

    public function farmersignupView()
    {
        return view('Login.farmersignup');
    }

    //farmer login

    public function farmerLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credential = $req->only('email', 'password');

        if (Auth::guard('farmer')->attempt($credential)) {
            return redirect()->route('home')->with('error', 'Login successfull');
        }
        return redirect()->route('farmerloginview')->with('error', 'Login details are not valid');
    }


    //farmer registration

    public function farmerRegistration(Request $req)
    {
        $req->validate([
            'username' => 'required|string|max:255|unique:customers',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|',
        ]);

        $farmer = Farmer::create([
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password), // Hashing the password

        ]);
        if (!$farmer) {
            return redirect()->route('farmersignupview')->with('error', 'Registration failed, try again');
        }
        return redirect()->route('farmerloginview')->with('success', 'Registration success, Please login to access the app');
    }

    //logout
    public function logout()
    {
        session()->flush();
        Auth::logout();

        return redirect()->route('Loginoptionview');
    }
}
