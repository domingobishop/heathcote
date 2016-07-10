<footer id="footer" class="bc-footer">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar( 'bc_footer' ); ?>
      <div class="col-sm-6 col-md-3 widget-area text-right">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/footer-botttles.png">
      </div>
    </div>
    <div class="row bc-info">
      <div class="col-lg-12 text-center">
        <h3>HEATHCOTE WINERY</h3>
        <p><a href="https://www.facebook.com/heathcotewinery/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
          <a href="https://twitter.com/heathcotewinery" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png"></a></p>
        <p><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ATAP-Logo.png" style="width:90px;"></p>
        <p>
          185 High Street Heathcote Victoria 3523<br>
          T: 03 5433 2595  F: 03 5433 3081<br>
          Copyright © <?php echo date("Y"); ?> <br>
          <small>Website by <a href="http://creatistic.com.au/" target="_blank">Creatistic</a></small>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- #foot -->

<?php wp_footer(); ?>

<!-- jQuery --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 

<!-- BC JavaScript --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bc.js"></script>
</body>
</html>