<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
<section class="section-padding <?php if(is_page(11)) :  else : ?>darker-bg<?php endif; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
				<div class="template-title text-center">
					<h2>We Provide Huge Range of Services</h2>
					<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- single service -->
			<?php
			global $post;
			$args = array( 'posts_per_page' => 6, 'post_type'=> 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
				<div class="col-sm-6 col-md-4">
					<div class="services-tiem">
						<?php the_post_thumbnail('thumbnail',array('class' => 'hvr-buzz-out')) ?>
						<h3><a href="<?= get_post_meta($post->ID, 'link', true) ?>"><?= the_title(); ?> </a></h3>
						<p><?= the_content(); ?></p>
					</div>
				</div>
			<?php endforeach; wp_reset_query(); ?>
			<!-- single service -->

		</div>
	</div>
	</section><!-- end services section -->