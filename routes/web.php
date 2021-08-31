<?php
use App\Event;
use App\Gallery;
use App\Category;
use Carbon\Carbon;
use App\CurrentAffair;
use App\Publication;

Route::get('/', function () {
    $current_affairs = CurrentAffair::all();
    return view('welcome',['current_affairs'=> $current_affairs, 'title'=> 'Welcome']);
});

Route::get('/about', function(){
    return view('about',['title'=> 'About']);
})->name('about');

Route::get('/admission', function(){
    return view('admission');
})->name('admission', ['title'=> 'Admission']);

Route::get('/chapel', function(){
    return view('chapel', ['title'=> 'Chapel']);
})->name('chapel');

Route::get('/events', function(){
    $host = Request::server('SERVER_NAME');
    // return response()->json(Request::server('SERVER_NAME'));
    $archival_events = Event::where('state', 'archival')->get();
    $upcoming_events = Event::where('state', 'upcoming')->get();

    // return response()->json(Carbon::parse($archival_events[0]->date)->diffforHumans());

    // return response()->json(Carbon::parse($archival_events[0]->date)->format('F'));
    // return response()->json(Carbon::parse($archival_events[0]->date)->format('d'));
    


    if($host == 'localhost'){
        $image_host = 'lav_sms';
    }else{
        $image_host = 'eportal.trumpetsoundacademy.com';
    }
    return view('events',['upcoming_events'=> $upcoming_events, 'archival_events'=> $archival_events, 'host'=> $image_host, 'title'=> 'Events']);
})->name('events');

Route::get('/gallery/{category}', function($category){
    $categories = Category::all();
    
    if($category == "all"){
        $galleries = Gallery::paginate(16);
    }else{
        $category_by_name = Category::where('category', $category)->first();
        $category_id = $category_by_name->id;
        $galleries = Gallery::where('gallery_category_id',$category_id)->paginate(16);
    }

    $host = Request::server('SERVER_NAME');

    if($host == 'localhost'){
        $image_host = 'lav_sms';
    }else{
        $image_host = 'eportal.trumpetsoundacademy.com';
    }
    
    return view('gallery',['galleries'=> $galleries, 'categories'=> $categories, 'host'=> $image_host, 'title'=> 'Gallery']);
})->name('gallery');

Route::get('publication', function(){
    $publications = Publication::paginate(25);
    return view('publication',  ['title'=> 'publication' , 'publications'=> $publications]);
})->name('publication');

Route::post('send-request', 'RequestController@sendRequest')->name('send_request');
