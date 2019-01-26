<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventInfo;
use App\Event;
use App\Media;

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
	if ($request->type =="Ponctuel") {
		$activity->eventType_id = '1';
	}
	else{
		$activity->eventType_id = '2';
	}
	$activity->user_id = auth()->user()->id;
	$activity->eventStatus_id = '2';
	$activity->save();
	$info = new EventInfo;
	$info->event_id = Event::max('id');
	$info->location = $request->location;
	$info->date = $request->date;
	$info->price = $request->price;
	$info->save();
	$img = new Media;
	$img->path = $request->img;
	

	$event = Event::all();
	$eventInfo = EventInfo::all();
	$eventImg = Media::all();
	return view('activity', ['event'=>$event]);

}

/*protected function validator(array $data){
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
}*/
}
    