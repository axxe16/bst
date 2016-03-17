<?php get_template_part('includes/header'); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    	<div class="imgWrapper">
        <?php 
		$boxed = get_field('immagine_in_rilievo_boxed');
		$printContainer = "";
		if (@$boxed[0]==1) { 
			echo '<div class="container" style="position:relative">';
			echo '<div class="row">';
			$printContainer = " container"; 
		}
		?>
        <?php the_post_thumbnail('single-news', array( 'class' => 'single-news' )); ?>
        <div class="gradient">
        <div class="headerWrapper <? echo $printContainer; ?>">
        <header class="container">
        <div class="row">
        <div class="col-md-12">
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
        
        <p class="single-date"><time datetime="<?php the_time('d-m-Y')?>"><?php the_time('j F Y') ?></time> <i data-toggle="tooltip" data-placement="top" title="L'articolo è stato letto <?php echo trim(strip_tags(do_shortcode('[post-views]'))); ?> volte" class="fa fa-eye"></i><?php echo do_shortcode('[post-views]'); ?>
        <span class="fb-counter"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="<?php echo get_scp_counter( 'facebook' ); ?> like"></i> <?php echo get_scp_counter( 'facebook' ); ?></span>
        
        <span id="shareTheLove" data-toggle="popover" data-placement="top"  data-content=""><i class="fa fa-share-square-o" data-toggle="tooltip" data-placement="bottom" title="Condividi"></i></span>
        
         <span class="single-cat"><?php echo trim( $output, $separator ); ?></span>
         </p>
        <h1 class="titleOneNews"><?php the_title()?></h1>
        <p class="single-author"> di <?php the_author() ?></p>
        
		</header>
        </div>
        </div>
        </div>
        </div>
		<?php
        if (@$boxed[0]==1) { 
			echo '</div></div>'; 
		}
		?>
        </div>
        <div class="container margin-top-1">	
        <div class="row">
		<article class="col-md-8" role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
		<?php the_content()?>
        <?php wp_link_pages(); ?>
        </article>
        
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>


<aside class="col-md-4">
<?php get_template_part('includes/sidebar'); ?>
</aside>
</div>
</div>

<?php get_template_part('includes/footer'); ?>
