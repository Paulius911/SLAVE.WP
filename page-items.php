<?php /*
Template Name: Items
Description: A Page Template for custom page.
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="main-content" class="visual-container">

    <div class="container items-title">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="items-section">
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                     <div class="items-inner">



                         <ul>

                            <?php if (have_rows('preke')): ?>
                                <?php while (have_rows('preke')): the_row();
                                    $image = get_sub_field('pagrindine_nuotrauka');
                                    $images = get_sub_field('galerijos_nuotrauka');
                                    $imageone = get_sub_field('galerijos_nuotrauka_1');
                                    $imagetwo = get_sub_field('galerijos_nuotrauka_2');
                                    $imagethree = get_sub_field('galerijos_nuotrauka_3');
                                    ?>

                                    <li>
                                        <div class="image gallery">

                                            <a href="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"><img
                                                        src="<?php echo $image['sizes']['item-size']; ?>"
                                                        alt="<?php echo $image['alt'] ?>"/></a>

                                            <?php if (!empty($images)):?>
                                                <a href="<?php echo $images['url']; ?>" alt="<?php echo $images['alt'] ?>"
                                                   title="<?php the_sub_field('prekes_aprasymas'); ?>"></a>
                                            <?php endif;?>

                                            <?php if (!empty($imageone)):?>
                                                <a href="<?php echo $imageone['url']; ?>" alt="<?php echo $imageone['alt'] ?>"
                                                   title="<?php the_sub_field('prekes_aprasymas'); ?>"></a>
                                            <?php endif;?>

                                            <?php if (!empty($imagetwo)):?>
                                                <a href="<?php echo $imagetwo['url']; ?>" alt="<?php echo $imagetwo['alt'] ?>"
                                                   title="<?php the_sub_field('prekes_aprasymas'); ?>"></a>
                                            <?php endif;?>

                                            <?php if (!empty($imagethree)):?>
                                                <a href="<?php echo $imagethree['url']; ?>" alt="<?php echo $imagethree['alt'] ?>"
                                                   title="<?php the_sub_field('prekes_aprasymas'); ?>"></a>
                                            <?php endif;?>

                                            <p><?php the_sub_field('prekes_header'); ?></p>

                                            <span><?php the_sub_field('prekes_kaina'); ?></span>

                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                         <div class="galerija-wrapper">
                             <?php
                             $i = 0;
                             $loop = new WP_Query( $args );
                             while ( $loop->have_posts() ) : $loop->the_post();
                                 $slug = get_sub_field( 'post_name', get_post() );
                                 ?>

                                 <div class="galerija-item galerija-item-<?php echo $i; ?>">
                                     <?php if( get_field('prekes_aprasymas') ): ?>
                                         <div class="who-wrote"><?php the_field('prekes_aprasymas') ?></div>
                                     <?php endif; ?>

                                     <?php if( have_rows('pagrindine_nuotrauka') ) { ?>
                                         <div class="hide">
                                             <div class="popup-gallery prekes-<?php echo $i; ?>">
                                                 <?php
                                                 $k = 0;
                                                 while ( have_rows('pagrindine_nuotrauka') ) : the_row(); ?>
                                                     <?php $recommendimages = get_sub_field('galerijos_nuotrauka'); ?>

                                                     <a href="<?php echo $recommendimages['url']; ?>" title="">
                                                         <img src="<?php echo $recommendimages['url']; ?>">
                                                     </a>

                                                     <?php $k++; endwhile; ?>
                                             </div>
                                         </div>

                                     <?php } ?>
                                 </div>
                                 <?php $i++; endwhile; wp_reset_postdata(); ?>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
