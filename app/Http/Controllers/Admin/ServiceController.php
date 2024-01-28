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
use App\Models\Services;


class ServiceController extends Controller
{

    public function index()
    {
        $services = Services::all();
        return view('admin.service.index', compact('services'));
    }

    public function createService(Request $request)
    {
        Services::create([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);
        return back();
    }

}
