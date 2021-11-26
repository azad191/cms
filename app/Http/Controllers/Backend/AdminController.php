<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Election;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role_id==3){
           $data = Election::where('id', getElection()->id)->orderBy('id', 'DESC')->get();

        }else{
            $data = Election::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        }


       //   return  Election::with('userAccess')->whereHas('userAccess')->get();
        return view('backend.modules.admin.admin_dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => 'required|unique:users,email',
            'organization' => 'required|unique:admins,organization',
            'election_per_year' => ['required'],
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => ['required'],
        ]);

        $data = $request->all();
        $data['role_id'] = 2;
        $data['password'] = Hash::make($request->password);
         User::create($data);
         $userId = User::latest()->first();
         $data['user_id'] = $userId->id;

         Admin::create($data);

        $notification = array(
            'message' => 'Registration has been successfully added!',
            'alert-type' => 'success'
        );

      //   return Redirect::to('admin/login')->with( $notification);
        Session::flash('alert-class', 'alert-success');
        return back()->with('success','Registration has been successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
