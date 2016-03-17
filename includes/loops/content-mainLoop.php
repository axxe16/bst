<?php
/* Loop utilizzato nella pagina post principale */
?>


<?php if(have_posts()): while(have_posts()): the_post();?>

<?php 
$highlight[] = 0;
if (get_field('metti_in_rilievo_il_post')) {
	$highlight = get_field('metti_in_rilievo_il_post'); 
} 
?>

<?php if ($highlight[0]) { ?>
    <article role="article" class="row onePost bigMode" id="post_<?php the_ID()?>">
        <div class="col-md-12">
        <div class="imgWrapper">
		<?php the_post_thumbnail('highlight-news', array( 'class' => 'highlight-news' )); ?>
        <div class="gradient">
        <header>
        			<?php 
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= '<a class="' . esc_html( $category->slug ) . '" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                }
            }
            ?>
            <span class="single-cat"><?php echo trim( $output, $separator ); ?></span>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <p><span class="author"><?php _e('Di', 'bst'); echo " "; the_author() ?>,</span> <time  class="text-muted" datetime="<?php the_time('j F Y')?>"><?php the_time('j F Y') ?></time></p>
           <?php
	//ripulisco e riduco lunghezza del contenuto
	$content = strip_tags($post->post_content);
	$short_content = mb_substr($content, 0, 180);
	if (strlen($content) > 100) $short_content .= "...";
    echo "<p>" . $short_content . "</p>\n";
    ?>
        </header>
        </div>
        </div>
        </div>
    </article>
<?php } else { ?>
	    <article class="row onePost littleMode" role="article" id="post_<?php the_ID()?>">
        <div class="col-md-5"><?php the_post_thumbnail('normal-news', array( 'class' => 'normal-news' )); ?></div>
        <div class="col-md-7">
        <header>
			<?php 
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= '<a class="' . esc_html( $category->slug ) . '" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                }
            }
            ?>
            <span class="single-cat"><?php echo trim( $output, $separator ); ?></span>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <p><span class="author"><?php _e('Di', 'bst'); echo " "; the_author() ?>,</span> <time  class="text-muted" datetime="<?php the_time('j F Y')?>"><?php the_time('j F Y') ?></time></p>
              </em>
            </h4>
        </header>
        <section>
            <?php
	//ripulisco e riduco lunghezza del contenuto
	$content = strip_tags($post->post_content);
	$short_content = mb_substr($content, 0, 150);
	if (strlen($content) > 100) $short_content .= " ...";
    echo "<p>" . $short_content . "</p>\n";
    ?>
        </section>
        </header>
    </div>
    </article>
<?php } ?>
    <?php 
	unset($highlight);
	?>
<?php endwhile; ?>

<?php if ( function_exists('bst_pagination') ) { bst_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bst')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'bst') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
