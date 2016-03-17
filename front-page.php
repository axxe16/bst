<?php get_template_part('includes/header'); ?>
<?php 
	//elementi dinamici area genitori
	$link_area_genitori = get_field('link_area_genitori');
	$descrizione_area_genitori = get_field('descrizione_area_genitori');

	if (get_field('home_banner_1','option')) {
		//recupero l'immagine del banner nella dimensione giusta
		$bannerArray1 = get_field('home_banner_1','option');
		$trueImgBanner1 = $bannerArray1['sizes']['banner-home'];

		if (@get_field('collegamento_interno_home_banner_1','option')) {
				$linkArray1 = get_field('collegamento_interno_home_banner_1','option');
				$linkBanner1 = get_page_link($linkArray1[0]);
			} elseif (@get_field('collegamento_esterno_home_banner_1','option')) {
				$linkBanner1 = get_field('collegamento_esterno_home_banner_1','option');
			} else {
				$linkBanner1 = "#";
			}
	}


	if (get_field('home_banner_2','option')) {
			//recupero l'immagine del banner nella dimensione giusta
			$bannerArray2 = get_field('home_banner_2','option');
			$trueImgBanner2 = $bannerArray2['sizes']['banner-home'];
	
			if (@get_field('collegamento_interno_home_banner_2','option')) {
					$linkArray2 = get_field('collegamento_interno_home_banner_2','option');
					$linkBanner2 = get_page_link($linkArray2[0]);
				} elseif (@get_field('collegamento_esterno_home_banner_2','option')) {
					$linkBanner2 = get_field('collegamento_esterno_home_banner_2','option');
				} else {
					$linkBanner2 = "#";
			}
	}


	if (get_field('home_banner_3','option')) {
			//recupero l'immagine del banner nella dimensione giusta
			$bannerArray3 = get_field('home_banner_3','option');
			$trueImgBanner3 = $bannerArray3['sizes']['banner-home'];
	
			if (@get_field('collegamento_interno_home_banner_3','option')) {
					$linkArray3 = get_field('collegamento_interno_home_banner_3','option');
					$linkBanner3 = get_page_link($linkArray3[0]);
				} elseif (@get_field('collegamento_esterno_home_banner_3','option')) {
					$linkBanner3 = get_field('collegamento_esterno_home_banner_3','option');
				} else {
					$linkBanner3 = "#";
			}
	}
	
?>
<div class="wrapperSlider">
<div id="slider">
<?php echo do_shortcode('[new_royalslider id="1"]'); ?>
</div>


<?php /* BANNER 1*/ ?>
<?php if (get_field('home_banner_1','option')) { ?>
<div id="banner-1" class="container banner margin-top-2">
    <div class="row">
    	<div class="col-md-12">
    		<a href="<?php echo $linkBanner1; ?>"><img class="waypointTarget" src="<?php echo $trueImgBanner1; ?>" /></a>
    	</div>
    </div>
</div>
<?php } ?>
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
    <a href="<?php echo $link_area_genitori; ?>" class="row linkAreaGenitori">
    	<div class="col-md-2 col-lg-offset-2 col-md-offset-1">
        <img width="150" class="" src="<?php echo get_template_directory_uri() ?>/img/agera-genitori-icon.png">	      
        </div>
        <div class="col-lg-6 col-md-8">
        <h2>Area <strong>Genitori/Studenti</strong></h2>
        <p><?php echo $descrizione_area_genitori; ?></p>
        </div>
    </a>
</div>
<?php /* FINE AREA GENITORI */ ?>


<?php /* BANNER 2 */ ?>
<?php if (get_field('home_banner_2','option')) { ?>
<div id="banner-2" class="banner container">
    <div class="row banner banner-r1 margin-top-2">
    	<div class="col-md-12">
    		<a href="<?php echo $linkBanner2; ?>"><img class="waypointTarget" src="<?php echo $trueImgBanner2; ?>" /></a>
    	</div>
    </div>
</div>
<?php } ?>
<?php /* FINE BANNER 2 */ ?>


<?php /* NEWS FLOW */ ?>
<div class="container margin-top-2">
	<h2 class="circle green bigTitle"><span><strong>News</strong> Flow</span></h2>
    <div class="margin-top-1">
   	<?php get_template_part('includes/loops/content', 'newsFrontPage'); 
	wp_reset_postdata();
	?>
   	</div>
</div>
<?php /* FINE NEWS FLOW */ ?>


<?php /* CITAZIONI */ ?>
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
<?php /* FINE CITAZIONI */ ?>

