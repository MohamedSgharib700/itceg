<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div role="main" class="main">
				<section class="section section-text-light section-default section-default-scale-8 section-center mt-none">
					<div class="container">
					     
						<div class="row mt-xl">

							<div class="col-md-8 col-md-offset-2 mt-xlg">
								<h1 class="mt-xlg font-weight-semibold text-uppercase"><?php echo e($contact->title1); ?></h1>
								<p class="mb-none lead"><?php echo e($contact->contact); ?></p>
							</div>
						</div>
						<div class="row mt-lg">
							<div class="col-md-10 col-md-offset-1">
								<div class="row mt-lg align-left">
									<div class="col-md-5 mb-lg">
										<h4 class="mt-md mb-none"><?php echo e($contact->title2); ?></h4>
										<ul class="list list-icons mt-xlg">
											<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> <?php echo e($contact->address1); ?></li>
											<li><i class="fa fa-phone"></i> <strong>Phone:</strong> <?php echo e($contact->phone1); ?></li>
											<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="<?php echo e($contact->url1); ?>"><?php echo e($contact->email1); ?></a></li>
										</ul>
									</div>
									<div class="col-md-5 col-md-offset-2 mb-lg">
										<h4 class="mt-md mb-none"><?php echo e($contact->title3); ?></h4>
										<ul class="list list-icons mt-xlg">
											<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> <?php echo e($contact->address2); ?></li>
											<li><i class="fa fa-phone"></i> <strong>Phone:</strong> <?php echo e($contact->phone2); ?></li>
											<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="<?php echo e($contact->url2); ?>"><?php echo e($contact->email2); ?></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row mt-lg">
								<div class="col-md-10 col-md-offset-1 center">

									<div class="divider divider-primary divider-small divider-small-center mb-xl">
										<hr>
									</div>

									<h2 class="mb-none mt-xl font-weight-semibold"><?php echo e($contact->title4); ?></h2>

									<div class="divider divider-style-4 divider-primary divider-top-section-custom taller">
										<i class="fa fa-chevron-down"></i>
									</div>

								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row mt-xl">
						<div class="col-md-10 col-md-offset-1">

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>

							<form  action="contactss" method="POST">
							<?php if(Session::has('message')): ?>
                         <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
                           <?php endif; ?>
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control input-lg" name="name" id="name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control input-lg" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control input-lg" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="10" class="form-control input-lg" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xs" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>

					</div>

				</div>


				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map">
			     
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27627.94785192443!2d31.260760944904476!3d30.051386200455752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2z2KfZhNmC2KfZh9ix2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1502025210481" width="1350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			</div>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

