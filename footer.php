
        <footer>
          <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 border">
                      <div class="footer-top-left">
                      </div>
                      <div class="footer-top-right">
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
                    </div>
                </div>
            </div>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="footer-bottom-left">
                    <a target="_blank" href="https://www.facebook.com/FashionBySlave/">
            					<i class="fab fa-facebook-f"></i>
            				</a>
            				<a target="_blank" href="https://www.instagram.com/slave_to/">
            					<i class="fab fa-instagram"></i>
            				</a>
            				<a target="_blank" href="https://www.etsy.com/shop/FashionBySlave?ref=search_shop_redirect">
            					<i class="fab fa-etsy"></i>
            				</a>
                  </div>
                  <div class="footer-bottom-right">
                    <p>&copy; 2019 All rights reserved.<p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
						<?php wp_footer();?>
	</body>
</html>
