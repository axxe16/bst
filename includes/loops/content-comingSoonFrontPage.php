<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the section tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/bst.css style the different formats in different ways.
*/
?>

<ul class="margin-top-1">
<?php 
$args=array('post_type'=>'coming_soon', 'posts_per_page'=>'4');
$notifiche=new WP_Query($args);
while ($notifiche->have_posts()) : $notifiche->the_post(); ?>
<li class="circle green" id="post_<?php the_ID()?>"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></li>
<?php endwhile; ?>
</ul>