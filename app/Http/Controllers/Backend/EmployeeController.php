<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role_id == 2){
            $data =  Employee::where('user_id', auth()->user()->id)->get();
        }else{
            $data =  Employee::where('user_id', auth()->user()->id)->orWhere('election_id', getUserPermission()->election_id)->get();
        }

        return view('backend.modules.employee.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.modules.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $employeeImgeFile = $request->file('employee_image');
        $nidImageFile = $request->file('nid_image');

        $EmpFileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $employeeImgeFile->getClientOriginalExtension();
        // return $fileName;
        Image::make($employeeImgeFile)->resize(200, 150)->save('backend/uploads/employee/profile/'.$EmpFileName);
        $data['employee_image'] = $EmpFileName;
        $nidFileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $nidImageFile->getClientOriginalExtension();
        // return $fileName;
        Image::make($nidImageFile)->resize(300, 300)->save('backend/uploads/employee/nid/'.$nidFileName);
        $data['nid_image'] = $nidFileName;

        $data['user_id'] = auth()->user()->id;
        $data['election_id'] = getElection()->id;
        $data['admin_id'] = organization()->user_id;
        $data['employee_id'] = mt_rand(0, 655);
        $data['department_id'] = 4;
        $data['designation_id'] = 6;
        Employee::create($data);
        $notification = array(
            'message' => 'Employee has been successfully added!',
            'alert-type' => 'success'
        );

           return Redirect::to('employee/create')->with( $notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.modules.employee.update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
