<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    } //End of method
    public function AdminLogin(){
        return view('admin.login');
    } //End of method

    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    } //End of method
}
