<?php
/**
 * Template Name: Wines
 *
 */
get_header(); ?>

    <main id="main" class="wines" role="main">
        <div id="content" class="bc-content">
            <div class="container">
                <div class="row">
                        <?php
                        $args = array(  'posts_per_page' => 12,
                                        'category' => 3, //3,16,
                                        'post_type' => 'page',
                                        'post_status' => 'publish',
                                        'orderby' => 'menu_order',
                                        'order' => 'ASC',
                        );
                        $wineposts = get_posts( $args );
                        foreach ( $wineposts as $post ) : setup_postdata( $post ); ?>
                            <div class="col-xs-6 col-sm-2">
                                <div class="box clearfix text-center">
                                    <div class="entry-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo get_the_post_thumbnail( $post->ID, 'wine-thumbnail' ); ?>
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-default btn-xs">Read more</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>