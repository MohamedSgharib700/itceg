<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


            <div role="main" class="main">
                <div class="slider-container rev_slider_wrapper" style="height: 600px;">
                    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 600}">

                        <ul>

                        <?php $__currentLoopData = $slidess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-transition="fade">
                                <img src="<?php echo e(asset('slides/'.$slide->image)); ?>"  
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
                                    data-mask_in="x:0px;y:0px;"><?php echo e($slide->title); ?></div>
                                <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                                    data-x="center"
                                    data-y="358"
                                    data-start="2000"
                                    data-transform_in="y:[100%];opacity:0;s:500;"><?php echo e($slide->content); ?></div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            <p class="mb-none pb-none"><?php echo e($content->title1); ?></p>
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
                                            <p class="mb-none pb-none"><?php echo e($content->title2); ?></p>
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
                                            <p class="mb-none pb-none"><?php echo e($content->title3); ?></p>
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
                                            <p class="mb-none pb-none"><?php echo e($content->title4); ?></p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                                        <div class="center">
                                            <p>  <?php echo $content->content1; ?></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                        <div class="center">
                                            <p>  <?php echo $content->content2; ?></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsNavigationSimpleIcons3">
                                        <div class="center">
                                            <p>  <?php echo $content->content3; ?></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsNavigationSimpleIcons4">
                                        <div class="center">
                                            <p>  <?php echo $content->content4; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="center">
                                <a class="btn btn-default mt-md" href="<?php echo e(url('services')); ?>">اعرف المزيد عن الخدمات <i class="fa fa-angle-right pl-xs"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <section class="section section-default section-default-scale-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 center">
                                <h2 class="mb-none mt-none font-weight-semibold text-light"><?php echo e($about->title); ?></h2>
                                <p class="lead mb-xlg"><?php echo e($about->sub_title); ?></p>
                                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                                    <hr>
                                </div>
                                <p class="mb-none text-light"><?php echo $about->content; ?></p>
                                <a class="btn btn-primary mt-xl mb-sm" href="<?php echo e(url('about')); ?>">اعرف المزيد عنا <i class="fa fa-angle-right pl-xs"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mt-xl mb-none pb-none">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 center">
                                <h2 class="mb-none mt-xl font-weight-semibold"><?php echo e($Slider_title->title); ?></h2>
                                <p class="lead mb-xlg"><?php echo e($Slider_title->sub_title); ?> </p>
                                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="carousel-areas mt-xl mb-none">
                                    <div class="owl-carousel owl-theme m-none" data-plugin-options="{'autoHeight': true, 'items': 1, 'margin': 10, 'nav': true, 'dots': false, 'stagePadding': 0}">
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div>
                                            <a href="<?php echo e(url('services#*')); ?>">
                                                <img width="400" height="600" alt="" class="" src="<?php echo e(asset('servicesAdd/'.$service->image)); ?>">
                                            </a>
                                        </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                      
                                     <h2 class="mb-none mt-xl font-weight-semibold text-dark"><?php echo e($titles->title); ?></h2>
                                        <p class="lead mb-xlg"><?php echo e($titles->sub_title); ?></p>  
                                     <div class="divider divider-primary divider-small divider-small-center mb-xl">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row">
                                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clients): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4">
                                        <div class="testimonial testimonial-style-2 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                                            <blockquote>
                                                <p><?php echo $clients->content1; ?></p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <img src="<?php echo e(asset('clientAdd/'.$clients->image)); ?>" class="img-responsive img-circle" alt="image">
                                                <p><strong><?php echo e($clients->client1); ?></strong><span><?php echo e($clients->company_name1); ?></span></p> 
                                            </div>
                                        </div>
                                    </div>                              
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>     
             </section>

                
                <div class="container">
                    <div class="row mt-xl">
                        <div class="counters counters-text-dark">
                        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                    <i class="fa fa-user"></i>
                                    <strong data-to="<?php echo e($report->number); ?>" data-append="+">0</strong>
                                    <label><?php echo e($report->text); ?></label>
                                    <p class="text-color-primary mb-xl"><?php echo e($report->sub_text); ?></p>
                                </div>
                            </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         

                            
                        </div>

                    </div>
                </div>
            </div>
        
            



<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>