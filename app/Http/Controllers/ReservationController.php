<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use validator;
use Calendar;
use App\boats;
use App\trips;

class ReservationController extends Controller
{
    // public function index(){
    //    $trips=trips::get();
    //    $triplist= [];
    //    foreach ($trips as $key=>$trip){
    //         $triplist[]=calendar::event(
    //             $trip->location,
    //             true,
    //             new\DateTime($trip->start_date),
    //             new\DateTime($trip->end_date.'+1 day')
    //         );

    //    }
    //    $calendar_details =calendar ::addEvents($triplist);
    //    return view('reservation.index',compact('calendar_details'));
    // }

    // public function index()
    // {
    //     $events = [];
    //     $data = trips::all();
    //     if($data->count()) {
    //         foreach ($data as $key => $value) {
    //             $events[] = Calendar::event(
    //                 $value->title,
    //                 true,
    //                 new \DateTime($value->start_date),
    //                 new \DateTime($value->end_date.' +1 day'),
    //                 null,
    //                 // Add color and link on event
	//                 [
	//                     'color' => '#f05050',
	//                     'url' => 'pass here url and any route',
	//                 ]
    //             );
    //         }
    //     }
    //     $calendar = Calendar::addEvents($events);
    //     return view('reservation.index', compact('calendar'));
    // }

    



    public function index()
    {
        $events = [];
        $data = trips::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('reservation.index', compact('calendar'));
    }
}

