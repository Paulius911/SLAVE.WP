<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="UTF-8" />
        <title>
            <?php if (is_home()) { echo bloginfo('name');
            } elseif (is_front_page()) {
                echo bloginfo('name');
            } elseif (is_404()) {
                _e("404 error nothing found", "itb");
            } elseif (is_category()) {
                _e("Category", "itb"); wp_title('');
            } elseif (is_search()) {
                _e("Search", "itb");
            } elseif ( is_day() || is_month() || is_year() ) {
                _e("Archive", "itb"); wp_title('');
            } else {
                echo wp_title('');
            }
            ?>
        </title>
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	    <?php }?>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;subset=latin-ext" rel="stylesheet">

		<?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/itbextra.css" media="screen" />
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
				<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	</head>


    <body <?php body_class( $class ); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 logo-holder">
                    <a class="logo" href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <div class="col-sm-8 middle">
                    <nav class="" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
                                <span class="sr-only"><?php _e("Toggle navigation", "itb"); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="show-desctop">
                        <?php
                        $args = array(
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                            'container_id'    => 'main-navigation',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'theme_location' => 'main_navigation'
                        );

                        wp_nav_menu($args); ?>
                        </div>

                        <div class="show-mobile">
                            <div class="navbar-ex2-collapse collapse mob-men" aria-expanded="false">
                                <?php
                                $args = array(
                                    'container'       => 'div',
                                    'container_class' => 'collapse navbar-collapse ',
                                    'container_id'    => 'cssmenu',
                                    'menu_class'      => '',
                                    'menu_id'         => '',
                                    'theme_location' => 'mobile_navigation'
                                );

                                wp_nav_menu($args); ?>
                            </div>
                        </div>
                    </nav>

                </div>
								<div class="col-sm-2 medias">
									<a target="_blank" href="https://www.facebook.com/FashionBySlave/">
										<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg" alt="facebook">
									</a>
									<a target="_blank" href="https://www.instagram.com/slave_to/">
										<img src="<?php bloginfo('template_directory'); ?>/images/instagram.svg" alt="instagram">
									</a>
									<a target="_blank" href="https://www.etsy.com/shop/FashionBySlave?ref=search_shop_redirect">
										<img src="<?php bloginfo('template_directory'); ?>/images/etsy.svg" alt="etsy" >
									</a>
								</div>
            </div>
        </div>
    </header>
