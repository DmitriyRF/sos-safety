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
						<a href="">Start training</a>
						<p>or</p>
						<a href="#section-6" class="scroll-to-id">Learn more</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="page-description">
						<h2 class="first-line"><span >we prepared</span></h2>
						<p><span class="counter">849</span> highly qualified professional specialist</p>
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
		<h2 class="h2-process-header">Learning process</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="process-step">
						<h3 class="h3-process">1<br>
						<span>step</span></h3>
						<p class="description-process">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ea libero minus dolor reiciendis nostrum, facilis quos. Laudantium tempore, dignissimos, provident sunt placeat necessitatibus neque ipsam magnam delectus laboriosam reiciendis.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="process-step">
						<h3 class="h3-process">2<br>
						<span>step</span></h3>
						<p class="description-process">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam harum molestiae dignissimos accusamus cum reiciendis illum fugiat consequuntur sapiente sit animi illo consectetur iure dolore incidunt voluptatibus, facilis consequatur dolorum!</p>
					</div>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="process-step">
						<h3 class="h3-process">3<br>
						<span>step</span></h3>
						<p class="description-process">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima hic eos perspiciatis assumenda repellendus a repudiandae eius, odit nulla corporis reiciendis maxime molestiae, maiores unde eaque, earum sint libero neque?</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="process-step">
						<h3 class="h3-process">4<br>
						<span>step</span></h3>
						<p class="description-process">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo tempora vitae dignissimos necessitatibus quibusdam. Similique inventore, enim, saepe error fuga vitae optio minus perspiciatis, quo voluptatem recusandae repellat. Sint, porro.</p>
					</div>
				</div>
			</div>
		</div>
		<h2 class="h2-process-header">Details</h2>
		<div class="details-tab-wrapper">
			<div class="container">
				<div class="row">
					<!-- Nav tabs -->
					<div class="col-xs-12">
						<ul class="nav nav-pills" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Day 1</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Day 2</a></li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Day 3</a></li>
							<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Day 4</a></li>
						</ul>
					</div>
					<div class="col-xs-12">
						<div class="tab-content">
						  <div role="tabpanel" class="tab-pane fade in active" id="home">
						  	<div class="row">
							  	<div class="col-xs-12 col-sm-6">
									<ol>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptas eum porro iste esse. Ea laborum eligendi, facere labore aliquid, cumque consequuntur, sapiente quaerat vero maxime est odit officiis facilis!</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem id cumque earum voluptates officia minima, nesciunt, accusantium repellendus eaque aspernatur rerum minus error totam nam reprehenderit animi, voluptas! Quas, debitis!</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptas eum porro iste esse. Ea laborum eligendi, facere labore aliquid, cumque consequuntur, sapiente quaerat vero maxime est odit officiis facilis!</li>
									</ol>
							  	</div>
							  	<div class="col-xs-12 col-sm-6">
							  		<img src="<?php echo get_template_directory_uri() . '/assets/images/day-training.jpg'; ?>" alt="" class="image-details">
							  	</div>
						  	</div>

						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="profile">
						  	<div class="row">
						  		<div class="col-xs-12 col-sm-6">
									<ol>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam hic nostrum rem voluptas nulla sed alias molestias, architecto quaerat perferendis voluptatibus perspiciatis dignissimos mollitia magnam at, debitis fugit praesentium enim.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptas eum porro iste esse. Ea laborum eligendi, facere labore aliquid, cumque consequuntur, sapiente quaerat vero maxime est odit officiis facilis!</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem id cumque earum voluptates officia minima, nesciunt, accusantium repellendus eaque aspernatur rerum minus error totam nam reprehenderit animi, voluptas! Quas, debitis!</li>
									</ol>
						  		</div>
						  		<div class="col-xs-12 col-sm-6">
						  			<img src="<?php echo get_template_directory_uri() . '/assets/images/day-training.jpg'; ?>" alt="" class="image-details">
						  		</div>
						  	</div>
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="messages">
						  	<div class="row">
						  		<div class="col-xs-12 col-sm-6">
									<ol>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima modi rem corrupti similique possimus quidem, dicta officia aliquid soluta optio sequi nam explicabo, illo quaerat qui ut quis atque dignissimos?</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam hic nostrum rem voluptas nulla sed alias molestias, architecto quaerat perferendis voluptatibus perspiciatis dignissimos mollitia magnam at, debitis fugit praesentium enim.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptas eum porro iste esse. Ea laborum eligendi, facere labore aliquid, cumque consequuntur, sapiente quaerat vero maxime est odit officiis facilis!</li>
									</ol>
						  		</div>
						  		<div class="col-xs-12 col-sm-6">
						  			<img src="<?php echo get_template_directory_uri() . '/assets/images/day-training.jpg'; ?>" alt="" class="image-details">
						  		</div>
						  	</div>
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="settings">
						  	<div class="row">
						  		<div class="col-xs-12 col-sm-6">
									<ol>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima modi rem corrupti similique possimus quidem, dicta officia aliquid soluta optio sequi nam explicabo, illo quaerat qui ut quis atque dignissimos?</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptas eum porro iste esse. Ea laborum eligendi, facere labore aliquid, cumque consequuntur, sapiente quaerat vero maxime est odit officiis facilis!</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima modi rem corrupti similique possimus quidem, dicta officia aliquid soluta optio sequi nam explicabo, illo quaerat qui ut quis atque dignissimos?</li>
									</ol>
						  		</div>
						  		<div class="col-xs-12 col-sm-6">
						  			<img src="<?php echo get_template_directory_uri() . '/assets/images/day-training.jpg'; ?>" alt="" class="image-details">
						  		</div>
						  	</div>
						  </div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<h2 class="h2-process-header">Our advantages</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="advantages-set">
						<div class="icon-advantage">
							<i class="fa fa-binoculars fa-3x" aria-hidden="true"></i>
						</div>
						<h3 class="h3-advantage">Experienced coach</h3>
						<p class="decription-advantage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nam illum, quos, officia iure reiciendis dolorem exercitationem sapiente tempora vel hic ea perferendis eos ullam sunt earum nostrum! Deleniti, consequuntur!</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="advantages-set">
						<div class="icon-advantage">
							<i class="fa fa-book fa-3x" aria-hidden="true"></i>
						</div>
						<h3 class="h3-advantage">Modern Equipment</h3>
						<p class="decription-advantage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, laudantium dolorum veritatis. Tempora optio, pariatur quos ut incidunt cum, in eum, laudantium, blanditiis repellat sit consectetur unde iusto assumenda ea.</p>
					</div>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="advantages-set">
						<div class="icon-advantage">
							<i class="fa fa-exclamation-triangle fa-3x" aria-hidden="true"></i>
						</div>
						<h3 class="h3-advantage">Rich library</h3>
						<p class="decription-advantage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugit, veniam laboriosam corrupti asperiores minima rerum impedit obcaecati perspiciatis, dolor quasi accusantium corporis officiis provident. Iusto perspiciatis ipsa, dolor labore.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="advantages-set">
						<div class="icon-advantage">
							<i class="fa fa-ship fa-3x" aria-hidden="true"></i>
						</div>
						<h3 class="h3-advantage">Bests results</h3>
						<p class="decription-advantage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, unde necessitatibus ducimus eaque minus impedit! Qui, voluptate, reiciendis aperiam ad dolores in delectus rerum vel dolorem. Soluta molestias alias, facere.</p>
					</div>
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
	<section id="section-7" class="questions invert">
		<h2 class="h2-questions-header">Questions</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Question #1
						        </a>
						      </h4>
						    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						      <div class="panel-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTwo">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						        	Question #2
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="panel-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingThree">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						         	Question #3
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						      <div class="panel-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						</div>
				</div>
				<!-- <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">	</div> -->
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