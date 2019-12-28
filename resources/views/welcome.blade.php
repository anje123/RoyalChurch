    @extends('layouts.frontend')

    @section('content')
        
	
<!-- begin Revolution Slider -->
<div class="fullwidthbanner-container animated fadeInUp delay6" id="menu-jumbotron" >
    <div class="fullwidthbanner">
        <ul>
        <!-- begin Slide 1 -->
        <li data-transition="boxslide" data-slotamount="10" data-masterspeed="500" data-slideindex="back" class="slide1">
            <img src="{{asset('app/img/slider/background2.jpg')}}" alt="background" />
            
            <div class="caption lfr" data-x="400" data-y="0" data-speed="900" data-start="2600" data-easing="easeOutExpo">
                <img src="{{asset('app/img/slider/leaves.png')}}" class="leaves" alt="//">
            </div>
            
            <div class="caption sft text a"  data-x="right" data-y="0"  data-speed="1200" data-start="2700" data-easing="easeOutExpo">
                Welcome 
            </div>
    
            <div class="caption sft text b"  data-x="right" data-y="0" data-speed="1200" data-start="2900" data-easing="easeOutExpo">
                To the 
            </div>
    
            <div class="caption sft text c"  data-x="right" data-y="0" data-speed="1200" data-start="3100" data-easing="easeOutExpo">
                <span>Royal Court</span>
            </div>
    
            <div class="caption lft quote" data-x="right" data-y="0" data-speed="1200" data-start="3200" data-easing="easeOutExpo">
                
            </div>
        </li>
        <!-- end Slide 1 -->
    
        <!-- begin Slide 2 -->
        <li data-transition="boxslide" data-slotamount="10" data-masterspeed="500" data-slideindex="back" class="slide2">
            <img src="{{asset('app/img/slider/background3.jpg')}}" alt="background" />
            
            <div class="caption lfr" data-x="400" data-y="0" data-speed="900" data-start="2600" data-easing="easeOutExpo">
                <img src="{{asset('app/img/slider/leaves.png')}}" class="leaves" alt="//">
            </div>
            
            <div class="caption sft title" data-x="left" data-y="0"  data-speed="1200" data-start="2700" data-easing="easeOutExpo">
            Welcome To TRC
            </div>
    
            <div class="caption sft text"  data-x="left" data-y="0"  data-speed="1200" data-start="2900" data-easing="easeOutExpo">
                <span class="pink">Love,</span> joy, peace, <span class="yellow">forbearance,</span> kindness <span class="purple">goodness,</span> faithfulness gentleness and <span class="green">self-control"</span>
            </div>
    
            <div class="caption lft quote" data-x="left" data-y="0" data-speed="1200" data-start="3100" data-easing="easeOutExpo">
                gal 5:22-23
            </div>
        </li>
        <!-- end Slide 2 -->
        </ul>
    </div>
    </div>
	<!-- end Slide 1 -->

	
	</ul>
</div>
</div>
<!-- end Revolution Slider -->


<!-- begin Service & Study -->
<section id="menu-about" class="generic service animated fadeInUp delay6">
<div class="container">

	 <!-- title -->
	 <div class="row text-center title">
		<div class="col-sm-12">
			<h2>Service &amp; Study</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	 </div>
	 <!-- end title -->

	<!-- begin Carousel -->
	<div class="row">
	<div id="carousel-service" class="carousel slide">
		<div class="carousel-inner">
			
			<!-- begin Item 1 -->
			<div class="item active">
				<div class="col-sm-3 info-box">
					<h3>Digging Deep</h3>
					<p> Tuesday:   6:00 PM </p>
					<ul>
					
					</ul>
					<h6>*Times are subject to change</h6>
				</div>
				<div class="col-sm-8 col-md-offset-1">
					<h2>New Here? Welcome &amp; Come As You Are! <i class="glyphicon glyphicon-heart-empty"></i></h2>
					<p> For where two or three have gathered together in My name, I am there in their midst. </p>
					<p class="highlight">Matthew 18:20 </p>
				</div>
			</div>
			<!-- end Item 1 -->

			<!-- begin Item 2 -->
			<div class="item">
				<div class="col-sm-3 info-box">
					<h3>Faith Clinic</h3>
					<p> Wednesday:   6:00 PM </p>
					
					<h6>*Times are subject to change</h6>
				</div>
				<div class="col-sm-8 col-md-offset-1">
					<h2>New Here? Welcome &amp; Come As You Are! <i class="glyphicon glyphicon-heart-empty"></i></h2>
					<p> Be strong and courageous. Do not be afraid or terrified because of them, for the LORD your God goes with you; he will never leave you nor forsake you . </p>
					<p class="highlight">Deuteronomy 31:6 </p>
				</div>
			</div>
			<!-- end Item 2 -->

			<!-- begin Item 3 -->
			<div class="item">
				<div class="col-sm-3 info-box">
					<h3>Sunday Service</h3>
                    <p>First service:  7:30 - 8:30</p>
                    <p>Second service:  8:30 - 9:30</p>
                    <p>Sunday School: 9:30 - 10:00 </p>
                    <p>Third service: 10:00 - 12:05</p>
			
					<h6>*Times are subject to change</h6>
				</div>
				<div class="col-sm-8 col-md-offset-1">
					<h2>New Here? Welcome &amp; Come As You Are! <i class="glyphicon glyphicon-heart-empty"></i></h2>
					<p> Praise the Lord, all people on earth praise his glory and might. </p>
					<p class="highlight">1 Chronicles 16:28 </p>
				</div>
			</div>
			<!-- end Item 3 -->

		</div>
	 			
		<!-- begin Controls -->
		<div class="row cu-controls">
			<div class="col-sm-12">
				<a href="#carousel-service" data-slide="prev" class="sercacontrol"><i class="icon-left-open-big"></i></a>
				<a href="#carousel-service" data-slide="next" class="sercacontrol next"><i class="icon-right-open-big"></i></a>
				<ol class="carousel-indicators">
					<li data-target="#carousel-service" class="middle" data-slide-to="0">Tuesday</li>
					<li data-target="#carousel-service" class="middle" data-slide-to="1">Wednesday</li>
					<li data-target="#carousel-service" class="middle" data-slide-to="2">Sunday</li>
				</ol>
			</div>
		</div>
		<!-- end Controls -->

	</div>
	</div>
	<!-- end Carousel -->
