<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Package;
use App\Models\Faq;
use App\Models\FaqSection;

class SiteController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return view('site.home.welcome', compact('packages'));
    }

    public function helpcenter()
    {
        $sections =  FaqSection::all();
        $allFaqs = Faq::all();
        return view('site.helpcenter.index', compact('sections', 'allFaqs'));
    }

    public function services()
    {
        $services=[];
        return view('site.services.index', compact('services'));

    }
}