@extends("front.master")

@section("title",'Home | PN Education')


@section("content")




<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>MPCT COLLEGE</h1>
				<ul class="page-depth">
					<li><a href="index.html">PN Education</a></li>
					<li><a href="teachers.html">MPCT</a></li>
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
						@foreach($mpct as $p)
						<div class="col-lg-3 col-md-6">
							
							<div class="teacher-post">
								<a href="#">
									<img style="width: 100%; height: 280px;" src="{{ url('/upload/'.$p->image) }}" alt="">
									<div class="hover-post"> 
										
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