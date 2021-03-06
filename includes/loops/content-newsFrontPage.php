<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the section tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/bst.css style the different formats in different ways.
*/
?>
<ul class="cycle-slideshow responsive news-carousel margin-top-1" data-cycle-fx="carousel" data-pause-on-hover=true data-cycle-timeout=4000  data-cycle-carousel-fluid=false data-cycle-slides="li">
<?php
$args = array( 'posts_per_page' => 12); 
$myposts = get_posts($args);
foreach($myposts as $post) : ?>
<li role="article" id="post_<?php the_ID()?>"><div>
    <a class="imgLink" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('miniature-home', array( 'class' => 'miniature-home' )); ?></a>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
    <p><time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('j F Y') ?></time></p>
	
	<?php
	//ripulisco e riduco lunghezza del contenuto
	$content = strip_tags($post->post_content);
	$short_content = substr($content, 0, 100);
	if (strlen($content) > 100) $short_content .= " ...";
    echo "<p>" . $short_content . "</p>\n";
    ?>
    
    <p><a class="readMore" href="<?php the_permalink(); ?>">Leggi di più...</a></p></div>
    </li>
<?php endforeach; ?>
</ul>
