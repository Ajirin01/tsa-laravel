@extends('layouts.master')
@section('upper-content')
<div id="down" class="col-md-12">
    <div class="right-top-nav">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <!-- Single Featured Post -->
                                <div class="section-heading">
                                    <h6>{{  $publication->title }}</h6>
                                </div>
    
                                <div class="row">
                                    <div class="col-12">
                                        <div class="archive-items" style="word-break: break-word" id="archive-details">
                                            {{  $publication->description }}
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
@endsection