<?php

namespace App\Http\Controllers;

use App\Repositories\Db\InvoiceRepository;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    protected $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    public function index()
    {
        if (Auth()->user()->is_admin) {
            return $this->showAdminDashboard();
        }
        return $this->showUserDashboard();
    }

    private function showAdminDashboard()
    {
        $serviceItems = $this->retrieveServiceItems();
        $myuser = User::select('id', 'created_at')->get()->groupBy(function ($myuser) {
            return Carbon::parse($myuser->created_at)->format('M');
        });

        $months = [];
        $monthCount = [];

        foreach ($myuser as $month => $values) {
            $months[] = $month;
            $monthCount[] = count($values);
        }
        $invoices = Invoice::all();
      //  $invoices = Invoice::with('user')->get();
        $invoices = $this->invoiceRepository->getAllInvoicesWithUserName();

        // return view('admin.dashboard.index', [
        //     'serviceItems' => $this->retrieveServiceItems(),
        //     'myuser' => $myuser,
        // ]);

        return view('admin.dashboard.index', compact('serviceItems', 'myuser', 'months', 'monthCount', 'invoices'));
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
