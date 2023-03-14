<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebEmployeeController extends Controller
{

    public function show_dashboard(Request $request) {
        $user = $request->user();
        return view('dashboard');
    }

    public function show_employees(Request $request) {}

    public function show_employee(Request $request) {}

    public function create_employee(Request $request) {}

    public function activate_employee(Request $request) {}

    public function update_employee(Request $request) {}
}
