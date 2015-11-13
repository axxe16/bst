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

	if (get_field('r1_link_banner_2')) {
		$linkBanner2 = get_field('r1_link_banner_2');
	} elseif (get_field('r1_link_interno_banner_2')) {
		$linkArray2 = get_field('r1_link_interno_banner_2');
		$linkBanner2 = get_page_link($linkArray2[0]);
		
	} else {
		$linkBanner2 = "#";
	}
	if (get_field('r2_link_banner_1')) {
		$linkBanner3 = get_field('r2_link_banner_1');
	} elseif (get_field('r2_link_interno_banner_1')) {
		$linkArray3 = get_field('r2_link_interno_banner_1');
		$linkBanner3 = get_page_link($linkArray3[0]);
		
	} else {
		$linkBanner3 = "#";
	}
	
?>
<div class="wrapperSlider">
<div id="slider" class="container">
Qui lo slider
</div>
</div>
<div class="container">
    <div class="row banner banner-r1 margin-top-1">
    	<div class="col-md-9">
    		<a href="<?php echo $linkBanner1; ?>"><img src="<?php the_field('r1_img_banner_1'); ?>" /></a>
    	</div>
        <div class="col-md-3">
        	<a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	
        </div>
    </div>
</div>

<div class="margin-top-2">
   <ul class="cycle-slideshow responsive" data-cycle-fx="carousel" data-pause-on-hover=true data-cycle-timeout=2000 data-cycle-carousel-visible=5 data-cycle-carousel-fluid=true data-cycle-slides="li">
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
<div class="container margin-top-2">
    <div class="row banner">
    <div class="col-md-12">
    	<h2><i class="circle green"></i><strong>Aree</strong> Scolastiche</h2>
    </div>
    	<div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
        <div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
        <div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
    </div>
</div>

<div class="container">
<hr class="margin-top-1">
    <div id="coming-soon" class="row banner margin-top-1 bigText">
    	<div class="col-md-4"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/sample-coming-soon.jpg "></div>
        <div class="col-md-8">
        <h2 class="bigTitle"><strong>Coming</strong> Soon</h2>
        <ul class="margin-top-1">
        	<li class="circle green"><a href="#"><strong>Risultati Finali</strong> per le classi prime e seconde CFP</a></li>
            <li class="circle green"><a href="#"><strong>Risultati Finali</strong> per le classi prime e seconde CFP</a></li>
            <li class="circle green"><a href="#"><strong>Risultati Finali</strong> per le classi prime e seconde CFP</a></li>
            <li class="circle green"><a href="#"><strong>Risultati Finali</strong> per le classi prime e seconde CFP</a></li>
        </ul>
        </div>
    </div>
</div>

<?php 
if (get_field('background_statistiche')!='') 
	$bgStat = get_field('background_statistiche');
else
	$bgStat = get_template_directory_uri() . "/img/bgParallaxSample.jpg";
?>

<div id="homeStat" class="container-fluid img-holder" data-image="<?php echo $bgStat; ?>" data-width="1024" data-height="600" data-extra-height="50"></div>




<!-- seconda riga banner -->
<div class="container margin-top-1">
<div class="row banner banner-r1">
	<div class="col-md-12">
    	<a href="<?php echo $linkBanner3; ?>"><img src="<?php the_field('r2_img_banner_1'); ?>" /></a>
    </div>
</div>
</div>


