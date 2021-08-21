@extends('layouts.event_layout')

@section('content')
{{-- {{ json_decode($galleries[0]->photo)[0] }} --}}
    <div class="col-lg-12">
        <div class="container">
            <div class="col-12 col-lg-12">
                <div class="col-lg-8">
                    <h3 style="font-size: 2.5rem" class="single">Photos of the selected category</h3>

                    <div class="main-content" style="width: 100%">
                        <div class="slider-con">
                            <ul class="bxslider">
                                <li>
                                    <div class="slide">
                                        <ul>
                                            @foreach ($galleries as $gallery)
                                                <li><a href="#"><img style="width: 153px; height: 153px" src="/{{ $host }}/{{ json_decode($gallery->photo)[0] }}" alt=""></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                            {{ $galleries->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside id="sidebar" style="margin-top: 50px">
                        <div class="widget sidemenu">
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a id="{{ $category->category }}" href="{{ route('gallery', ['category'=> $category->category]) }}">
                                            {{ $category->category }}
                                            <span class="nr">
                                                {{ 	count(App\Gallery::where('gallery_category_id', $category->id)->get()) }}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                                {{-- <li><a href="#">Day of teacher<span class="nr">142</span></a></li>
                                <li><a href="#">Open Day<span class="nr">98</span></a></li>
                                <li class="current"><a href="#">The best students in 2014<span class="nr">16</span></a></li>
                                <li><a href="#">End of the year parties<span class="nr">63</span></a></li>
                                <li><a href="#">School party<span class="nr">49</span></a></li>
                                <li><a href="#">children's Day<span class="nr">175</span></a></li>
                                <li><a href="#">Speach and prize giving day<span class="nr">87</span></a></li> --}}
                            </ul>
                        </div>
                    </aside>
                    <!-- / sidebar -->
                </div>
            </div>
			{{-- <h1 class="single">Photos of the selected category</h1>

			<div class="main-content">
				<div class="slider-con">
					<ul class="bxslider">
						<li>
							<div class="slide">
								<ul>
									<li><a href="#"><img src="{{asset('frontend/images/5.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_2.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_3.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_4.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_5.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_6.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_7.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_8.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_9.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_10.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_11.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_12.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_13.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_14.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_15.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_16.png')}}" alt=""></a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="slide">
								<ul>
									<li><a href="#"><img src="{{asset('frontend/images/5.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_2.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_3.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_4.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_5.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_6.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_7.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_8.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_9.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_10.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_11.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_12.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_13.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_14.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_15.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_16.png')}}" alt=""></a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="slide">
								<ul>
									<li><a href="#"><img src="{{asset('frontend/images/5.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_2.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_3.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_4.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_5.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_6.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_7.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_8.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_9.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_10.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_11.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_12.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_13.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_14.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_15.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/5_16.png')}}" alt=""></a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div> --}}
			
			{{-- <aside id="sidebar">
				<div class="widget sidemenu">
					<ul>
						<li><a href="#">Day of teacher<span class="nr">142</span></a></li>
						<li><a href="#">Open Day<span class="nr">98</span></a></li>
						<li class="current"><a href="#">The best students in 2014<span class="nr">16</span></a></li>
						<li><a href="#">End of the year parties<span class="nr">63</span></a></li>
						<li><a href="#">School party<span class="nr">49</span></a></li>
						<li><a href="#">children's Day<span class="nr">175</span></a></li>
						<li><a href="#">Speach and prize giving day<span class="nr">87</span></a></li>
					</ul>
				</div>
			</aside>
			<!-- / sidebar --> --}}
	
		</div>
		<!-- / container -->
    </div>
    <script>
        
    </script>
@endsection