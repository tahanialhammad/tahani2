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
use App\Models\Service;


class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function addOrEditService(Request $request)
    {
        $id       = $request->input('id');
        if (!$id) {
            Service::create([
                'title' => $request->input('title'),
                'body' => $request->input('body')
            ]);
        } else {
            Service::find($id)->update([
                'title' => $request->input('title'),
                'body' => $request->input('body')
            ]);
        }
        return back();
    }

    public function deleteService(Service $service)
    {
        //  Services::whereIn('id', $services->id)->delete();
        //   Services::find($services->id)->delete();
        $service->delete();
        return back();
    }
}
