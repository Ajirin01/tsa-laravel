@extends('layouts.master')

@section('upper-content')
    <div id="down">
        <!-- Single Featured Post -->
        <div class="col-md-12">
            
            @foreach ($publications as $key => $publication)
                <div class="col-md-6">
                    <div class="single-blog-post featured-post mb-30" style="word-wrap: break-word">
                        <div>
                            {{-- <a href="{{URL::to('publications/'.$publication->id)}}"><img style=" width: 100%; height: 500px" src="{{$publication->photo}}" alt=""></a> --}}
                            <a href="{{URL::to('publication-detail/'.$publication->id)}}">
                                <div style="background-image: url({{$publication->photo}});
                                background-size: cover; background-repeat: no-repeat; background-position: center; width: inherit; height: 500px
                                "></div>
                            </a>
                        </div>
                        <div class="post-data">
                            <a href="{{URL::to('publication-detail/'.$publication->id)}}" class="post-title">
                                <h6>{{$publication->title}}</h6>
                            </a>
                            <div class="text-left"><?php echo substr($publication->description,0,300)?>...</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
    
@endsection