<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use GuzzleHttp\Client;
use Illuminate\Http\Fille;
use Illuminate\Support\Facades\Storage;


class ideaBoxController extends Controller
{
    public function ideaBox() {
        $datas = json_decode(file_get_contents('http://bdecesibordeaux:3000/ideas'), true);
        $ideas = [];
        foreach($datas as $data){
            $idea = new Event();
            $idea->id = $data['id'];
            $idea->name = $data['name'];
            $idea->description = $data['description'];
            $idea->type = $data['eventtype'];
            $idea->image = $data['path'];
            $idea->user = $data['username'];
            $idea->user = $idea->user . " " . $data['lastname'];
            array_push($ideas, $idea);
        }
        return view('ideaBox', ['idea'=>$ideas]);
    }

    public function addIdea(Request $request) {
        $client = new Client();
        $user_id = auth()->user()->id;
        
        $url = "http://bdecesibordeaux:3000/events/add";
        $body['name'] = $request->titre;
        $body['description'] = $request->description;
        $body['eventtype'] = "1";
        $body['eventstatus'] = "1";
        $body['media'] = "4";
        $body['user'] = $user_id;
        $response = $client->post($url, ['form_params'=>$body]);
        return $this->ideaBox();
    }
}
