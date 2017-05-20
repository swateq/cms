<?php

namespace Fully\Http\Controllers\Admin;

use Fully\Http\Controllers\Controller;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;

/**
 * Class DashboardController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class DashboardController extends Controller
{
    public function index()
    {
        $log = LaravelLogViewer::all();
        return view('backend/layout/dashboard', compact('chartData','log'))->with('active', 'home');
    }
}
