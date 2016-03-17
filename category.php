<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1><?php echo single_cat_title(); ?></h1>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <?php get_template_part('includes/loops/content', 'mainLoop'); ?>
    </div>
    <aside class="col-md-4">
      <?php get_template_part('includes/sidebar'); ?>
    </aside>
  </div>
</div>
<?php get_template_part('includes/footer'); ?>
