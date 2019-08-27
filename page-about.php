<?php /*
Template Name: About
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container about-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<div class="rte">
					</div>
				</div>
			</div>
		</div>


		<div class="about-us-section section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<?php
						$image = get_field('nuotrauka');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="col-md-6">
						<div class="centered">
							<p><?php the_field('tekstas_prie_nuotraukos'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="idea-section section">
			<div class="container">
				<div class="row">
					<div class="idea-section-inner">
						<div class="col-md-4">
							<h2><?php the_field('kaires_heading'); ?></h2>
							<p><?php the_field('kaires_tekstas'); ?></p>
						</div>
						<div class="col-md-4">
							<h2><?php the_field('vidurio_heading'); ?></h2>
							<p><?php the_field('vidurio_tekstas'); ?></p>
							</div>
						<div class="col-md-4">
							<h2><?php the_field('desines_heading'); ?></h2>
							<p><?php the_field('desines_tekstas'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="follow-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="follow-inner">
						<h3><?php the_field('follow'); ?></h3>
						<a target="_blank" href="https://www.facebook.com/FashionBySlave/">
							<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg" alt="facebook">
						</a>
						<a target="_blank" href="https://www.instagram.com/slave_to/">
							<img class="middle" src="<?php bloginfo('template_directory'); ?>/images/instagram.svg" alt="instagram">
						</a>
						<a target="_blank" href="https://www.etsy.com/shop/FashionBySlave?ref=search_shop_redirect">
							<img src="<?php bloginfo('template_directory'); ?>/images/etsy.svg" alt="etsy" >
						</a>
					 </div>
					</div>
				</div>
			</div>
		</div>


	</div>
			<?php endwhile; endif; ?>

<?php get_footer(); ?>
