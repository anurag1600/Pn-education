@extends("front.master")

@section("title",'Home | PN Education')


@section("content")




<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Our Team</h1>
				<ul class="page-depth">
					<li><a href="index.html">PN Education</a></li>
					<li><a href="teachers.html">Our Team</a></li>
				</ul>
			</div>
		</section>
		<!-- End page-banner-section -->

		<!-- teachers-section 
			================================================== -->
		<section class="teachers-section">
			<div class="container">
				<div class="teachers-box">
					<div class="row">
						@foreach($our as $p)
						<div class="col-lg-3 col-md-6">
							
							<div class="teacher-post">
								<a href="single-teacher.html">
									<img style="width: 100%; height: 280px;" src="{{ url('/upload/'.$p->image) }}" alt="">
									<div class="hover-post">
										<h2>{{$p->name}}</h2>
										<span>{{$p->discription}}</span>
									</div>
								</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>	
			</div>
		</section>
		<!-- End teachers section -->


@endsection