<?php /*
Template Name: Homepage
Description: A Page Template for custom page.
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!---
		<div class="container title">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<div class="rte">
                        <?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
--->
    <div id="main-content" class="visual-container">

        <?php if( have_rows('pagrindinis_slideris') ): ?>
            <div id="slider" class="slider-section section">
                <div class="slider-inner">
                    <div class="owl-carousel owl-one owl-theme">
                        <?php while( have_rows('pagrindinis_slideris') ): the_row();
                            $image = get_sub_field('nuotrauka');
                            ?>
                            <div class="item">
                                <a href="#">
                                    <img src="<?php echo $image['url']; ?>" title="">
                                    <p><?php the_sub_field('aprasymas'); ?></p>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="logo-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo-inner">
                            <?php
                            $image = get_field('logo_field');
                            if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>

                            <p><?php the_field('logo_aprasymas'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_field('naujienos_header'); ?></h3>
                        <p><?php the_field('naujienos_tekstas'); ?></p>
                        <div class="videoContainer">
                            <div class="embed-container">
                                <?php the_field('video'); ?>
                            </div>
                        </div>
                        <a class="button" href="http://localhost/salve_wp/prekes/" role="button">
                            <div class="button-inner">
                                <?php the_field('mygtuko_tekstas'); ?>
                            </div>
                        </a>
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

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
        </div>

    </div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>
