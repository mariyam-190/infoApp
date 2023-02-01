<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Flight;
use App\Http\Requests\Admin\FlightFormRequest;

class FlightController extends Controller
{
    public function index()
    {   $flights = Flight::all();
        return view('admin.flight.index', compact('flights'));
    }

    public function create()
    {
        return view('admin.flight.create');
    }

    public function store(FlightFormRequest $request){
        $data = $request->validated();

        $Flights = new Flight;
        $Flights->name = $data['name'];
        $Flights->company = $data['company'];
        $Flights->res_no = $data['res_no'];
        $Flights->Gate = $data['Gate'];
        $Flights->seat_no = $data['seat_no'];
        $Flights->asc_time= $data['asc_time'];
        $Flights->takeoff_time= $data['takeoff_time'];

        $Flights->save();

        return redirect('admin/flight')->with('message', 'Flight Added Successfully');
     }

     public function edit($Flights_id)
     {
        $Flights = Flight::find($Flights_id);
         return view('admin.flight.edit',compact('Flights'));
     }

     public function update(flightFormRequest $request){
        $data = $request->validated();
        $Flights = new Flight;
        $Flights->name = $data['name'];
        $Flights->company = $data['company'];
        $Flights->res_no = $data['res_no'];
        $Flights->Gate = $data['Gate'];
        $Flights->seat_no = $data['seat_no'];
        $Flights->asc_time= $data['asc_time'];
        $Flights->takeoff_time= $data['takeoff_time'];
        $Flights->update();

        return redirect('admin/flight')->with('message', 'flight Updated Successfully');
}


public function delete($flight_id)
{
    $flights = Flight::find($flight_id);
        $flights->delete();
        return redirect('admin/flight')->with('message', 'flights Deleted Successfully');

}



}