</div>     
</section>
<!-- end Service & Study -->





<!-- begin Behind the Pulpit -->
<section id="menu-staff" class="generic pulpit">
<div class="container">

	<!-- begin Title -->
	<div class="row text-center title">
		<div class="col-sm-12">
			<h2>Behind the Pulpit</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	</div>
	<!-- end title -->

	<!-- begin Carousel -->
	<div class="row">
	<div id="carousel-pulpit" class="carousel slide">

		<div class="carousel-inner">
			<!-- begin Item 1 -->
			<div class="item active">
				<div class="col-sm-4 animated fadeInLeft delay2">
					<h2>Our Pastor <i class="glyphicon glyphicon-heart-empty"></i></h2>
					<p><strong>Pastor Olutunji  Oladimeji</strong> </p>
					<p>
						He is among the most blessed men in the world. God has graciously saved me and sustained me. He has an incredible family. The place and ministry where He serve vocationally is a gift from God.</p>
				</div>
				<div class="col-sm-7 col-md-offset-1 animated fadeInRight delay1">
					<img src="{{asset('app/img/pastors/pastor4.jpg')}}" alt="">
				</div>
			</div>
			<!-- end Item 1 -->

			
		</div>

		<!-- begin Controls -->
		<div class="row cu-controls">
			<div class="col-sm-12">
				<a href="#carousel-pulpit" data-slide="prev" class="sercacontrol"><i class="icon-left-open-big"></i></a>
				<a href="#carousel-pulpit" data-slide="next" class="sercacontrol next"><i class="icon-right-open-big"></i></a>
				<ol class="carousel-indicators">
					<li data-target="#carousel-pulpit" class="middle" data-slide-to="0" >Pastor Olutunji Oladimeji</li>
					
				</ol>
			</div>
		</div>
		<!-- end Controls -->

	</div>
	</div>
	<!-- end Carousel -->

</div>     
</section>
<!-- end Behind the Pulpit -->




<!-- Photo Albums -->
<section id="menu-gallery" class="generic gallery">
<div class="container">

	<!-- begin Title -->
	<div class="row text-center title">
		<div class="col-sm-12">
			<h2>Photo Albums</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	</div>
	<!-- end title -->

	<!-- begin Carousel -->
	<div id="carousel-albums" class="row carousel slide">	
		<div class="carousel-inner">
		
		<!-- bagin Item 1 -->
		<div class="item active">
			<div class="row">
				<div class="image">
					<a href="{{asset('app/img/photos/photo01.jpg')}}" data-rel="prettyPhoto[pp_gal]" title="You can add caption to pictures.">
						<span class="bg">
							<span class="plus"><i class="icon-plus"></i></span>
						</span>
					</a>
					<img src="{{asset('app/img/photos/photo01.jpg')}}" alt="img">
				</div>
				<div class="image">
					<a href="{{asset('app/img/photos/photo02.jpg')}}" data-rel="prettyPhoto[pp_gal]" title="You can add caption to pictures.">
						<span class="bg">
							<span class="plus"><i class="icon-plus"></i></span>
						</span>
					</a>
					<img src="app/img/photos/photo02.jpg" alt="img">
				</div>
				<div class="image">
					<a href="{{asset('app/img/photos/photo03.jpg')}}" data-rel="prettyPhoto[pp_gal]" title="You can add caption to pictures.">
						<span class="bg">
							<span class="plus"><i class="icon-plus"></i></span>
						</span>
					</a>
					<img src="{{asset('app/img/photos/photo03.jpg')}}" alt="img">
				</div>
			</div>
			<div class="row">
				<div class="image">
					<a href="{{asset('img/photos/photo04.jpg')}}" data-rel="prettyPhoto[pp_gal]" title="You can add caption to pictures.">
						<span class="bg">
							<span class="plus"><i class="icon-plus"></i></span>
						</span>
					</a>
					<img src="{{asset('app/img/photos/photo04.jpg')}}" alt="img">
				</div>
				<div class="image">
					<a href="{{asset('app/img/photos/photo05.jpg')}}" data-rel="prettyPhoto[pp_gal]" title="You can add caption to pictures.">
						<span class="bg">
							<span class="plus"><i class="icon-plus"></i></span>
						</span>
					</a>
					<img src="{{asset('app/img/photos/photo05.jpg')}}" alt="img">
				</div>
				<div class="image">
					<a href="{{asset('app/img/photos/photo06.jpg')}}" data-rel="prettyPhoto[pp_gal]" title="You can add caption to pictures.">
						<span class="bg">
							<span class="plus"><i class="icon-plus"></i></span>
						</span>
					</a>
					<img src="{{asset('app/img/photos/photo06.jpg')}}" alt="img">
				</div>
			</div>

		
		</div>
		<!-- end Item 1 -->

		
	</div>


	</div>
	<!-- end Carousel -->
