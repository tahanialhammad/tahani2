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
use App\Models\Package;
use App\Models\Service;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $packages = Package::all();
        return view('admin.service.index', compact('services', 'packages'));
    }

    public function addOrEditService(Request $request)
    {
        $id = $request->input('id');
        //    $packageId = $request->input('packageId');
        //multiple
        $packageIds = $request->input('packageIds');
        // $service->packages()->attach(request('packageIds'));

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        if (!$id) {
            // $service = Service::create([
            //     'title' => $request->input('title'),
            //     'body' => $request->input('body'),
            // ]);

            $service = Service::create($validatedData);

            // if ($packageId) {
            //  //   $service->packages()->attach($packageId);
            //     $service->packages()->attach($packageId, ['service_id' => $service->id]);
            // }
            //multiple
            if ($packageIds) {
                $service->packages()->attach(request('packageIds'));
            }
        } else {
            $service = Service::find($id);

            // Update the service 
            // $service->update([
            //     'title' => $request->input('title'),
            //     'body' => $request->input('body')
            // ]);
            $service->update($validatedData);

            if ($request->has('packageIds')) {
                $service->packages()->sync($packageIds);
            }
        }
        return back()->with('flash_message', [
            'level' => 'success',
            'message' => 'Service added successfully.'
        ]);
    }

    public function deleteService(Service $service)
    {
        //  Services::whereIn('id', $services->id)->delete();
        //   Services::find($services->id)->delete();
        $service->delete();
        return back()->with('flash_message', [
            'level' => 'success',
            'message' => 'Service deleted successfully.'
        ]);
    }

    public function servicesStore()
    {
        $services = Service::all();
        return view('user.services.index', compact('services'));
    }

    public function addPackage(Request $request)
    {
        Package::create([
            'code' => $request->input('code'),
            'info' => $request->input('info'),
        ]);
        //  return back()->with('success', 'Package added successfully.');
        return back()->with('flash_message', ['message' =>  trans('messages.package_added')]);
    }

    public function editOrDeletePackage(Request $request, Package $package)
    {
        if ($request->has('delete')) {
            $package->delete();
            return back()->with('flash_message', ['message' =>  trans('messages.package_deleted')]);
        } else {
            // Update the package with the provided data
            $package->update([
                'code' => $request->input('code'),
                'info' => $request->input('info')
            ]);
        }

        // return back()->with('success', 'Package updated successfully.');
        return back()->with('flash_message', ['message' =>  trans('messages.package_updated')]);
    }
}
