@include('header')

<div role="main" class="main">
				<section class="parallax section section-text-light section-parallax section-center mt-none mb-xl" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/slides/slide-corporate-6.jpg">
					<div class="container">
						<div class="row mt-xl">
							<div class="col-md-8 col-md-offset-2 mt-xlg">
								<h1 class="mt-xlg font-weight-semibold text-uppercase">{{$content->title}}</h1>
								<p class="mb-none lead">{{$content->sub_title}}</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<ul class="nav nav-pills sort-source mt-xl mb-xl" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
							<li data-option-value="*" class=""><a href="#">عرض الكل</a></li>
					  @foreach($catalogue as $catalogue)
						<li data-option-value=".{{$catalogue->catalogue_name}}" class=""><a href="#">{{$catalogue->catalogue_name}}</a></li>
						@endforeach
						
					</ul>

					<div class="row">
                      
						<div class="sort-destination-loader sort-destination-loader-showing">

							<ul class="portfolio-list portfolio-list-no-margins sort-destination mb-xl" data-sort-id="portfolio">

						 @foreach($services as $service)
							 @php
						 		      $filter = \App\catalogue_services::where('id',$service->catalogue_id)->first();
						 		    
							 @endphp


								<li class="col-md-4 isotope-item m-none p-none {{$filter->catalogue_name}}">
								
									<div class="portfolio-item m-none">
										<a href="{{route('showService',['service'=>$service->custom_url])}}">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-none">
												<span class="thumb-info-wrapper">
													<img style="height: 300px; width:500px;"  src="{{asset('servicesAdd/'.$service->image)}}" class="img-responsive" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">{{$service->title}}</span>
														<span class="thumb-info-type">{{$service->sub_title}}</span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>
								</li>
						@endforeach				
							</ul>

						</div>

					</div>
				</div>
			</div>



@include('footer')
