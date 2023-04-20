<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceApiController extends Controller
{
    public function show_attendances(Request $request) {
        $user = $request->user();

        $attendances = Attendance::where('user_id', $user->id)->get();

        ## Logic to view...

        return response()->json([
            'data'=> $attendances
        ], 200);        
    }

    public function show_attendance(Request $request) {        
        $user = $request->user();
        $id = (int) $request->route('attendance_id');        
        
        $attendance = Attendance::find($id);

        ## Logic to view...

        return response()->json([
            'data'=> $attendance
        ], 200);            

    }

    public function create_attendance(Request $request) {
        
        $user = $request->user();

        ## Logic to create...
        
        $attendance = Attendance::create([
            []
        ])->get();

        return response()->json([
            'data'=> $attendance
        ], 201);          
    }

    public function update_attendance(Request $request) {}

    public function review_attendance(Request $request) {
        $user = $request->user();
        $id = (int) $request->route('attendance_id');  

        ## Logic to view...

        $attendance = Attendance::find($id);
    }
}
