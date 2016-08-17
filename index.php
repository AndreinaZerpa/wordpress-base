<?php get_header(); ?>


<section class="jumbotron">
<div class="container">
  <h1><?php bloginfo('name');?></h1>
  <h2><?php bloginfo('description'); ?></h2>

  <div class="collapse navbar-collapse col-lg-10" id="navegacion">


    <?php wp_nav_menu(
     array(
     'container' => false,
     'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
     'theme_location' => 'menu2'
     )); ?>


  </div>



</div></section>

<section class="main container">
  <div class="row">
    <section class="posts col-md-9">
      <div class="miga-de-pan">


      <?php echo breadcrumbs(); ?>

      </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post clearfix">
        <div >
          <a  class="thumb pull-left" href="<?php the_permalink();?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
              </a></div>
        <h2 class="post-title">
          <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h2>
        <div class="dat">
          <span class="post-fecha"><?php the_date();?></span>
          <span class="post-autor"><?php the_category();?></span></div>

            <p class="post-contenido text-justify pull-right">
             <?php the_excerpt(); ?>
            </p>
          <div class="contenedor-botones thumb pull-center">

            <a class="btn btn-primary" href="<?php the_permalink();?>">もっと</a>


          </div>

      </article>
<?php endwhile; else: ?>
<h2>No se encontaron articulos</h2>
<?php endif; ?>


   <nav>
    <div class="center-block">

      <ul class="pagination">



               <?php if ( have_posts() ) : ?>
                   <?php while ( have_posts() ) : the_post(); ?>

                   <?php endwhile; ?>
                   <div class="pagination"><?php pagination('&laquo;<span class="sr-only"></span>','&raquo;<span class="sr-only"></span>'); ?></div>
               <?php endif; ?>



            </ul>
     </div>
    </nav>
   </section>




<?php get_sidebar(); ?>



  </div>
</section>



<?php get_footer(); ?>
