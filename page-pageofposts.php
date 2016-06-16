<?php
/**
 * Template Name: Page of posts
 *
 */
get_header(); ?>

    <main id="main" class="bc-main" role="main">
        <div id="content" class="bc-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="page-header">
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                        <?php endwhile; ?>
                                <div class="entry-content">
                                    <?php query_posts('category_name=' . get_the_title() . '&post_status=publish,future'); ?>
                                    <?php if (have_posts()) : ?>
                                        <?php /* The loop */ ?>
                                        <?php while (have_posts()) : the_post(); ?>
                                            <div id="post-<?php the_ID(); ?>">
                                                    <h3 class="entry-title">
                                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h3>
                                                    <small><?php the_date('F j, Y'); ?></small>
                                                    <div class="entry-content">
                                                        <?php the_content(); ?>
                                                    </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                        <h2>No content</h2>
                                    <?php endif; ?>
                                    <nav>

                                            <?php next_posts_link(__('&#8249; Older news', 'blankcanvas')); ?>
                                            <?php previous_posts_link(__('Newer news &#8250;', 'blankcanvas')); ?>

                                        <!-- end of .navigation -->
                                    </nav>
                                    <!-- #post-loop -->
                                </div>
                            </article>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>