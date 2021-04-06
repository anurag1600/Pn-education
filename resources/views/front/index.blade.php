@extends("front.master")

@section("title",'Home | PN Education')


@section("content")

<!DOCTYPE html>
<html>
<head>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<script> $(document).ready(function(){ $('#mymodel').modal('show');}); </script>


</head>
<body>

<div class="modal fade" id="mymodel" style="padding-top: 145px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info lg">
        <h5 class="modal-title" >Notifications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
      	@foreach($show as $s)
        
        <ul>
			<li>
			    <p>{{$s->discription}}</p>
			</li>
		</ul>

		@endforeach

      </div>
      
    </div>
  </div>
</div>





		


		<!-- home-section 
			================================================== -->
		<section id="home-section">
			<div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper" data-alias="concept1" style="background-color:#000000;padding:0px;">
				<!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
				<div id="rev_slider_202_1" class="rev_slider" data-version="5.1.1RC">
					<ul>
						<!-- SLIDE  -->
						@foreach($dis as $d)
						<li data-index="rs-672" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="" data-rotate="0" data-saveperformance="off" data-title="unique" data-description="">
							<!-- MAIN IMAGE -->
							
							<img src="{{ url('/upload/'.$d->image) }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
								id="slide-672-layer-1" 
								data-x="['left','left','left','left']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['130','130','130','130']" 
								data-width="['530','530','430','420']" 
								data-height="330" 
								data-whitespace="nowrap" 
								data-transform_idle="o:1;" 
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="500" 
								data-responsive_offset="on" 
								style="z-index: 5;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);">
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption Woo-TitleLarge tp-resizeme" 
								id="slide-672-layer-2" 
								data-x="['left','left','left','left']" 
								data-hoffset="['40','40','40','35']" 
								data-y="['top','top','top','top']" 
								data-voffset="['170','170','170','170']" 
								data-width="450" 
								data-height="none" 
								data-whitespace="normal" 
								data-transform_idle="o:1;" 
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="700" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								style="z-index: 6; min-width: 370px; max-width: 450px; white-space: normal;text-align:left;">
								
                  				{{$d->title}}
                  				
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption tp-shape tp-shapewrapper tp-line-shape tp-resizeme"
								id="slide-672-layer-3" 
								data-x="['left','left','left','left']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['165','165','165','165']" 
								data-width="['3','3','3','3']" 
								data-height="100" 
								data-whitespace="nowrap" 
								data-transform_idle="o:1;" 
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="700" 
								data-responsive_offset="on" 
								style="z-index: 6;">
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption Woo-Rating tp-resizeme" 
								id="slide-672-layer-4" 
								data-x="['left','left','left','left']" 
								data-hoffset="['40','40','40','35']" 
								data-y="['top','top','top','top']" 
								data-voffset="['286','286','286','286']" 
								data-width="450" 
								data-height="none" 
								data-whitespace="normal" 
								data-transform_idle="o:1;" 
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="800" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								style="z-index: 8; min-width: 370px; max-width: 450px; white-space: normal; text-align:left;">
								
                  				{{$d->discription}}
                  				
							</div>

							

							<!-- LAYER NR. 6 -->
							<a class="tp-caption Woo-ProductInfo rev-btn tp-resizeme" 
								href="http://server.local/revslider/product/premium-computer-hardware/" 
								target="_self" 
								id="slide-672-layer-6" 
								data-x="['left','left','left','left']" 
								data-hoffset="['40','40','40','35']" 
								data-y="['top','top','top','top']" 
								data-voffset="['370','370','370','370']" 
								data-width="none" 
								data-height="none" 
								data-whitespace="nowrap" 
								data-transform_idle="o:1;" 
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Power1.easeInOut;" 
								data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(221, 221, 221, 1.00);cursor:pointer;" 
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1100" 
								data-splitin="none" 
								data-splitout="none" 
								data-actions='' 
								data-responsive_offset="on">
								Learn More
							</a>
							</li>
							@endforeach
				
					</ul>

					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">
					</div>
				</div>
			</div>

			<!-- END REVOLUTION SLIDER -->
		</section>
		<!-- End home section -->

		<!-- feature-section 
			================================================== -->
		<section class="feature-section">
			<div class="container">
				<div class="feature-box">
					<div class="row">
						@foreach($online as $o)
						<div class="col-lg-4 col-md-6">
							<div class="feature-post">
								<div class="icon-holder">
									<img class="rounded-circle" style="width: 80px; height: 60px;" src="{{ url('/upload/'.$o->image) }}">
								</div>
								<div class="feature-content">
									<h2>
										{{$o->title}}
									</h2>
									<p>{{$o->discription}}</p>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>

		</section>
		<!-- End feature section -->

		<!-- collection-section 
			================================================== -->
		<section class="collection-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span>Categories</span>
						<h1>Trending Collection</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="#">View All Categories</a>
					</div>
				</div>
				<div class="collection-box">
					<div class="row">
						<?php $i=1; ?>
						@foreach($cat as $t)
						@if($i==1)
						<div class="col-lg-6 col-md-12">
							<div class="collection-post">
								<div class="inner-collection">
									<img  src="{{ url('/upload/'.$t->image) }}" alt="">
									<a href="{{url('category_course/'.$t->id)}}" class="hover-post">
										<span class="title">{{$t->name}}</span>
										<span class="numb-courses">3 Courses</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							@elseif($i==2)
							<div class="collection-post">
								<div class="inner-collection">
									<img style="" src="{{ url('/upload/'.$t->image) }}" alt="">
									<a href="{{url('category_course/'.$t->id)}}" class="hover-post">
										<span class="title">{{$t->name}}</span>
										<span class="numb-courses">2 Courses</span>
									</a>
								</div>
							</div>
						
							@elseif($i==3)
							<div class="collection-post">
								<div class="inner-collection">
									<img src="{{ url('/upload/'.$t->image) }}" alt="">
									<a href="{{url('category_course/'.$t->id)}}" class="hover-post">
										<span class="title">{{$t->name}}</span>
										<span class="numb-courses">3 Courses</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							@elseif($i==4)
							<div class="collection-post">
								<div class="inner-collection">
									<img  src="{{ url('/upload/'.$t->image) }}" alt="">
									<a href="{{url('category_course/'.$t->id)}}" class="hover-post">
										<span class="title">{{$t->name}}</span>
										<span class="numb-courses">3 Courses</span>
									</a>
								</div>
							</div>
							@elseif($i==5)
							<div class="collection-post">
								<div class="inner-collection">
									<img src="{{ url('/upload/'.$t->image) }}" alt="">
									<a href="{{url('category_course/'.$t->id)}}" class="hover-post">
										<span class="title">{{$t->name}}</span>
										<span class="numb-courses">3 Courses</span>
									</a>
								</div>
							</div>
						</div>
						@endif
						<?php $i++ ?>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- End collection section -->
		<!-- countdown-section 
			================================================== -->
		<section class="countdown-section">
			<div class="container">
				<div class="countdown-box">
					<h1>Limited Time: Get My Book For Free!</h1>
					<p>Learn anytime, anywhere. Best Courses. Top Instituion.</p>
					<div class="countdown-item" data-date="2019/12/14">
						<div class="countdown-col">
							<span class="countdown-unit countdown-days">
								<span class="number" id="days"></span>
								<span class="text">days</span>
							</span>
						</div>
						<div class="countdown-col">
							<span class="countdown-unit countdown-hours">
								<span class="number" id="hours"></span>
								<span class="text">hours</span>
							</span>
						</div>
						<div class="countdown-col">
							<span class="countdown-unit countdown-min">
								<span class="number" id="minutes"></span>
								<span class="text">minutes</span>
							</span>
						</div>
						<div class="countdown-col">
							<span class="countdown-unit countdown-sec">
								<span class="number" id="seconds"></span>
								<span class="text">seconds</span>
							</span>
						</div>
					</div>
					<p>We offer professional SEO services that help websites increase their organic search score drastically in order to compete for the highest rankings.</p>
					<a class="button-two" href="#">Get my free book</a>
				</div>
			</div>

		</section>
		<!-- End countdown section -->

		<!-- popular-courses-section 
			================================================== -->
		<section class="popular-courses-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span>Education</span>
						<h1>Popular Courses</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="#">View All Courses</a>
					</div>
				</div>
				<div class="popular-courses-box">
					<div class="row">
						@foreach($cou as $c)
						<div class="col-lg-3 col-md-6">
							<div class="course-post">
								<div class="course-thumbnail-holder">
									<a href="{{url('course_detail/'.$c->id)}}">
										<img style="width: 290px; height:250px;" src="{{ url('/upload/'.$c->image) }}" alt="">
									</a>
								</div>
								<div class="course-content-holder">
									<div class="course-content-main">
										<h2 class="course-title">
											<a href="{{url('course_detail'.$c->id)}}">{{$c->course_name}}</a>
										</h2>
										<div class="course-rating-teacher">
											<div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">5.00</span>
													<span class="votes-number">1 Votes</span>
												</span>
											</div>
											<a href="#" class="course-loop-teacher">{{$c->course_content}}</a>
										</div>
									</div>
									<div class="course-content-bottom">
										<div class="course-students">
											{{$c->detail}}
											
										</div>
										<div class="course-price">
											Rs. <span>{{$c->price}}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach


						
								</div>
							</div>
						</div>


		</section>

		<!-- End popular-courses section -->

		

		

		<!-- testimonial-section 
			================================================== -->
		<section class="testimonial-section">
			<div class="container">
				<div class="testimonial-box owl-wrapper">
					
					<div class="owl-carousel" data-num="1">
					
						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="upload/testimonials/testimonial-avatar-1.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>
					
						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="upload/testimonials/testimonial-avatar-2.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>
					
						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="upload/testimonials/testimonial-avatar-3.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>
					
						<div class="item">
							<div class="testimonial-post">
								<p> “Design-driven, customized and reliable solution for your token development and management system to automate sales processes.”</p>
								<div class="profile-test">
									<div class="avatar-holder">
										<img src="upload/testimonials/testimonial-avatar-4.jpg" alt="">
									</div>
									<div class="profile-data">
										<h2>Nicole Alatorre</h2>
										<p>Designer</p>
									</div>
								</div>
							</div>
						</div>

					</div></div></div>
		</section>
		<!-- End testimonial section -->

</body>
</html>




		@endsection