<div class="margin-top-2">
	<h2 class="text-center bigTitle"><strong>News</strong> Flow</h2>
    <div class="margin-top-1">
   <ul class="cycle-slideshow responsive news-carousel margin-top-1" data-cycle-fx="carousel" data-pause-on-hover=true data-cycle-timeout=2000  data-cycle-carousel-fluid=false data-cycle-slides="li">
    <li><div>
    <a href="#"><img height="200" width="300" src="<?php echo get_template_directory_uri(); ?>/img/001.jpg"></a>
    <h3>Il pollicione d'oro 2015</h3>
    <p>28/02/2015 - Segreteria</p>
    <p>Donec aliquam lorem ac ligula porta efficitur. Duis ipsum dui, rutrum vitae lectus id, feugiat tincidunt leo. Mauris in urna hendrerit mi ultricies rhoncus a at enim.</p>
    <p><a href="#">Leggi di più...</a></p></div>
    </li>
    <li><div>
    <a href="#"><img height="200" width="300" src="<?php echo get_template_directory_uri(); ?>/img/002.jpg"></a>
    <h3>Il pollicione d'oro 2015</h3>
    <p>28/02/2015 - Segreteria</p>
    <p>Donec aliquam lorem ac ligula porta efficitur. Duis ipsum dui, rutrum vitae lectus id, feugiat tincidunt leo. Mauris in urna hendrerit mi ultricies rhoncus a at enim.</p>
    <p><a href="#">Leggi di più...</a></p></div>
    </li>
    <li><div>
    <a href="#"><img height="200" width="300" src="<?php echo get_template_directory_uri(); ?>/img/003.jpg"></a>
    <h3>Il pollicione d'oro 2015</h3>
    <p>28/02/2015 - Segreteria</p>
    <p>Donec aliquam lorem ac ligula porta efficitur. Duis ipsum dui, rutrum vitae lectus id, feugiat tincidunt leo. Mauris in urna hendrerit mi ultricies rhoncus a at enim.</p>
    <p><a href="#">Leggi di più...</a></p></div>
    </li>
    <li><div>
    <a href="#"><img height="200" width="300" src="<?php echo get_template_directory_uri(); ?>/img/004.jpg"></a>
    <h3>Il pollicione d'oro 2015</h3>
    <p>28/02/2015 - Segreteria</p>
    <p>Donec aliquam lorem ac ligula porta efficitur. Duis ipsum dui, rutrum vitae lectus id, feugiat tincidunt leo. Mauris in urna hendrerit mi ultricies rhoncus a at enim.</p>
    <p><a href="#">Leggi di più...</a></p></div>
    </li>
    <li><div>
    <a href="#"><img height="200" width="300" src="<?php echo get_template_directory_uri(); ?>/img/005.jpg"></a>
    <h3>Il pollicione d'oro 2015</h3>
    <p>28/02/2015 - Segreteria</p>
    <p>Donec aliquam lorem ac ligula porta efficitur. Duis ipsum dui, rutrum vitae lectus id, feugiat tincidunt leo. Mauris in urna hendrerit mi ultricies rhoncus a at enim.</p>
    <p><a href="#">Leggi di più...</a></p></div>
    </li>
    <li><div>
    <a href="#"><img height="200" width="300" src="<?php echo get_template_directory_uri(); ?>/img/001.jpg"></a>
    <h3>Il pollicione d'oro 2015</h3>
    <p>28/02/2015 - Segreteria</p>
    <p>Donec aliquam lorem ac ligula porta efficitur. Duis ipsum dui, rutrum vitae lectus id, feugiat tincidunt leo. Mauris in urna hendrerit mi ultricies rhoncus a at enim.</p>
    <p><a href="#">Leggi di più...</a></p></div>
    </li>
    <li><div>
    <a href="#"><img height="200" width="300" src="<?php echo get_template_directory_uri(); ?>/img/002.jpg"></a>
    <h3>Il pollicione d'oro 2015</h3>
    <p>28/02/2015 - Segreteria</p>
    <p>Donec aliquam lorem ac ligula porta efficitur. Duis ipsum dui, rutrum vitae lectus id, feugiat tincidunt leo. Mauris in urna hendrerit mi ultricies rhoncus a at enim.</p>
    <p><a href="#">Leggi di più...</a></p></div>
    </li>           
</ul></div>
</div>
<?php 
if (get_field('background_citazione')!='') 
	$bgQuote = get_field('background_citazione');
else
	$bgQuote = get_template_directory_uri() . "/img/bgParallaxSample.jpg";
?>
<div id="homeQuote" class="container-fluid img-holder margin-top-2" data-image="<?php echo $bgQuote; ?>" data-width="1024" data-height="600" data-extra-height="50"></div>
<div class="container margin-top-1">
	<div class="row">
    <h2 class="bigTitle"><i class="circle green"></i><strong>Social</strong> Networks</h2>
    <div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
    <div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
    <div class="col-md-4"><a href="<?php echo $linkBanner2; ?>"><img src="<?php the_field('r1_img_banner_2'); ?>" /></a>	</div>
    </div>
</div>

<?php get_template_part('includes/footer'); ?>
