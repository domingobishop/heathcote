<footer id="footer" class="bc-footer">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar( 'bc_footer' ); ?>
    </div>
    <div class="row bc-info">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h4>Crabtree Watervale Wines</h4>
        <p><a href="https://www.facebook.com/CrabtreeWines" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
          <a href="https://twitter.com/CrabtreeWines" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png"></a></p>
        <p>
          North Terrace Watervale, South Australia <br>
          T: 08 8843 0069  F: 08 884 30144<br>
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