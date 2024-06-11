<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function index() {
    $empdataz = DB::table('employees')->get();
    if ($empdataz->isEmpty()) {
        return view('home', compact('empdataz'))->with('msg', 'No Data Found');
    }
    // dd($empdataz);
    return view('home', compact('empdataz'));
}

    public function add(){
        return view('add');
    }
    public function store(Request $request)
    {
        DB::table('employees')->insert([
            'employeeName'          => $request->employeeName,
            'employeeImag'          => $request->employeeImage,
            'employeeDesignation'   => $request->employeeDesignation,
            'employeePhoneNumber'   => $request->employeePhoneNumber
        ]);

        return redirect('home')->with('msg', 'Data Saved Successfully');
    }
}
