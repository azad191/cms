<?php

namespace App\Http\Controllers;

use App\Models\position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.ballot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $data = $request->all();
        $data['election_id'] = $id;
        $data['user_id'] = auth()->user()->id;
        position::create($data);

        $notification = array(
            'message' => 'Position created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->to('admin/election/ballot/'.$id)->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(position $position)
    {
        //
    }
}
