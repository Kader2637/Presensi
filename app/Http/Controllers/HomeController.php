<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return View
     */
    public function dashboard(): View
    {
        $url = "https://pkl.hummatech.com/api/entry-time";
        $response = file_get_contents($url);
        $entryTimes = json_decode($response)->result;
        $employees = Employee::query()->count();
        return view('dashboard' , compact('employees', 'entryTimes'));
    }
}
