<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function index(){
        $bus = Bus::all();

        return view("bus");
    }


    public function addSchedule(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
            'seatSelect' => 'required',
        ]);
        
        Bus::create([
            'name'=> $request->name,
            'mobile'=> $request->mobile,
            'from'=> $request->from,
            'to'=> $request->to,
            'date'=> $request->date,
            'seat'=> json_encode($request->seatSelect),
        ]);
        return redirect()->back()->with('success', 'Booking successfully');
    }

    public function checkSeatAvailability(Request $request){
        $date = $request->input('date');

        $bookedSeats = Bus::where('date', $date)->pluck('seat')->toArray();
        // $bookedSeats = array_merge(array_column($bookedSeats, 'seat'));
        // dd($bookedSeats);
        return response()->json(['bookedSeats' => $bookedSeats]);
    } 
}
