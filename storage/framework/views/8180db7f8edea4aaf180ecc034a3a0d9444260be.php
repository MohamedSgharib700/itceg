<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div role="main" class="main">
				<section class="parallax section section-text-light section-parallax section-center mt-none mb-xl" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/slides/slide-corporate-6.jpg">
					<div class="container">
						<div class="row mt-xl">
							<div class="col-md-8 col-md-offset-2 mt-xlg">
								<h1 class="mt-xlg font-weight-semibold text-uppercase"><?php echo e($content->title); ?></h1>
								<p class="mb-none lead"><?php echo e($content->sub_title); ?></p>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<ul class="nav nav-pills sort-source mt-xl mb-xl" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
							<li data-option-value="*" class=""><a href="#">عرض الكل</a></li>

					   <?php $__currentLoopData = $catalogue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                         
						<li data-option-value=".<?php echo e($catalogue->catalogue); ?>" class=""><a href="#"><?php echo e($catalogue->catalogue); ?></a></li>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
					</ul>

					<div class="row">
                      
						<div class="sort-destination-loader sort-destination-loader-showing">

							<ul class="portfolio-list portfolio-list-no-margins sort-destination mb-xl" data-sort-id="portfolio">

						 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							 <?php 
						 		      $filter = \App\catalogue_products::where('id',$products->catalogue_id)->first();
						 		    
							  ?>


								<li class="col-md-4 isotope-item m-none p-none <?php echo e($filter->catalogue); ?>">
								
									<div class="portfolio-item m-none">
										<a href="<?php echo e(route('showProduct',['product'=>$products->custom_url])); ?>">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-none">
												<span class="thumb-info-wrapper">
													<img style="height: 300px; width:500px;" src="<?php echo e(asset('productsAdd/'.$products->image)); ?>" class="img-responsive" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner"><?php echo e($products->title); ?></span>
														<span class="thumb-info-type"><?php echo e($products->sub_title); ?></span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>
								</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				
							</ul>

						</div>

					</div>
					  

						
				</div>
			</div>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


