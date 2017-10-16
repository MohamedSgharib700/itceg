@include('header')

<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 320px; margin-bottom: -25px;">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 320, 'spinner': 'off'}">
						<ul>
							<li data-transition="fade">
								<img src="video/landing.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="rs-background-video-layer" 
									data-forcerewind="on" 
									data-volume="mute" 
									data-videowidth="100%" 
									data-videoheight="100%" 
									data-videomp4="video/landing.mp4" 
									data-videopreload="preload" 
									data-videoloop="loop" 
									data-forceCover="1" 
									data-aspectratio="16:9" 
									data-autoplay="true" 
									data-autoplayonlyfirsttime="false"
								></div>
								
								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li>
						</ul>
					</div>
				</div>

				<div class="container">
					<div class="row mt-xl">
						<div class="col-md-8 col-md-offset-2 mt-xlg title-with-video-custom center">
							<h1 class="mt-xlg font-weight-semibold text-uppercase">منتجاتنا</h1>
							<p class="mb-none lead">اقسام المنتجات المتاحه</p>
						</div>
					</div>
				</div>
				<section class="section section-default section-footer section-color-custom mt-none">
					<div class="container">
						<div class="row mt-xl">
							<div class="col-md-4">
								<img class="img-responsive appear-animation" style="height: 300px; width:500px;" src="
							 {{asset('productsAdd/'.$products->image)}}" alt="layout styles" data-appear-animation="fadeInLeft">
							</div>

							<div class="col-md-7 col-md-offset-1">
								<h2 class="mb-xs mt-xl font-weight-semibold">{{$products->title}}.</h2>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<p class="lead">
									{!! $products->detils !!}
								</p>
								

							</div>
						</div>
					</div>
				</section>
			</div>

@include('footer')