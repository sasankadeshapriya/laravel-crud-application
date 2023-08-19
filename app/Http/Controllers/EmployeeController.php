<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $Employee;

    public function __construct(){
        $this->Employee =  new Employee();
    }

    public function saveData(Request $request){
        $request->validate([
            'emp_name'=>['required'],
            'emp_address'=>['required'],
            'emp_contact'=>['required'],
            'emp_email'=>['required'],
            'emp_dob'=>['required']
        ]);

        $this->Employee->create($request->all());
        return redirect()->back();
    }

    public function showData(){
        $response['employees'] = $this->Employee->all();
        return view('pages.employee.home')->with($response);
    }


    public function editData($emp_id){
        $response['employee'] = $this->Employee->find($emp_id);
        return view('pages.employee.edit')->with($response);
    }

    public function deleteData($emp_id){
        $Employee = $this->Employee->find($emp_id);
        $Employee->delete();
        return redirect()->back();
    }

    public function updateData(Request $request,$emp_id){
        $Employee = $this->Employee->find($emp_id);
        $Employee->update(array_merge($Employee->toArray(),$request->toArray()));
        return redirect('employee');
    }

}