<?php /* PROPOSTA FORMATIVA */ ?>
<div id="proposta-formativa" class="container margin-top-1" >
	<div class="row">
    	<div class="col-md-12">
        	<h2 class="circle green bigTitle"><span><strong>Proposta</strong> Formativa</span></h2>
        </div>
    </div>
    <div class="row margin-top-1 waypointTarget">
    	<div class="col-md-4 text-center">
        <img src="<?php echo get_template_directory_uri() ?>/img/icon-CFP.png">
        <h3>Centro <strong>Formazione<br>Professionale</strong></h3>
        <p>No? Alright, be that way. It's your meeting. Why don't you start talking and tell me what you want? Oh man! 50 G's?</p>
        </div>
        <div class="col-md-4 text-center">
        <img src="<?php echo get_template_directory_uri() ?>/img/icon-ITT.png">
        <h3>Istituto <strong>Tecnico<br>Tecnologico</strong></h3>
        <p>No? Alright, be that way. It's your meeting. Why don't you start talking and tell me what you want? Oh man! 50 G's?</p>
        </div>
        <div class="col-md-4 text-center">
        <img src="<?php echo get_template_directory_uri() ?>/img/icon-formazione-continua.png">
        <h3>Formazione <strong>Continua<br>Superiore</strong></h3>
        <p>No? Alright, be that way. It's your meeting. Why don't you start talking and tell me what you want? Oh man! 50 G's?</p>
        </div>
    </div>
</div>
<?php /* FINE PROPOSTA FORMATIVA */ ?>



<?php /* COMING SOON */ ?>
<div class="container margin-top-1" >
    <div id="coming-soon" class="row banner margin-top-1 bigText">
    	<div class="col-md-4"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/sample-coming-soon.jpg "></div>
        <div class="col-md-8">
        <h2 class="bigTitle"><strong>Comunicazioni</strong> Flash</h2>        
            <?php get_template_part('includes/loops/content', 'comingSoonFrontPage'); 
			wp_reset_postdata();
			?> 
        </div>
    </div>
</div>
<?php /* FINE COMING SOON */ ?>

<?php /* BANNER 3 */ ?>
<?php if (get_field('home_banner_3','option')) { ?>
<div id="banner-3" class="banner container">
    <div class="row banner banner-r1 margin-top-2 margin-botton-2">
    	<div class="col-md-12">
    		<a href="<?php echo $linkBanner3; ?>"><img class="waypointTarget" src="<?php echo $trueImgBanner3; ?>" /></a>
    	</div>
    </div>
</div>
<?php } ?>
<?php /* FINE BANNER 2 */ ?>


<?php /* STATISTICHE */ ?>
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
<?php /* FINE STATISTICHE */ ?>


<?php /* BUON COMPLEANNO */ ?>
<?php
$compleanni = CsvToArray::open('wp-content/compleanni.csv');
$today = date('d/m/y') . '';
$today = substr($today, 0, strlen($today)-3);
$oggiCompleanno = array();
foreach($compleanni as $compleanno) {
	if ($today == substr($compleanno[3], 0, strlen($compleanno[3])-3))
		$oggiCompleanno[] = $compleanno;	
}
if (count($oggiCompleanno)>0) {
$auguri = "<h2>Buon <strong>compleanno</strong> a </h2>\n";
foreach ($oggiCompleanno as $uno) {
	$auguri .= "<h3>" . ucfirst(strtolower($uno[0])) . " " . ucfirst(strtolower($uno[1])) . " " . strtoupper($uno[2]) . "</h3>\n";  
}
} else {
	$auguri = "<h2><strong>Peccato!</strong><br> Oggi nessuno compie gli anni</h3>\n";
}
//imposto stringhe data in italiano 
$localString = "it_IT";
if(isWin()) $localString = "ita_ITA";
setlocale(LC_TIME, $localString);
$giorno = strftime("%d");
$mese = strftime("%B");
?>
<div id="area-compleanni" class="container margin-top-2 margin-bottom-2">
    	<div class="col-md-2 col-lg-offset-2 col-md-offset-1">
        <div style="background-image:url(<?php echo get_template_directory_uri() ?>/img/icon-compleanno.png)" class="dataContainer"><span class="giorno"><?php echo $giorno; ?></span><span class="mese"><?php echo $mese; ?></span></div>      
        </div>
        <div class="col-lg-6 col-md-8">
        <?php echo $auguri;?>
        </div>
</div>
<?php /* FINE BUON COMPLEANNO */ ?>
<?php get_template_part('includes/footer'); ?>
