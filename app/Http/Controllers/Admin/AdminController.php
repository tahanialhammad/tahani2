<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Faq;
use App\Models\FaqSection;


class AdminController extends Controller
{

    public function faq()
    {
        $sections =  FaqSection::all();
        return view('admin.faq.index', compact('sections'));
    }
}
