<?php /*
Template Name: Contacts
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<div class="rte">
                        <?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="contact-section section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<?php
						$image = get_field('nuotrauka');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="col-md-6 contact-right">
						<div class="">
							<h1><?php the_field('virsutinis_heading'); ?></h1>
							<p><?php the_field('gatve_ir_namo_numeris'); ?><br>
								 <?php the_field('pasto_kodas_ir_miestas'); ?></p>

							<p><i class="fas fa-phone"></i><?php the_field('telefono_numeris'); ?><br>
								 <i class="fas fa-envelope"></i><?php the_field('el_pastas'); ?></p>
						</div>
						<div class="">
							<h2><?php the_field('apatinis_heading'); ?></h2>
							<p><?php the_field('darbo_laikas_1'); ?><br>
								<?php the_field('darbo_laikas_2'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4588.672799574896!2d23.8903599!3d54.8970176!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7220e5526b81b%3A0xfd6ed059db3a6a68!2sA.+Mapu+g.+5%2C+Kaunas+44284!5e0!3m2!1sen!2slt!4v1555182953998!5m2!1sen!2slt" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>







	</div>

			<?php endwhile; endif; ?>

<?php get_footer(); ?>
