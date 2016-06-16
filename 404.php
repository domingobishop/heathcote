<?php
/**
 * Error 404 Template
 *
 *
 * @file           404.php
 * @package        blankcanvas
 * @author         Chris Bishop
 * @link           http://codex.wordpress.org/Creating_an_Error_404_Page
 */
?>
<?php get_header(); ?>

    <div id="content" class="bc-content" role="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <section id="404">
                        <div class="page-header">
                            <h1>
                                <?php _e('Not Found', 'blankcanvas'); ?>
                            </h1>
                        </div>
                        <div class="entry-content">
                            <h2>404</h2>

                            <h2><?php _e('This is somewhat embarrassing, isn’t it?', 'blankcanvas'); ?></h2>

                            <p><?php _e('It looks like nothing was found at this location.', 'blankcanvas'); ?></p>
                        </div>
                        <!-- .entry-content -->

                    </section>
                    <!-- #404 -->

                </div>
            </div>
        </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>
