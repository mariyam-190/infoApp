<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;


class FrontendController extends Controller
{
    public function search(Request $request){

        if($request->search){
            $searchflight = Flight::where('res_no' , 'LIKE' ,'%' .$request->search .'%')->get();
            return view('details',compact('searchflight'));
        }
        else
        {
            // $flights =Flight::all();
            return redirect()->back()->with('message', 'Empty Search');
        }


    }

    public function fdetails(){
    return view('fdetails');
}
public function map(){
    return view('map');
}
public function send(){
    return view('send');
}

public function attach(){
    return view('attached');
}
    public function viewslink( $link_slug)
    {


            $links = Link::where('slug', $link_slug)->where('status', '0')->first();
            $latest_Links = Link::where('status', '0')->orderBy('created_at','DESC')->get()->take(10);

            return view('frontend.link.viewSingleLink',compact('links','latest_Links'));

    }
}
