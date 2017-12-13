<?php
/**
 * Template Name: Training Ladding Page
 Template Post Type: page
 */
?>
<?php get_header();  ?>
<?php echo " <!-- Start Training page template(training-page.php) --> "; ?>
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<?php $meta = get_post_meta( $post->ID, 'section', true ); ?>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      	<div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h2 class="modal-title" id="myModalLabel">Request More Information</h2>
				     </div>
				     <div class="modal-body">
				     	<h3 class="header">Have a question or Ready to register?</h3>
				     	<p class="modal-rules">Please enter the relevant information below and we will get back to you as soon as possible.</p>
				     </div>
<!-- 				     <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Save changes</button>
				     </div> -->
			    </div>
		  </div>
	</div>

	<section id="section-1" class="introduce parallax-window" data-parallax="scroll" data-image-src="<?php echo $meta['image']; ?>">				
		<div class="backgroung-horizontal-line">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h1>Oil Spills <span>Training</span><?php //the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="button-set">
						<a type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Start training</a>
						<p>or</p>
						<a href="#section-6" class="scroll-to-id">Learn more</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="page-description">
						<h2 class="first-line"><span >we prepared</span></h2>
						<p><span class="counter">319</span> highly qualified professional specialist</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="section-2" class="contact-form-seven">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="form-ctl">Contact us for an individual offer</h2>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<input type="text" placeholder="NAME">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<input type="email" placeholder="EMAIL">
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<input type="phone" placeholder="PHONE">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<input type="submit" value="Leave order">
				</div>
			</div>
		</div>
	</section>
	<section id="section-6" class="overview parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/assets/images/sos-overview-training.JPG'; ?>" >
		<h2 class="h2-overview-header">Overview</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
					<p class="overview-description">Combating oil spills is a specialized area, as well as a task which requires instant response. SOS now is offering certify DESMI IMO courses. Further to this, our training staff are able to provide the right training program for your company adding consultation and technical input during the planning stage of the course.

					The comprehensive training in the use of the equipment and how to respond to oil spill incidents will include suggestions on storage, maintenance and advice on installing the equipment in optimum positions to e ready to use.

					Our courses will be provide in English and Spanish</p>
				</div>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
					<h3 class="h3-training-timer"></h3>
				</div>
			</div>
		</div>
	</section>
	<section id="section-3" class="levels-of-training">
		<div class="header-section-line">
			<h2>Levels of training</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="column-level">	
						<h3 class="h3-level">Level 1</h3>
						<h4 class="h4-level-description">First responders</h4>
						<div class="image-level-1">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/Barrel-1.png'; ?>" alt="">
						</div>
						<p class="description-level">
							For technicians or supervisors who will participate in oil spill response teams...
						</p>
						<a class="button-level">Learn more</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="column-level">	
						<h3 class="h3-level">Level 2</h3>
						<h4 class="h4-level-description">Supervisors<br>&<br>On-scene commanders</h4>
						<div class="image-level-2">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/Barrel-2.png'; ?>" alt="">
						</div>
						<p class="description-level">
							For person  that respond as on scene commander during an emergency involving oil spill...
						</p>
						<a class="button-level">Learn more</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="column-level">	
						<h3 class="h3-level">Level 3</h3>
						<h4 class="h4-level-description">Administrators<br>&<br>Senior managers</h4>
						<div class="image-level-3">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/Barrel-3.png'; ?>" alt="">
						</div>
						<p class="description-level">
							For personnel with management and supervisory positions with the responsibility overseeing an emergency involving oil spill...
						</p>
						<a class="button-level">Learn more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="section-4" class="process parallax-window" data-parallax="scroll" data-image-src="<?php echo $meta['image']; ?>">
		<h2 class="h2-process-header">EMERGENCY RESPONSE TRAINING DIVISION</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<p class="precess-description">
						Our goal is to customize your training program in compliance with international and national standards as well to follow your company policy and requirements. We have a team of certified experts in the field that will provide to your company a well structure and standardized training program. Our programs are organized into specific levels of expertise that will assist you in the selection of the proper training course.
					</p>
					<p class="precess-description">
						In addition of our Oil Spill Response courses we also offer HAZWOPER courses under the OSHA standard 1910.120. Which include for Hazardous Waste and for Marine Oil Spills. This courses covers and meet or exceed the standard and can be tailored for our customers in and provide at their facilities. The levels of training we provide under these programs are:
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="process-step">
						<h3 class="h3-process">Awareness</h3>
						<!-- <span>step</span></h3> -->
						<p class="description-process">Awareness-level training courses teach people general skills. Awareness is the key to preventative management - catching potential problems before they start.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="process-step">
						<h3 class="h3-process">Operations</h3>
						<p class="description-process">Level of training combines planning and implementing with a well-trained team. Additional training in incident management, specific skills and effective decision-making is necessary for this level.</p>
					</div>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="process-step">
						<h3 class="h3-process">Technician</h3>
						<p class="description-process">These courses are designed for offensive operations technician. Most offerings include intense, hand-on fieldwork, which is required to learn the technical skills required to effectively deal with a variety of emergency situations.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="process-step">
						<h3 class="h3-process">Specialist</h3>
						<p class="description-process">These targeted courses are for specific competences. Our specialty courses have been designed to teach important skills, to responders for situations in corporate settings or major events.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="section-9" class="advantages-description">
		<div class="table-wrap" cellspacing="0" cellpadding="0" >

				<div class="table-direction">
					<div class="table-cell">
						<img class="illustration"  src="<?php echo get_template_directory_uri() . '/assets/images/training-sos-safety-com-cut.png'; ?>" alt="">
					</div>
					<div class="table-cell">
						<div class="advantages-text">
							<h2 class="adv-desc-h2 left-side">CONSULTING & TRAINING SERVICES</h2>						
							<p class="left-side">Our team of consultants has over 60 years in emergency response experience. With expertise in emergency management, risk assessment and performed specialized industrial emergency response training from industrial firefighting, hazardous materials, hazardous waste operations, rescue, confined space, oil spill response and incident command systems. We develop table top exercise programs, major exercise planning process, emergency operations center simulations and exercises at different levels of the organization.</p>
						</div>
					</div>
				</div>

				<div class="table-direction">
					<div class="table-cell">
						<div class="advantages-text">
							<h2 class="adv-desc-h2 right-side">Coverage</h2>						
							<p class="right-side">Within Latin America, Central America and the Caribbean we provide specialized services emergency response  from incident command system, crisis management and business continuity planning, and conducted industrial response training, industrial firefighting NFPA 1081, fire instructor, rescue and hazmat response specialist courses.</p>
						</div>
					</div>
					<div class="table-cell">
						<img class="illustration" src="<?php echo get_template_directory_uri() . '/assets/images/Latin-America-Central-America-the-Caribbean-sos-safety-Coverage.png'; ?>" alt="">
					</div>
				</div>

				<div class="table-direction">
					<div class="table-cell">
						<img class="illustration" src="<?php echo get_template_directory_uri() . '/assets/images/sos-safety-ship-reaction.jpg'; ?>" alt="">
					</div>
					<div class="table-cell">
						<div class="advantages-text">
							<h2 class="adv-desc-h2 left-side">Industry Services</h2>						
							<p class="left-side">
								SOS Safety offers a wide variety of services including but not limited to design and implement Emergency, Crisis and Continuity Management Programs.

								SOS Safety develops response plans for a wide range of operations such as oil and gas fields and facilities, refineries, pipelines, storage and loading terminals, gas stations, chemical and manufacturing plants among others. 
								 
								SOS Safety offers a wide variety of training courses including but not limited to, Incident Command System, Incident Management Team, Oil Spill Response Planning, and Business Continuity Planning. Our Training programs will be conducted by certified and experienced international trainers who will conduct all training sessions in English, Spanish and Portuguese. Developing Training Material and Perform Training Courses

							</p>
						</div>
					</div>
				</div>

				<div class="table-direction">
					<div class="table-cell">
						<div class="advantages-text">
							<h2 class="adv-desc-h2 right-side">Exercise Development and Facilitation.</h2>						
							<p class="right-side">SOS SAFETY Staff has several years of experience conducting Drills and Exercises for the Oil & Gas industry. We have designed exercises for a wide variety of incident scenarios and facility operations like oil and gas fields (offshore and onshore), pipelines, tank farms, refineries, gas stations, airports and fuel and lubricants transportation systems</p>
						</div>
					</div>
					<div class="table-cell">
						<img class="illustration" src="<?php echo get_template_directory_uri() . '/assets/images/sos-safety-staff.jpg'; ?>" alt="">
					</div>
				</div>
		</div>
	</section>
	<section id="section-5" class="testimonials">
		<div class="header-section-line">
			<h2>Testimonials</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					     <div class="row">
					     	<div class="col-xs-4">
					     		<div class="logo-testimonials">
					     			<img src="<?php echo get_template_directory_uri() . '/assets/images/testimonials-1.jpg'; ?>" alt="">
					     		</div>
					     	</div>
					     	<div class="col-xs-8">
					     		<h3 class="h3-name-testimonials">Jack Brandon — supervisor of west department Florida coast </h3>
					     	</div>
					     	<div class="col-xs-12">
					     		<p class="descriptions-testimonials">
					     			Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam sit amet, consectetur adipisicing elit. <br>Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam adipisci vitae temporibus.
					     			Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam adipisci vitae temporibus.
					     		</p>
					     	</div>
					     </div>
					    </div>
					    <div class="item ">
					     <div class="row">
					     	<div class="col-xs-4">
					     		<div class="logo-testimonials">
					     			<img src="<?php echo get_template_directory_uri() . '/assets/images/testimonials-2.jpg'; ?>" alt="">
					     		</div>
					     	</div>
					     	<div class="col-xs-8">
					     		<h3 class="h3-name-testimonials">Corey Ruck — supervisor of west department Florida coast </h3>
					     	</div>
					     	<div class="col-xs-12">
					     		<p class="descriptions-testimonials">
					     			Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam sit amet, consectetur adipisicing elit. Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam adipisci vitae temporibus. <br>
					     			Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam adipisci vitae temporibus.
					     		</p>
					     	</div>
					     </div>
					    </div>
					    <div class="item">
					     <div class="row">
					     	<div class="col-xs-4">
					     		<div class="logo-testimonials">
					     			<img src="<?php echo get_template_directory_uri() . '/assets/images/testimonials-3.jpg'; ?>" alt="">
					     		</div>
					     	</div>
					     	<div class="col-xs-8">
					     		<h3 class="h3-name-testimonials">Robert Kaluza  — supervisor of Deepwater Horizon</h3>
					     	</div>
					     	<div class="col-xs-12">
					     		<p class="descriptions-testimonials">
					     			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam sit amet, consectetur adipisicing elit. <br>Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam adipisci vitae temporibus. <br>
					     			Cupiditate omnis sequi ipsam velit fuga illum, atque iusto tenetur sapiente rem amet quod maxime, nostrum delectus non quisquam adipisci vitae temporibus.
					     		</p>
					     	</div>
					     </div>
					    </div>
					</div>
					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					  	<i class="fa fa-angle-left fa-5x" aria-hidden="true"></i>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					  	<i class="fa fa-angle-right fa-5x" aria-hidden="true"></i>
					  </a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="8-section" class="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h2 class="h2-contactus-header">Contact us</h2>
					<div class="big-contact-form-seven">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Name</span>
						  <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon2">Email</span>
						  <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon2">
						</div>
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon3">Business name</span>
						  <input type="text"  class="form-control" placeholder="business name" aria-describedby="basic-addon3">
						</div>
						<div class="input-group">
						  <textarea name="" id="" class="form-textarea" cols="30" rows="10"></textarea>
						</div>
						<div class="input-group">
						  <input type="submit" class="form-control" value="Leave a message" aria-describedby="basic-addon4">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php echo " <!-- End Training page template(training-page.php) --> "; ?>
<?php get_footer();  ?>
<?php  ?>