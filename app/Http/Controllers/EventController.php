<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index')->with('event',Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
       
        Event::create([
            'name' => $request->name,
            'time' => $request->time,
            'date' => $request->date,
            'month' => $request->month,
            'year' => $request->year,
        ]);

        Session::flash('success','STORED SUCCESSFULLY');

        return redirect()->back();


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
         $event = Event::find($id);
        return view('admin.event.edit')->with('event',$event);
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
        $this->validate($request,[
            'name' => 'required',
            'note' => 'required',
            'venue' => 'required',
            'time' => 'required',
            'date' => 'required',
            'month' => 'required',
            'year' => 'required',
            'event_image' => 'required'
        ]);

        $event_image = $request->event_image;
        $image_new_name = time().$event_image->getClientOriginalName();
        $event_image->move('images/event_image',$image_new_name);


        $event = Event::find($id);
        $event->name = $request->name;
        $event->note = $request->note;
        $event->venue = $request->venue;
        $event->time = $request->time;
        $event->date = $request->date;
        $event->month = $request->month;
        $event->year = $request->year;
        $event->event_image ='images/event_image/'. $image_new_name;

        $event->save();





        Session::flash('success','UPDATED SUCCESSFULLY');

        return redirect()->back();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pathToYourFile = Event::find($id);

        if(file_exists($pathToYourFile->event_image)) 
        {       
        unlink($pathToYourFile->event_image);
        
        }

        $pathToYourFile->delete();
    

        Session::flash('success','DELETED SUCCESSFULLY');

        return redirect()->back();
    }
}
