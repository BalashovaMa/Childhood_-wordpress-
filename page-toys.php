<?php 
/*
    Template Name: Toys
*/
?>

<?php
    get_header();
?>

        <div class="toys">
            <div class="container">
                <h2 class="subtitle">Soft toys</h2>
        
                <div class="toys__wrapper">
                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'soft_toys',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>

                        <div class="toys__item" style="background-image: url(<?php 
                            if (has_post_thumbnail( )) {
                                the_post_thumbnail_url( );
                            } else {
                                echo get_template_directory_uri() . '/assets/img/not-found.png';
                            }?>)">
                            <div class="toys__item-info">
                                <div class="toys__item-title"><?php the_title(); ?></div>
                                <div class="toys__item-descr">
                                    <?php the_field('description_toys'); ?>                           
                                </div>
                            <div class="minibutton toys__trigger">Read More</div>
                        </div>
                    </div>
                    
                    <?php
                        }

                        wp_reset_postdata(); 
                    ?>
                </div>

                <h2 class="subtitle">Education toys</h2>
        
                <div class="toys__wrapper">
                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'edu_toys',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                        ?>

                        <div class="toys__item" style="background-image: url(<?php 
                        if (has_post_thumbnail( )) {
                            the_post_thumbnail_url( );
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.png';
                        }?>)">
                        <div class="toys__item-info">
                        <div class="toys__item-title"><?php the_title(); ?></div>
                        <div class="toys__item-descr">
                            <?php the_field('description_toys'); ?>                           
                        </div>
                    <div class="minibutton toys__trigger">Read More</div>
                </div>
            </div>
            
            <?php
                }

                wp_reset_postdata(); 
            ?>

                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="toys__alert">
                            <span>Didn't find what you were looking for?</span> Contact us and we will be happy to create any toy you want. You can choose everything: size, material, shapes...!
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    get_footer();
?>