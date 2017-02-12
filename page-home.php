<?php
/**
 * Template Name: Home
 *
 */
get_header(); ?>

<main id="main" class="bc-main" role="main">
    <div id="content">
        <section class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/slide-0.jpg"
                                                 alt="...">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/slide-1.jpg"
                                                 alt="...">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/slide-2.jpg"
                                                 alt="...">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/slide-3.jpg"
                                                 alt="...">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/slide-4.jpg"
                                                 alt="...">
                                        </div>
                                    </div>
                                    <?php $awardImage = get_post_meta($post->ID, 'award_image', true);
                                    if ($awardImage) { ?>
                                        <div class="award-image">
                                            <img src="<?php echo $awardImage; ?>" alt="Award" class="img-responsive">
                                        </div>
                                    <?php } ?>
                                </div>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="bc-box">
                            <article>
                                <h5>About</h5>
                                <?php
                                $your_query = new WP_Query( 'pagename=about' );
                                while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        Heathcote Winery
                                    </a>
                                </h3>
                                <div class="entry-summary">
                                        <?php echo excerpt(20) ;
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bc-box">
                            <?php if (have_posts()) : ?>
                                <?php query_posts('showposts=1'); ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <article id="post-<?php the_ID(); ?>">
                                        <h5>News</h5>
                                        <h3 class="entry-title">
                                            <a href="/index.php/news/" rel="bookmark">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <div class="entry-summary">
                                            <?php echo excerpt(20) ; ?>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <h3>No content</h3>
                                <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bc-box">
                            <article>
                                <h5>Members</h5>
                                <?php
                                $your_query = new WP_Query( 'pagename=Wine club' );
                                while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        Join our Wine Club
                                    </a>
                                </h3>
                                <div class="entry-summary">
                                        <?php echo excerpt(20) ;
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- #content -->
</main>

<?php get_footer(); ?>
