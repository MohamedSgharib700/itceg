<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div role="main" class="main">
				<section class="parallax section section-text-light section-parallax section-center mt-none mb-xl" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/digital-agency/slides/slide-digital-agency-1.jpg" style="min-height: 560px;">
					<div class="container">
						<div class="row mt-xl">
							<div class="col-md-8 col-md-offset-2 mt-xlg">
								<h1 class="mt-xlg font-weight-semibold text-uppercase"><?php echo e($abouts->title); ?></h1>
								<p class="mb-none lead"><?php echo e($abouts->content); ?></p>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row mb-xl mt-xlg">
						<div class="col-md-9">
							<div class="row">
								<div  class="col-md-6">

									<h4 class="font-weight-semibold"><?php echo e($contents->title1); ?></h4>
									<p class=""><?php echo $contents->content1; ?></p>
								</div>
								<div class="col-md-6">
									<h4 class="font-weight-semibold"><?php echo e($contents->title2); ?></h4>
									<p class=""><?php echo $contents->content2; ?></p>
								</div>
							</div>

							<blockquote class="mt-xl ml-lg blockquote-secondary">
								<p><?php echo $contents->content3; ?></p>
								<footer><?php echo e($contents->signing); ?></footer>
							</blockquote>
						</div>
						<div class="col-md-3 hidden-xs">
							<div class="row">
								<div class="col-md-6">
									<img class="img-responsive mt-xl mb-xl" src="<?php echo e(asset('aboutImages/'.$contents->image1)); ?>" alt="Office">
									<img class="img-responsive mb-xl" src="<?php echo e(asset('aboutImages/'.$contents->image2)); ?>" alt="Office">
								</div>
								<div class="col-md-6">
									<img class="img-responsive mb-xl" src="<?php echo e(asset('aboutImages/'.$contents->image3)); ?>" alt="Office">
									<img class="img-responsive mb-xl" src="<?php echo e(asset('aboutImages/'.$contents->image4)); ?>" alt="Office">
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-default">
					<div class="container">
						<div class="row">
							<div class="counters">
							<?php $__currentLoopData = $rports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rports): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-md-3 col-sm-6">
									<div class="counter counter-dark">
										<i class="fa fa-user"></i>
										<strong data-to="<?php echo e($rports->number1); ?>" data-append="+">0</strong>
										<label> <?php echo e($rports->text1); ?></label>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div>
				</section>

				<section class="m-xl pb-xl">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h2 class="mb-none mt-xl font-weight-semibold">المديرين</h2>
								<p class="lead mb-none"> </p>
								<div class="divider divider-primary divider-small divider-small-center mb-xl">
									<hr>
								</div>
							</div>
						</div>
						<div class="row mt-lg">
							<div class="col-md-8 col-md-offset-2">
								<div class="row mt-lg">

								<?php $__currentLoopData = $managers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-md-3 col-xs-12 center mb-lg">
										<h4 class="mt-md mb-none"><?php echo e($manager->manager); ?></h4>
										<p class="mb-none"><?php echo e($manager->specialty); ?></p>
										<span class="thumb-info-social-icons mt-sm pb-none">
											<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
										</span>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-default section-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h2 class="mb-none mt-xl font-weight-semibold">العملاء</h2>
								
								<div class="divider divider-primary divider-small divider-small-center mb-xl">
									<hr>
								</div>
							</div>
						</div>
						<div class="row mt-lg">
							<div class="content-grid content-grid-dashed mt-xlg mb-lg">
								<div class="row content-grid-row">

								<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clients): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="content-grid-item col-md-4 center">
										<img class="img-responsive" style="width: 100%; height: 200px"  src="<?php echo e(asset('clientAdd/'.$clients->image)); ?>" alt="">
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>