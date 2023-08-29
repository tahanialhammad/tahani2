<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqSection;
use Illuminate\Http\Request;


class FaqController extends Controller
{

    public function index()
    {
        $sections =  FaqSection::all();
        return view('admin.faq.index', compact('sections'));
    }

    public function addOrEditSection(Request $request)
    {
        FaqSection::create([
            'name' => $request->input('name'),
            'sort_order' => $request->input('sortOrder')
        ]);
        return back();
    }
}
