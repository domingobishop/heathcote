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
                                        'category_name' => 'wine',
                                        'post_type' => 'page',
                                        'post_status' => 'publish',
                                        'orderby' => 'menu_order',
                                        'order' => 'ASC',
                        );
                        $wineposts = get_posts( $args );
                        foreach ( $wineposts as $post ) : setup_postdata( $post ); ?>
                            <div class="col-wine">
                                <div class="box clearfix text-center">
                                    <div class="entry-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo get_the_post_thumbnail( $post->ID, 'wine-thumbnail' ); ?>
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p><small><?php the_excerpt(); ?></small></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-default btn-xs">Read more</a>
                                        <?php $buy = get_post_meta($post->ID, 'buy', true);
                                            if ($buy) { ?>
                                                <a href="<?php echo $buy; ?>" class="btn btn-default btn-xs">Buy now</a>
                                            <?php } ?>
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