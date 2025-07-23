<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PelangganModel;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPelanggan = PelangganModel::count();
        return view('pages.admin.dashboard', [
            'totalPelanggan' => $totalPelanggan,
        ]);
    }
}
