@extends('layouts.event_layout')

@section('content')
    <div id="down">
        <!-- Single Featured Post -->
        
        <div class="col-md-12">
            @foreach ($archives as $key => $archive)
                <div class="col-md-6">
                    <div class="single-blog-post featured-post mb-30" style="word-wrap: break-word">
                        <div class="post-data">
                            <a href="{{URL::to('archive-detail/'.$archive->id)}}" class="post-title">
                                <h6>{{$archive->title}}</h6>
                            </a>
                            <div class="text-left"><?php echo substr($archive->description,0,300)?>...</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection