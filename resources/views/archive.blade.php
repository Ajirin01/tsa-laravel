@extends('layouts.event_layout')

@section('content')
    <div id="down">
        <div class="col-md-12">
            @if (count($archives) == 0)
                <h2 class="text-center">
                    No information currently available, Please Check again later!
                </h2>
            @else
                
            @endif
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