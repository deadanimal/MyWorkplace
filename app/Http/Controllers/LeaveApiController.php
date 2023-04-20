<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveApiController extends Controller
{
    public function show_leaves(Request $request) {
        $user = $request->user();
        $employee = $user->employee;
        $organisation = $employee->organisation;

        $leaves = Leave::where([
            ['employee_id','=', $employee->id]
        ])->get();

        ## Logic to view...

        return response()->json([
            'data'=> $leaves
        ], 200);        
    }

    public function show_leave(Request $request) {        
        $user = $request->user();
        $employee = $user->employee;
        $organisation = $employee->organisation;        
        $id = (int) $request->route('leave_id');        
        
        $leaves = Leave::find($id);

        ## Logic to view...

        return response()->json([
            'data'=> $leaves
        ], 200);            

    }

    public function create_leave(Request $request) {
        
        $user = $request->user();
        $employee = $user->employee;
        $organisation = $employee->organisation;        

        ## Logic to create...
        
        $leaves = Leave::create([
            []
        ])->get();

        return response()->json([
            'data'=> $leaves
        ], 201);          
    }

    public function update_leave(Request $request) {}

    public function review_leaves(Request $request) {
        $user = $request->user();
        $id = (int) $request->route('leave_id');  

        ## Logic to view...

        $leaves = Leave::find($id);
    }
}
