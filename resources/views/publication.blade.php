@extends('layouts.master')

@section('upper-content')
    <div id="down">
        <!-- Single Featured Post -->
        @foreach ($publications as $key => $publication)
            <div class="single-blog-post featured-post mb-30" style="word-wrap: break-word">
                <div>
                    {{-- <a href="{{URL::to('publications/'.$article_type.'/'.$publication->id)}}"><img style=" width: 100%; height: 500px" src="{{$publication->article_intro_image}}" alt=""></a> --}}
                    <a href="{{URL::to('publications/'.$article_type.'/'.$publication->id)}}">
                        <div style="background-image: url({{$publication->article_intro_image}});
                        background-size: cover; background-repeat: no-repeat; background-position: center; width: inherit; height: 500px
                        "></div>
                    </a>
                </div>
                <div class="post-data">
                    <a href="{{URL::to('publications/'.$article_type.'/'.$publication->id)}}" class="post-title">
                        <h6>{{$publication->article_title}}</h6>
                    </a>
                    <div class="text-left"><?php echo substr($publication->article_intro,0,500)?>...</div>
                    <div class="align-items-center">
                        <a href="/api/like/{{$publication->id}}" class="{{$publication->id}}" id="like-btn{{$publication->id}}" onclick="handleLikeButtonClicked({{$publication->id}})">
                            @if (Auth::user())
                                @if (getLikeUserH($publication->id, Auth::user()->id)>0)
                                    <i style="color: red" id="like-icon{{$publication->id}}" class="fa fa-thumbs-up"></i>
                                @else
                                    <i style="color: gray" id="like-icon{{$publication->id}}" class="fa fa-thumbs-up"></i>
                                @endif
                            @else
                                <i style="color: gray" id="like-icon{{$publication->id}}" class="fa fa-thumbs-up"></i>
                            @endif
                            <span id="likes{{$publication->id}}">
                                @php
                                    echo getLikesH($publication->id);
                                @endphp
                            </span>
                        </a>
                        <a href="{{URL::to('publications/'.$publication->article_type.'/'.$publication->id)}}" class="post-comment">
                            @if (Auth::user())
                                @if (getCommentUserH($publication->id, Auth::user()->id)>0)
                                    <i style="color: red" id="comment-icon" class="fa fa-comments"></i>
                                @else
                                    <i style="color: gray" id="comment-icon" class="fa fa-comments"></i>
                                @endif
                            @else
                                <i style="color: gray" id="comment-icon" class="fa fa-comments"></i>
                            @endif
                            <span id="comments">
                                @php
                                    echo getCommentsH($publication->id);
                                @endphp
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ##### Advert Add Area Start ##### -->
            {{-- @if ($key % 2)
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-add">
                                    <a href="#"><img src="{{asset('site/img/bg-img/footer-add.gif')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <br>
            <!-- ##### Advert Add Area End ##### --> 
        @endif --}}
        @endforeach
    </div>
    
@endsection