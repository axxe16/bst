<?php get_template_part('includes/header'); ?>

<div class="container">

<?php if ( is_active_sidebar( 'widget-home1' ) || is_active_sidebar( 'widget-home2' ) || is_active_sidebar( 'widget-home3' )) { ?>
 <div class="row"> 
   <div class="col-xs-12 col-sm-4">
	   <?php dynamic_sidebar('widget-home1'); ?>
   </div>
   <div class="col-xs-12 col-sm-4">
	   <?php dynamic_sidebar('widget-home2'); ?>
   </div>
   <div class="col-xs-12 col-sm-4">
	   <?php dynamic_sidebar('widget-home3'); ?>
   </div>
</div>
<?php } ?>

  <div class="row">
    
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
				<?php get_template_part('includes/loops/content-page'); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->
<?php get_template_part('includes/footer'); ?>
