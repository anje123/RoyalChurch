<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name','time','date','month','year'];

    public function count(){
        $events = Event::all();

 
        $id = array();
 
        foreach ($events as $event) {
            array_push($id , $event->id);
        }
         $count = count($id);
        
       return $count;
        
     }
}