</div>
</section>
<!-- end Photo Albums -->
		



		
<!-- Upcoming Events -->
<section id="menu-events" class="generic events">
<div class="container">

	 <!-- begin title -->
	 <div class="row text-center title">
		<div class="col-sm-12">
			<h2>Upcoming</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	 </div>
	 <!-- end title -->

	<!-- begin Carousel -->
	<div id="carousel-events" class="row carousel slide">
	<div class="carousel-inner">
	 	<!-- begin Item 1 -->
	 	<div class="item active">
			<!--events column-->
			<div class="col-sm-6 eventlist">
				<h3><span>Events</span> </h3>
				<ul>
					@foreach ($three_event as $event)
						
					<li>
						<div class="event-date">
							<div class="month">{{$event->time}}</div>
							<div class="number">{{$event->date}}</div> 
							<div class="month">{{$event->month}}</div>
							<div class="month">{{$event->year}}</div>

						</div>
						<div class="event-info">{{$event->name}}</div>
					</li>
						@endforeach

				</ul>
			</div>
			<!--end events column-->

		
			<!--events column-->
			<div class="col-sm-6 eventlist">
				<h3>  <span>News</span> </h3>
				<ul>
					@foreach ($three_news as $news)
					<li>
						<div class="event-date">
						<div class="number"> {{$news->date}} </div> 
							<div class="month"> {{$news->month}}</div>
							<div class="month">{{$news->year}}</div>

						</div>
						<div class="event-info">{{$news->topic}} </div>
					</li>
					@endforeach

					
				</ul>
			</div>
			<!--end events column-->
		</div>
		<!-- end Item 1 -->

		
	</div>

	
	</div>
	<!-- begin Carousel -->
</div>     
</section>
<!-- end Upcoming Events -->




<!-- Latest Sermons -->
<section id="menu-sermons" class="generic sermons">
<div class="container">

	<!-- begin title -->
	<div class="row text-center title">
		<div class="col-sm-12">
			<h2>Latest Sermons</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	</div>
	<!-- end title -->       

	<div class="row">
	<div class="col-md-8">
		<div id="jp_container_1" class="jp-video jp-video-360p">
			<div class="jp-type-single">

				<div class="player-container">
					<div id="jquery_jplayer_1" class="jp-jplayer"></div>
				</div>

				<div class="jp-gui">
					<a href="javascript:;" class="jp-btn jp-play" tabindex="1"><i class="icon-play"></i></a>
					<a href="javascript:;" class="jp-btn jp-pause" tabindex="1"><i class="icon-pause"></i></a>
					<div class="jp-title"><strong></strong> by Pastor  JERMAINE SANWOOLU</div>
					<div class="jp-progress">
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
						<div class="jp-seek-bar"><div class="jp-play-bar"></div></div>
					</div>
				</div>

				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>

			</div>
		</div>
	</div>
	

	</div>

</div>
</section>
<!-- end Latest Sermons -->


<!-- begin Contact -->
<section id="menu-contact" class="generic contact">
<div id="map"></div>
<div id="contact_bg">
	<div class="container">
		 
		 <div class="row text-center title">
			<div class="col-sm-12">
				<h2>Contact Us Now!</h2>
				<p>
					Give us a call or send us an email with any questions or concerns that you may have.<br />
					Or if you're in the vicinity, stop an pay us a visit!
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<address>
				{{$profile->address}}<br>
				Phone:  {{$profile->phone_no}}<br />
				Email:  <a href="http://gmail.com/" target="_blank">{{$profile->email}}</a><br />
				Facebook:  <a href="{{$profile->facebook}}">{{$profile->facebook}}</a><br />
                Instagram:  <a href="{{$profile->instagram}}<">{{$profile->instagram}}</a><br />
                Twitter:  <a href="https://twitter.com/theroyalcourt16?lang=en<">https://twitter.com/theroyalcourt16?lang=en</a><br />

				</address>
			</div> 

		 </div>

	 </div>
</div>
</section>
<!-- end Contact -->
	
	
    @stop