<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Packages;

class SiteController extends Controller
{
    public function index()
    {
        $packages = Packages::all();

        return view('site.home.welcome', compact('packages'));
    }
}