<?php
/**
 * Template Name: Home
 *
 */
get_header(); ?>

<main id="main" class="bc-main" role="main">
    <div id="content">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
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
                                <h3 class="entry-title">
                                    <a href="/index.php/about/" rel="bookmark">
                                        Heathcote Winery
                                    </a>
                                </h3>
                                <div class="entry-summary">
                                    <?php
                                    $your_query = new WP_Query( 'pagename=about' );
                                    while ( $your_query->have_posts() ) : $your_query->the_post();
                                        the_excerpt();
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
                                            <a href="/news/" rel="bookmark">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <div class="entry-summary">
                                            <?php the_excerpt(); ?>
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
                                <h3 class="entry-title">
                                    <a href="/index.php/join/" rel="bookmark">
                                        Join our Wine Club
                                    </a>
                                </h3>
                                <div class="entry-summary">
                                    <?php
                                    $your_query = new WP_Query( 'pagename=join' );
                                    while ( $your_query->have_posts() ) : $your_query->the_post();
                                        the_excerpt();
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
