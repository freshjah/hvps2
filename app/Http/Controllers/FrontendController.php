<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function dashboard()
    {
        $services = Service::all();
        return view('dashboard', compact('services'));
    }

}
