<?php

/*
Template Name: About Template
*/
get_header();


while ( have_posts() ) : the_post();
	?>
	<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
	<section <?php if(has_post_thumbnail()) : ?>style="background-image: url(<?php the_post_thumbnail_url('large') ?>)" <?php endif; ?> class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- breadcrumb content -->
					<div class="page-breadcrumbd">
						<h2><?php the_title() ?></h2>
						<p><a href="<?= site_url() ?>">Home</a> / <a href=""><?php the_title();?></a></p>
					</div><!-- end breadcrumb content -->
				</div>
			</div>
		</div>
	</section><!-- end breadcrumb -->

	<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
	<section class="block ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
					<section class="block about-us-block section-padding">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!-- block text -->
									<div class="block-text">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						</div>
					</section><!-- block area end -->
				</div>
			</div>
		</div>
	</section><!-- block area end -->
	<?php get_template_part('content/promo'); ?>
	<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
	<section class="accordian-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="accorian-item">

						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<!-- accordian item-1 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Collaboratively utilize resource sucking sources before sticky.
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Distinctively productize progressive deliverables before diverse products. Conveniently underwhelm next-generation leadership for end-to-end mindshare. Holisticly communicate 2.0 niches and accurate methods of empowerment. Completely myocardinate collaborative technology.
									</div>
								</div>
							</div>

							<!-- accordian item-2 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Proactively brand holistic applications before.
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
									</div>
								</div>
							</div>

							<!-- accordian item-3 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Proactively brand holistic applications before.
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										Distinctively productize progressive deliverables before diverse products. Conveniently underwhelm next-generation leadership for end-to-end mindshare. Holisticly communicate 2.0 niches and accurate methods of empowerment. Completely myocardinate collaborative technology.
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<!-- accordian right text block -->
					<div class="accordian-right-content">
						<h2>Know More About Us</h2>
						<p>Intrinsicly synergize end-to-end results after robust models. Enthusiastically initiate wireless solutions via leading-edge users. Phosfluorescently repurpose world-class networks whereas bleeding-edge communities. Intrinsicly generate just in time infomediaries with resource maximizing deliverables. Credibly disintermediate collaborative ideas through visionary methods of empowerment.</p>
						<p>Globally reintermediate team building best practices with mission-critical "outside the box" thinking. Efficiently mesh synergistic manufactured products rather than turnkey e-commerce. Globally drive.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end accordian section -->
<?php endwhile; ?>
<?php get_footer(); ?>