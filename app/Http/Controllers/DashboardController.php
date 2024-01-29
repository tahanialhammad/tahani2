<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth()->user()->is_admin) {
            return $this->showAdminDashboard();
        }
        return $this->showUserDashboard();
    }

    private function showAdminDashboard()
    {
       
        return view('admin.dashboard.index', [
            'serviceItems'         => $this->retrieveServiceItems(),
        ]);
    }
    private function showUserDashboard()
    {
        return view('user.dashboard.index', []);
    }


    public function retrieveServiceItems()
    {
        $items = Service::all()->sortByDesc('created_at')->take(2);
        return $items;
    }
}