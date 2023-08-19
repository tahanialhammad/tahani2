<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
        /**
     * Display the Amin platform.
     */
    public function index()
    {
        return view('admin.dashboard.index', []);
    }

    public function users()
    {
        return view('users.dashboard.index', []);
    }
}