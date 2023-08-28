<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqSection;


class FaqController extends Controller
{

    public function index()
    {
        $sections =  FaqSection::all();
        return view('admin.faq.index', compact('sections'));
    }
}
