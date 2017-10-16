@include('header')


            <div role="main" class="main">
                <div class="slider-container rev_slider_wrapper" style="height: 600px;">
                    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 600}">

                        <ul>

                        @foreach($slidess as $slide)
                            <li data-transition="fade">
                                <img src="{{asset('slides/'.$slide->image)}}"  
                                    alt="image"
                                    data-bgposition="center center" 
                                    data-bgfit="cover" 
                                    data-bgrepeat="no-repeat" 
                                    data-kenburns="on"
                                    data-duration="9000"
                                    data-ease="Linear.easeNone"
                                    data-scalestart="115"
                                    data-scaleend="100"
                                    data-rotatestart="0"
                                    data-rotateend="0"
                                    data-offsetstart="0 -200"
                                    data-offsetend="0 200"
                                    data-bgparallax="0"
                                    class="rev-slidebg">
                                <div class="tp-caption tp-caption-overlay tp-caption-overlay-primary main-label"
                                    data-x="center"
                                    data-y="265"
                                    data-start="1000"
                                    data-whitespace="nowrap"                         
                                    data-transform_in="y:[100%];s:500;"
                                    data-transform_out="opacity:0;s:500;"
                                    data-mask_in="x:0px;y:0px;">{{ $slide->title}}</div>
                                <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                                    data-x="center"
                                    data-y="358"
                                    data-start="2000"
                                    data-transform_in="y:[100%];opacity:0;s:500;">{{ $slide->content}}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-xl">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="tabs tabs-bottom tabs-center tabs-simple mt-sm mb-xl">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tabsNavigationSimpleIcons1" data-toggle="tab">
                                            <span class="featured-boxes featured-boxes-style-6 p-none m-none">
                                                <span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
                                                    <span class="box-content p-none m-none">
                                                        <i class="icon-featured icon-bulb icons"></i>
                                                    </span>
                                                </span>
                                            </span>                                 
                                            <p class="mb-none pb-none">{{$content->title1}}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tabsNavigationSimpleIcons2" data-toggle="tab">
                                            <span class="featured-boxes featured-boxes-style-6 p-none m-none">
                                                <span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
                                                    <span class="box-content p-none m-none">
                                                        <i class="icon-featured icon-mustache icons"></i>
                                                    </span>
                                                </span>
                                            </span>                                 
                                            <p class="mb-none pb-none">{{$content->title2}}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tabsNavigationSimpleIcons3" data-toggle="tab">
                                            <span class="featured-boxes featured-boxes-style-6 p-none m-none">
                                                <span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
                                                    <span class="box-content p-none m-none">
                                                        <i class="icon-featured icon-puzzle icons"></i>
                                                    </span>
                                                </span>
                                            </span>                                 
                                            <p class="mb-none pb-none">{{$content->title3}}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tabsNavigationSimpleIcons4" data-toggle="tab">
                                            <span class="featured-boxes featured-boxes-style-6 p-none m-none">
                                                <span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
                                                    <span class="box-content p-none m-none">
                                                        <i class="icon-featured icon-rocket icons"></i>
                                                    </span>
                                                </span>
                                            </span>                                 
                                            <p class="mb-none pb-none">{{$content->title4}}</p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                                        <div class="center">
                                            <p>  {!! $content->content1 !!}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                        <div class="center">
                                            <p>  {!! $content->content2 !!}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsNavigationSimpleIcons3">
                                        <div class="center">
                                            <p>  {!! $content->content3 !!}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsNavigationSimpleIcons4">
                                        <div class="center">
                                            <p>  {!! $content->content4 !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="center">
                                <a class="btn btn-default mt-md" href="{{url('services')}}">اعرف المزيد عن الخدمات <i class="fa fa-angle-right pl-xs"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <section class="section section-default section-default-scale-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 center">
                                <h2 class="mb-none mt-none font-weight-semibold text-light">{{$about->title}}</h2>
                                <p class="lead mb-xlg">{{$about->sub_title}}</p>
                                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                                    <hr>
                                </div>
                                <p class="mb-none text-light">{!! $about->content !!}</p>
                                <a class="btn btn-primary mt-xl mb-sm" href="{{url('about')}}">اعرف المزيد عنا <i class="fa fa-angle-right pl-xs"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mt-xl mb-none pb-none">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 center">
                                <h2 class="mb-none mt-xl font-weight-semibold">{{$Slider_title->title}}</h2>
                                <p class="lead mb-xlg">{{$Slider_title->sub_title}} </p>
                                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="carousel-areas mt-xl mb-none">
                                    <div class="owl-carousel owl-theme m-none" data-plugin-options="{'autoHeight': true, 'items': 1, 'margin': 10, 'nav': true, 'dots': false, 'stagePadding': 0}">
                                    @foreach($services as $service )
                                        <div>
                                            <a href="{{url('services#*')}}">
                                                <img width="400" height="600" alt="" class="" src="{{asset('servicesAdd/'.$service->image)}}">
                                            </a>
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section section-tertiary section-front mt-none">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 center">
                                <div class="row">
                                    <div class="col-md-12 center">
                                      
                                     <h2 class="mb-none mt-xl font-weight-semibold text-dark">{{$titles->title}}</h2>
                                        <p class="lead mb-xlg">{{$titles->sub_title}}</p>  
                                     <div class="divider divider-primary divider-small divider-small-center mb-xl">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row">
                                @foreach($clients as $clients)
                                    <div class="col-md-4">
                                        <div class="testimonial testimonial-style-2 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                                            <blockquote>
                                                <p>{!! $clients->content1 !!}</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <img src="{{asset('clientAdd/'.$clients->image)}}" class="img-responsive img-circle" alt="image">
                                                <p><strong>{{$clients->client1}}</strong><span>{{$clients->company_name1}}</span></p> 
                                            </div>
                                        </div>
                                    </div>                              
                                   @endforeach
                                </div>
                            </div>
                        </div>
                    </div>     
             </section>

                
                <div class="container">
                    <div class="row mt-xl">
                        <div class="counters counters-text-dark">
                        @foreach($reports as $report)
                            <div class="col-md-3 col-sm-6">
                                <div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                    <i class="fa fa-user"></i>
                                    <strong data-to="{{ $report->number}}" data-append="+">0</strong>
                                    <label>{{ $report->text}}</label>
                                    <p class="text-color-primary mb-xl">{{ $report->sub_text}}</p>
                                </div>
                            </div>
                 @endforeach
                         

                            
                        </div>

                    </div>
                </div>
            </div>
        
            



@include('footer')