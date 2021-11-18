<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\wishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class freelancerListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $data =  User::without('freelancerProfile')->get();
       // return $data;
       $data = User::with('freelancerProfile', 'skill')->whereHas('freelancerProfile', function( $query ){
            $query->whereNotNull('user_id');
        })->paginate(5);
      //  return $data;

//        foreach ($data as $i => $item){
//          $wishList =  wishList::where('user_id', auth()->user()->id)->where('freelancer_profile_id', $item->freelancerProfile->id)->get();
//        }
//        dd($wishList);



//      $dd =  User::with('freelancerProfile')->whereHas('freelancerProfile', function (  $query) {
//            $query->where('user_name');
//        })->get();
//      dd($dd);



        return view('frontend.pages.freelancer_list', compact('data'));
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
        //
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
    public function details($id){

        $data = User::with('freelancerProfile', 'skill', 'faq', 'project', 'education', 'experience')->find($id);

        return view('frontend.pages.freelancer_details', compact('data'));
    }

    public function filter(Request $request){
        $input1 = $request->all();
        $input2 = $request->freelancer_type;
        $input3 = $request->location;
    //  return  implode(' ', $request->freelancer_type);

      //  return $input2;
     // var_dump($request->freelancer_type);
    //return count($request->freelancer_type);


      $data =  User::with('freelancerProfile')->WhereHas('freelancerProfile', function( $query ) use ($request,$input2, $input3 ){
         //   return 'not impty';
            if (!empty($request->freelancer_type) and !empty($request->location) and !empty($request->english_level)) {
                $query->whereIn('freelancer_type', $request->freelancer_type)
                ->orWhereIn('location', $request->location)
                ->orWhereIn('english_level', $request->english_level);
            }elseif(!empty($request->freelancer_type) and !empty($request->location) ){
                $query->whereIn('freelancer_type', $request->freelancer_type)
                ->orWhereIn('location', $request->location);
            }elseif(!empty($request->freelancer_type) and !empty($request->english_level) ){
                $query->whereIn('freelancer_type', $request->freelancer_type)
                ->orWhereIn('english_level', $request->english_level);
            }elseif(!empty($request->location) and !empty($request->english_level) ){
                $query->whereIn('location', $request->location)
                ->orWhereIn('english_level', $request->english_level);
            }
            elseif(!empty($request->freelancer_type)){
                $query->whereIn('freelancer_type', $request->freelancer_type);
            }elseif(!empty($request->location)){
                $query->whereIn('location', $request->location);
            }else{
                $query->whereIn('english_level', $request->english_level);
            }

        })->paginate(5);
       // dd ($data);
     // return $data;
//        return  $data = User::with(['freelancerProfile','specialization'])->whereHas('freelancerProfile', function( $query ){
//            $query->whereNotNull('user_id')->orWhere('english_level', 'like', 'Basics')->orWhere('freelancer_type', 'like', 'Independent Freelancers');
//        })->orWhereHas('specialization', function($query){
//            $query->where('sp_name', 'like', 'Asset Management');
//        })->get();


        return view('frontend.pages.freelancer_list', compact('data'));
        //return redirect()->route('freelancer.list');
      //  return Redirect::route('freelancer.list')->compact('data');

    }
}
