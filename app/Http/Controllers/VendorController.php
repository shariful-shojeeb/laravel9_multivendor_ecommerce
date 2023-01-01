<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function AdminDashboard(){
        return view('vendor.vendor_dashboard');
    } //End of method
}
