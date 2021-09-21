@extends('layouts.event_layout')

@section('content')
<div class="container">
    <div class="col-12 col-lg-12">
        <div class="col-lg-8">
            <div class="col-lg-12">
                <div class="main-content" style="width: 100%">
                <h3 style="font-size: 2.5rem">Upcoming events </h3>
                    <section class="posts-con">
                        @foreach ($upcoming_events as $event)
                            <article>
                                <div class="current-date">
                                    <p style="color: white">{{ Carbon\Carbon::parse($event->data)->format('F') }}</p>
                                    <p class="date">{{ Carbon\Carbon::parse($event->data)->format('d') }}</p>
                                </div>
                                <div class="info">
                                    <h3>{{ $event->title }}</h3>
                                    <p class="info-line"><span class="time">{{ Carbon\Carbon::parse($event->data)->diffforHumans() }}</span><span class="place">{{ $event->location }}</span></p>
                                    <p>All parents should prepare their ward for the excursion. departure time must be kept sacrosanct.<br>Please let's try to keep to time</p>
                                </div>
                            </article>
                        @endforeach
                        
                </div>
            </div>
            
        </div>
        {{-- <div class="col-lg-4">
            <aside id="sidebar">
                <div class="widget clearfix calendar">
                    <h3 style="font-size: 2.5rem">Event calendar</h3>
                    <div class="head">
                        <a class="prev" href="#"></a>
                        <a class="next" href="#"></a>
                        <h4>April 2021</h4>
                    </div>
                    <div class="table">
                        <table>
                            <tr>
                                <th class="col-1">Mon</th>
                                <th class="col-2">Tue</th>
                                <th class="col-3">Wed</th>
                                <th class="col-4">Thu</th>
                                <th class="col-5">Fri</th>
                                <th class="col-6">Sat</th>
                                <th class="col-7">Sun</th>
                            </tr>
                            <tr>
                                <td class="col-1 disable"><div>31</div></td>
                                <td class="col-2"><div>1</div></td>
                                <td class="col-3"><div>2</div></td>
                                <td class="col-4"><div>3</div></td>
                                <td class="col-5 archival"><div>4</div></td>
                                <td class="col-6"><div>5</div></td>
                                <td class="col-7"><div>6</div></td>
                            </tr>
                            <tr>
                                <td class="col-1"><div>7</div></td>
                                <td class="col-2"><div>8</div></td>
                                <td class="col-3 archival"><div>9</div></td>
                                <td class="col-4"><div>10</div></td>
                                <td class="col-5"><div>11</div></td>
                                <td class="col-6"><div>12</div></td>
                                <td class="col-7"><div>13</div></td>
                            </tr>
                            <tr>
                                <td class="col-1"><div>14</div></td>
                                <td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
                                    <h4>Our day of Excursion</h4>
                                    <p class="info-line"><span class="time">10:30 AM</span><span class="place">Time of Adventure</span></p>
                                    <p>Please Parents, make sure your kids are prepared.</p>
                                </div></div>15</div></td>
                                <td class="col-3"><div>16</div></td>
                                <td class="col-4 upcoming"><div><div class="tooltip"><div class="holder">
                                    <h4>Our day of Excursion </h4>
                                    <p class="info-line"><span class="time">10:30 AM</span><span class="place">Time of Adventure</span></p>
                                    <p>Please Parents, make sure your kids are prepared.</p>
                                </div></div>16</div></td>
                                <td class="col-5"><div>18</div></td>
                                <td class="col-6"><div>19</div></td>
                                <td class="col-7"><div>20</div></td>
                            </tr>
                            <tr>
                                <td class="col-1"><div>21</div></td>
                                <td class="col-2"><div>22</div></td>
                                <td class="col-3"><div>23</div></td>
                                <td class="col-4"><div>24</div></td>
                                <td class="col-5 upcoming"><div><div class="tooltip"><div class="holder">
                                    <h4>Our day of Excursion</h4>
                                    <p class="info-line"><span class="time">10:30 AM</span><span class="place">Time of Adventure</span></p>
                                    <p>Please Parents, make sure your kids are prepared.</p>
                                </div></div>25</div></td>
                                <td class="col-6"><div>26</div></td>
                                <td class="col-7"><div>27</div></td>
                            </tr>
                            <tr>
                                <td class="col-1"><div>28</div></td>
                                <td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
                                    <h4>Our day of Excursion</h4>
                                    <p class="info-line"><span class="time">10:30 AM</span><span class="place">Time of Adventure</span></p>
                                    <p>Please Parents, make sure your kids are prepared.</p>
                                </div></div>29</div></td>
                                <td class="col-3"><div>30</div></td>
                                <td class="col-4 disable"><div>1</div></td>
                                <td class="col-5 disable"><div>2</div></td>
                                <td class="col-6 disable"><div>3</div></td>
                                <td class="col-7 disable"><div>4</div></td>
                            </tr>
                        </table>
                    </div>
                    <div class="note">
                        <p class="upcoming-note">Upcoming event</p>
                        <p class="archival-note">Archival event</p>
                    </div>
                </div>
                <div class="widget list">
                    <h2>Photo gallery</h2>
                    <ul>
                        <li><a href="#"><img src="{{asset('frontend/images/4.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('frontend/images/4_2.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('frontend/images/4_3.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('frontend/images/4_4.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('frontend/images/4_5.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('frontend/images/4_6.png')}}" alt=""></a></li>
                    </ul>
                    <div class="btn-holder">
                        <a class="btn blue" href="#">Show more photos</a>
                    </div>
                </div>
            </aside>
        </div> --}}
    </div>

    {{-- <div class="main-content">
        <h1>Upcoming events</h1>
        <section class="posts-con">
            <article>
                <div class="current-date">
                    <p>July</p>
                    <p class="date">28</p>
                </div>
                <div class="info">
                    <h3>Excursion to Kainji Dam</h3>
                    <p class="info-line"><span class="time">10:30 AM</span><span class="place">Excursion to Kainji Lake</span></p>
                    <p>All parents should prepare their ward for the excursion. departure time must be kept sacrosanct.<br>Please let's try to keep to time</p>
                </div>
            </article>
            <article>
                <div class="current-date">
                    <p>Sept</p>
                    <p class="date">17</p>
                </div>
                <div class="info">
                    <h3>Excursion to Search FM. 92.3</h3>
                    <p class="info-line"><span class="time">10:30 AM</span><span class="place">Federal University of Technology Minna.</span></p>
                    <p>An adventure to the search FM studio will be a lovely time to explore real-time media and broadcast reporting, in ordet to give our ward a wonderful experience. Parents do well to prepare your ward for this experience</p>
                </div>
            </article>
            <article>
                <div class="current-date">
                    <p>Sept</p>
                    <p class="date">17</p>
                </div>
                <div class="info">
                    <h3>Excursion to Search FM. 92.3</h3>
                    <p class="info-line"><span class="time">10:30 AM</span><span class="place">Federal University of Technology Minna.</span></p>
                    <p>An adventure to the search FM studio will be a lovely time to explore real-time media and broadcast reporting, in ordet to give our ward a wonderful experience. Parents do well to prepare your ward for this experience</p>
                </div>
            </article>
            <article>
                <div class="current-date">
                    <p>Sept</p>
                    <p class="date">17</p>
                </div>
                <div class="info">
                    <h3>Excursion to Search FM. 92.3</h3>
                    <p class="info-line"><span class="time">10:30 AM</span><span class="place">Federal University of Technology Minna.</span></p>
                    <p>An adventure to the search FM studio will be a lovely time to explore real-time media and broadcast reporting, in ordet to give our ward a wonderful experience. Parents do well to prepare your ward for this experience</p>
                </div>
            </article>
        </section>
    </div> --}}
    
    {{-- <aside id="sidebar">
        <div class="widget clearfix calendar">
            <h2>Event calendar</h2>
            <div class="head">
                <a class="prev" href="#"></a>
                <a class="next" href="#"></a>
                <h4>April 2021</h4>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <th class="col-1">Mon</th>
                        <th class="col-2">Tue</th>
                        <th class="col-3">Wed</th>
                        <th class="col-4">Thu</th>
                        <th class="col-5">Fri</th>
                        <th class="col-6">Sat</th>
                        <th class="col-7">Sun</th>
                    </tr>
                    <tr>
                        <td class="col-1 disable"><div>31</div></td>
                        <td class="col-2"><div>1</div></td>
                        <td class="col-3"><div>2</div></td>
                        <td class="col-4"><div>3</div></td>
                        <td class="col-5 archival"><div>4</div></td>
                        <td class="col-6"><div>5</div></td>
                        <td class="col-7"><div>6</div></td>
                    </tr>
                    <tr>
                        <td class="col-1"><div>7</div></td>
                        <td class="col-2"><div>8</div></td>
                        <td class="col-3 archival"><div>9</div></td>
                        <td class="col-4"><div>10</div></td>
                        <td class="col-5"><div>11</div></td>
                        <td class="col-6"><div>12</div></td>
                        <td class="col-7"><div>13</div></td>
                    </tr>
                    <tr>
                        <td class="col-1"><div>14</div></td>
                        <td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
                            <h4>Our day of Excursion</h4>
                            <p class="info-line"><span class="time">10:30 AM</span><span class="place">Time of Adventure</span></p>
                            <p>Please Parents, make sure your kids are prepared.</p>
                        </div></div>15</div></td>
                        <td class="col-3"><div>16</div></td>
                        <td class="col-4 upcoming"><div><div class="tooltip"><div class="holder">
                            <h4>Our day of Excursion </h4>
                            <p class="info-line"><span class="time">10:30 AM</span><span class="place">Time of Adventure</span></p>
                            <p>Please Parents, make sure your kids are prepared.</p>
                        </div></div>16</div></td>
                        <td class="col-5"><div>18</div></td>
                        <td class="col-6"><div>19</div></td>
                        <td class="col-7"><div>20</div></td>
                    </tr>
                    <tr>
                        <td class="col-1"><div>21</div></td>
                        <td class="col-2"><div>22</div></td>
                        <td class="col-3"><div>23</div></td>
                        <td class="col-4"><div>24</div></td>
                        <td class="col-5 upcoming"><div><div class="tooltip"><div class="holder">
                            <h4>Our day of Excursion</h4>
                            <p class="info-line"><span class="time">10:30 AM</span><span class="place">Time of Adventure</span></p>
                            <p>Please Parents, make sure your kids are prepared.</p>
                        </div></div>25</div></td>
                        <td class="col-6"><div>26</div></td>
                        <td class="col-7"><div>27</div></td>
                    </tr>
                    <tr>
                        <td class="col-1"><div>28</div></td>
                        <td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
                            <h4>Our day of Excursion</h4>
                            <p class="info-line"><span class="time">10:30 AM</span><span class="place">Time of Adventure</span></p>
                            <p>Please Parents, make sure your kids are prepared.</p>
                        </div></div>29</div></td>
                        <td class="col-3"><div>30</div></td>
                        <td class="col-4 disable"><div>1</div></td>
                        <td class="col-5 disable"><div>2</div></td>
                        <td class="col-6 disable"><div>3</div></td>
                        <td class="col-7 disable"><div>4</div></td>
                    </tr>
                </table>
            </div>
            <div class="note">
                <p class="upcoming-note">Upcoming event</p>
                <p class="archival-note">Archival event</p>
            </div>
        </div>
        <div class="widget list">
            <h2>Photo gallery</h2>
            <ul>
                <li><a href="#"><img src="{{asset('frontend/images/4.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('frontend/images/4_2.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('frontend/images/4_3.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('frontend/images/4_4.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('frontend/images/4_5.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('frontend/images/4_6.png')}}" alt=""></a></li>
            </ul>
            <div class="btn-holder">
                <a class="btn blue" href="#">Show more photos</a>
            </div>
        </div>
    </aside> --}}
    <!-- / sidebar -->

</div>
<!-- / container -->
@endsection