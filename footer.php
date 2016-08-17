<footer>
<div class="container">

<section  id="widget">

       <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>


</section>
</div>


<div class="container">

  

           <h4  class=""> &Copy <?php echo date('Y'); ?><?php bloginfo('name');?></h4>
</div>


</footer>


<?php wp_footer();?>

<script src="<?php bloginfo('template_url')?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
</body>
</html>
