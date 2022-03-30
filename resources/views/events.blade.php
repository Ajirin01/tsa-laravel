@extends('layouts.event_layout')

@section('content')
<div class="container">
    <div class="col-12 col-lg-12">
        <div class="col-lg-12">
            <div class="col-lg-12">
                @if (count($upcoming_events) == 0)
                    <h2 class="text-center">
                        No Upcoming events at the moment, Please check again later!
                    </h2>
                @else
                    <div class="main-content" style="width: 100%">
                        <h3 style="font-size: 2.5rem">Upcoming events </h3>
                        <section class="posts-con">
                            @foreach ($upcoming_events as $event)
                                <article>
                                    <div class="current-date">
                                        <p style="color: white">{{date("M",strtotime($event->date))}}</p>
                                        <p class="date">{{date("d",strtotime($event->date))}}</p>
                                    </div>
                                    <div class="info">
                                        <h3>{{ $event->title }}</h3>
                                        <p class="info-line"><span class="time">{{date("M-D-Y",strtotime($event->date))}}</span><span class="place">{{ $event->location }}</span></p>
                                        <p>All parents should prepare their ward for the excursion. departure time must be kept sacrosanct.<br>Please let's try to keep to time</p>
                                    </div>
                                </article>
                            @endforeach
                        </section>
                            
                     </div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-12">
        <div class="col-lg-12">
            <div class="col-lg-12">
                @if (count($archival_events) == 0)
                    <h2 class="text-center">
                        No past events at the moment, Please check again later!
                    </h2>
                @else
                    <div class="main-content" style="width: 100%">
                        <h3 style="font-size: 2.5rem">Past events </h3>
                        <section class="posts-con">
                            @foreach ($archival_events as $event)
                                <article>
                                    <div class="current-date">
                                        <p style="color: white">{{date("M",strtotime($event->date))}}</p>
                                        <p class="date">{{date("d",strtotime($event->date))}}</p>
                                    </div>
                                    <div class="info">
                                        <h3>{{ $event->title }}</h3>
                                        <p class="info-line"><span class="time">{{date("M-D-Y",strtotime($event->date))}}</span><span class="place">{{ $event->location }}</span></p>
                                        {{-- <p>All parents should prepare their ward for the excursion. departure time must be kept sacrosanct.<br>Please let's try to keep to time</p> --}}
                                    </div>
                                </article>
                            @endforeach
                        </section>
                            
                     </div>
                @endif
            </div>
        </div>
    </div>
<!-- / container -->
@endsection