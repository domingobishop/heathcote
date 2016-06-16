<?php get_header(); ?>

    <main id="main" class="bc-main" role="main">
        <div id="content" class="bc-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                    <div class="entry-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="page-header">
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>