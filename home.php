<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">

        <div class="swiper-container">
             
           
           
            <div class="swiper-wrapper">
            <?php
                $args = array(
                'post_type'=>'promo',
                'order'    => 'DESC'
                );              
                        
                $the_query = new WP_Query( $args );
                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                
            ?>
                <div class="swiper-slide">
                    <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
                    <div class="slider_info">
                        <h1 class="slider_title"><?php the_title(); ?></h1>
                        <h3 class="slider_text"><?php the_content(); ?></h3>
                    </div>
                </div>
                <?php 
                endwhile;
                endif;

                    // Reset Query
                    wp_reset_query();
                ?>
            </div>
            
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>
                
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="services col-xs-12">
            <?php
                $args2 = array(
                'post_type'=>'service',
                'order'    => 'ASC'
                );              
                        
                $the_query = new WP_Query( $args2 );
                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                
            ?>

            <div class="service_single col-xs-6 col-sm-6 col-md-3">
                <div class="service_single_content">
                    
                    <?php 
                        $id = get_the_ID();
                        $icon = get_post_meta($id, 'icon', true);
                        
                        if ($icon) { 
                        echo $icon; 
                        }
                    ?>
                    
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a class="read_more_btn" href="<?php the_permalink(); ?>">read more</a>
                </div>
            </div>

            <?php 
            endwhile;
            endif;

                // Reset Query
                wp_reset_query();
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
