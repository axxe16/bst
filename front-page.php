<?php get_template_part('includes/header'); ?>
<?php 
	if (get_field('r1_link_banner_1')) {
		$linkBanner1 = get_field('r1_link_banner_1');
	} elseif (get_field('r1_link_interno_banner_1')) {
		$linkArray1 = get_field('r1_link_interno_banner_1');
		$linkBanner1 = get_page_link($linkArray1[0]);
	} else {
		$linkBanner1 = "#";
	}
	
	if (get_field('r2_link_banner_1')) {
		$linkBanner2 = get_field('r2_link_banner_1');
	} elseif (get_field('r2_link_interno_banner_1')) {
		$linkArray2 = get_field('r2_link_interno_banner_1');
		$linkBanner2 = get_page_link($linkArray2[0]);
		
	} else {
		$linkBanner2 = "#";
	}
	
?>
<div class="wrapperSlider">
<div id="slider">
<?php echo do_shortcode('[new_royalslider id="1"]'); ?>
</div>
</div>


<?php /* BANNER 1*/ ?>
<div id="banner-1" class="container banner margin-top-2">
    <div class="row">
    	<div class="col-md-12">
    		<a href="<?php echo $linkBanner1; ?>"><img src="<?php the_field('r1_img_banner_1'); ?>" /></a>
    	</div>
    </div>
</div>
<?php /* FINE BANNER 1*/ ?>


<?php /*
<div class="margin-top-2">
   <ul class="cycle-slideshow responsive" data-cycle-fx="carousel" data-pause-on-hover=true data-cycle-timeout=3000 data-cycle-carousel-visible=5 data-cycle-carousel-fluid=true data-cycle-slides="li">
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/001.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/002.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/003.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/004.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/005.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/001.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/002.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/003.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/004.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/005.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/001.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/002.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/003.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/004.jpg"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/005.jpg"></a></li>        
</ul>
</div>
*/ ?>
<?php /* AREA GENITORI */ ?>
<div id="area-genitori" class="container margin-top-2">
    <div class="row">
    	<div class="col-md-2 col-lg-offset-2 col-md-offset-1">
        <img class="img-responsive" src="http://dummyimage.com/300x300/f00/0011ff.png&text=icone">
        </div>
        <div class="col-lg-6 col-md-8">
        <h2>Area <strong>Genitori/Studenti</strong></h2>
        <p>Mr. Clean and his boy. I'm sorry that I had to tune you up. Respect, ese, you gotta give it to get it. What are we doing way the hell out there, what they close the mall or something? Heisenberg come on break it out. That's it? That's all you got? I thought you was a player. </p>
        </div>
    </div>
</div>
<?php /* FINE AREA GENITORI */ ?>


<?php /* BANNER 2 */ ?>
<div id="banner-2" class="banner container">
    <div class="row banner banner-r1 margin-top-2">
    	<div class="col-md-12">
    		<a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r2_img_banner_1'); ?>" /></a>
    	</div>
    </div>
</div>
<?php /* FINE BANNER 2 */ ?>


<div class="container margin-top-2">
	<h2 class="circle green bigTitle"><strong>News</strong> Flow</h2>
    <div class="margin-top-1">
   	<?php get_template_part('includes/loops/content', 'newsFrontPage'); 
	wp_reset_postdata();
	?>
   	</div>
</div>






<div class="container margin-top-1" >
    <div id="coming-soon" class="row banner margin-top-1 bigText">
    	<div class="col-md-4"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/sample-coming-soon.jpg "></div>
        <div class="col-md-8">
        <h2 class="bigTitle"><strong>Coming</strong> Soon</h2>        
            <?php get_template_part('includes/loops/content', 'comingSoonFrontPage'); 
			wp_reset_postdata();
			?> 
        </div>
    </div>
</div>

<?php 
if (get_field('background_statistiche')!='') 
	$bgStat = get_field('background_statistiche');
else
	$bgStat = get_template_directory_uri() . "/img/bgParallaxSample.jpg";
	
if (get_field('immagine_statistiche')!='') 
	$imgStat = get_field('immagine_statistiche');
else
	$imgStat = get_template_directory_uri() . "/img/stat.png";	
?>
<div id="homeStat">
<div class="container-fluid img-holder" data-image="<?php echo $bgStat; ?>" data-width="1024" data-height="600" data-extra-height="50">
</div>
<img id="stat" src="<?php echo $imgStat; ?>">
</div>

<?php 
if (get_field('background_citazione')!='') 
	$bgQuote = get_field('background_citazione');
else
	$bgQuote = get_template_directory_uri() . "/img/bgParallaxSample.jpg";
?>
<div id="homeQuote"> 
<div class="container-fluid img-holder margin-top-2" data-image="<?php echo $bgQuote; ?>" data-width="1024" data-height="600" data-extra-height="100">
</div>

<?php
$args=array('post_type'=>'citazioni', 'orderby'=>'rand', 'posts_per_page'=>'1');
$citazioni=new WP_Query($args);
while ($citazioni->have_posts()) : $citazioni->the_post();
$autore = get_field('autore');
$riferimenti = get_field('riferimenti');
?>

    <blockquote><?php the_content(); ?></blockquote>
    <p class="quoteAuthor"><?php echo $autore; ?><small><?php echo $riferimenti; ?></small></p>
<?php
endwhile;
wp_reset_postdata();
?>
</div>
<div class="container margin-top-1">
	<div class="row">
    <h2 class="bigTitle"><i class="circle green"></i><strong>Social</strong> Networks</h2>
    <div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
    <div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
    <div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
    </div>
</div>

<div class="container margin-top-1">
	<div class="row">
    <div class="col-md-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.994963077714!2d12.203872451359823!3d45.49004617899865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb5c672f788d5%3A0x326c0113c67dbd58!2sIstituto+Salesiano+San+Marco!5e0!3m2!1sit!2sit!4v1447420022960" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    <div class="col-md-4">
    <h3>Centralino</h3>
    <p>T. 041 5498111 
    Fax: 041 5498112
    e-mail: info@issm.it</p>
    
    <h3>Segreteria CFP - ITT</h3>
    <p>T: 041 5498200 | Fax: 041 5498198<br>
    e-mail: cfpsanmarco@issm.it<br>
    ittsanmarco@issm.it<br>
    Orario apertura segreteria:<br>
    LU – ME – GIO – VE<br>
    08.00-11.15<br>
    MARTEDI<br>
    13.30-15.45</p>
    
    <h3>Segreteria FCS</h3>
    <p>T. 041 5498161 | Fax: 041 5498198<br>
    e mail: info.fcs@issm.it<br>
    Orario apertura segreteria:<br>
    LU – MA - ME – GIO – VE<br>
    08.30-12.00/13.30-16.00</p>
    </div>
    <div class="col-md-4">
    <h3>Contattaci</h3>
    <?php echo do_shortcode('[contact-form-7 id="80" title="Contatto Footer"]'); ?>
    </div>
    </div>
</div>

<?php get_template_part('includes/footer'); ?>
