<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
	<section class="section-padding darker-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
					<div class="intro-title text-center">
						<h2>Welcome to the Neuron Finance</h2>
						<div class="hidden-xs">
							<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				global $post;
				$args = array( 'posts_per_page' => 3, 'post_type'=> 'feature', 'orderby' => 'menu_order', 'order' => 'ASC' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>
					<div class="col-md-4">
						<div class="single-intro">
							<div style="background-image: url(<?= the_post_thumbnail_url('large'); ?>)" class="intro-img intro-bg1"></div>
							<div class="intro-details text-center">
								<h3><?= the_title(); ?></h3>
								<p><?= the_content(); ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; wp_reset_query(); ?>
				<!-- single intro -->
				
			</div>
		</div>
	</section><!-- intro area end -->