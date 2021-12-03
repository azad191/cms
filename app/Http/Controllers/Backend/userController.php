<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('roles')->get();
      //  return response()->json(['result'=>$data]);

        return view('backend.modules.user.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
        $request->validate([
            'name' => ['required'],
            'email' => 'required|unique:users,email',
            'employee_id' => 'required|exists:employees,employee_id',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
            'permission' => ['required'],
        ]);
      $data =  $request->all();
      $data['role_id'] = 3;
      $data['password'] = Hash::make($request->password);
      User::create($data);
        if(isset($request->permission)){
            $userId = User::latest()->first();
            UserAccess::create([
                'election_id' => getElection()->id,
                'admin_id' => organization()->user_id,
                'user_id' =>$userId->id,
                'permission' => json_encode($request->permission),
            ]);
        }

        $notification = array(
            'message' => 'User has been successfully added!',
            'alert-type' => 'success'
        );
        return Redirect::to('user/create')->with( $notification);
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

    public function testData(){
        $data = DB::table('roles')->get();
        return response()->json(['result'=>$data]);
    }

}
