<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index')->with('news',News::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'topic' => 'required',
            
        ]);

       
       News::create([
        'topic' => $request->topic,
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
        $news = News::find($id);
        return view('admin.news.edit')->with('news',$news);
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
            'topic' => 'required',
            'note' => 'required',
            'date' => 'required',
            'month' => 'required',
            'year' => 'required',
            'image' => 'required'
        ]);


        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('images/news_image',$image_new_name);


        $news = News::find($id);
        $news->topic = $request->topic;
        $news->note = $request->note;
        $news->date = $request->date;
        $news->month = $request->month;
        $news->year = $request->year;
        $news->image ='images/news_image/'. $image_new_name;

        $news->save();




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
        $pathToYourFile = News::find($id);

        if(file_exists($pathToYourFile->image)) 
        {       
        unlink($pathToYourFile->image);
        
        }

        $pathToYourFile->delete();
    

        Session::flash('success','DELETED SUCCESSFULLY');

        return redirect()->back();
    }
}
