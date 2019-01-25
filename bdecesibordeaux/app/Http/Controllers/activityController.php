<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventInfo;
use App\Event;

class activityController extends Controller
{
        public function activity() {
        return view('activity');
    }

    public function add(){
    	return view('addActivity');
    }

    public function scriptadd(){
    	return view('scriptAddActivity');
    }

public function store(Request $request){
	$activity = new Event;
	$activity->name = $request->name;
	$activity->description = $request->description;
	$activity->save();
	$info = new EventInfo;
	$info->location = $request->location;
	$info->date = $request->date;
	$info->price = $request->price;
	$info->save();
	return view('activity');
}

protected function validator(array $data){
 return Validator::make($data, [
'name' =>['required', 'string', 'max :255'],
'description' => ['required', 'string', 'max:255'],
'lieu'=> ['required', 'string', 'max:255'],
'date' => ['required', 'datetime'],
'prix' => ['integer'],
]);
}

 protected function createEvent(array $data){
 return Event::create(['name'=>$data['name'],
	'description' =>$data['description'],
]);
}
protected function createEventInfo(array $data){
EventInfo::create(['location'=>$data['lieu'],
	'date'=>$data['date'],
	'price'=>$data['prix'],
]);
}
}
    