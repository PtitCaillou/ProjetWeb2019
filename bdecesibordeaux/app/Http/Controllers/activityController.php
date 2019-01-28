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
         $datas = json_decode(file_get_contents('http://bdecesibordeaux:3000/events'), true);
         $events = [];
         foreach ($datas as $data) {
         	$event = new Event;
         	$event->id = $data['id'];
         	$event->name = $data['name'];
         	$event->description = $data['description'];
         	$event->media = $data['path'];
         	$event->type = $data['eventtype'];
         	array_push($events, $event);
         }
         	return view('activity', [
		'event'=>$events,
							
							/*, 'media'=>$img*/]);
    }

    public function add(){
    	return view('addActivity');
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
        $eventImg = Event::all()->pluck('media_id');
        $img = Media::where('id', '=', $eventImg);
	return view('activity', ['event'=>$event
								/*'media'=>$img,*/]);
}

public function description(Request $request){
	$desc=$request->description;
	dump(Event::where('id', '=', $desc)->get());
	$event=Event::where('id', '=', $desc)->get();
	return view('description', ['event'=>$event
								/*'media'=>$img,*/]);
}
public function search(Request $request){
        $research = $request->search;
        $event = Event::where('name', '=', $research)->get();
        return view('activity', ['event'=>$event]);
    
}
 public function autocomplete(Request $request)
    {
        $query = $request->get('query','');        

        $posts = Event::where('name','LIKE','%'.$query.'%')->get();
        dump($post);        

        return response()->json($posts);
    }

public function hide(Request $request){
	$id = $request->id;

	$post=Event::find($id);
	
	$post->eventStatus_id = '3';
	$post->save();

         $datas = json_decode(file_get_contents('http://bdecesibordeaux:3000/events'), true);
         $events = [];
         foreach ($datas as $data) {
         	$event = new Event;
         	$event->id = $data['id'];
         	$event->name = $data['name'];
         	$event->description = $data['description'];
         	$event->media = $data['path'];
         	$event->type = $data['eventtype'];
         	array_push($events, $event);
         }
         	return view('activity', [
		'event'=>$events,
							
							/*, 'media'=>$img*/]);
}

public function warning(){
	return view('warning');
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
    

    