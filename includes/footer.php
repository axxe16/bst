<?php /* NEWSLETTER */ ?>
<?php $nwslt 	= get_field('info_newsletter', 'option'); ?>
<div id="area-newsletter" class="container margin-top-2 margin-bottom-2">
    	<div class="col-md-8">
              <h2 class="circle purple bigTitle"><strong>Iscriviti</strong> alla nostra newsletter</h2>
              <p><?php echo $nwslt; ?></p>
        </div>
        <div class="col-md-4">
        <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//issm.us2.list-manage.com/subscribe/post?u=75aa26e39bb46ad03944a836e&amp;id=0cf887f51c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
	<label for="mce-EMAIL" class="hidden">Email <span class="asterisk">*</span>
</label>
	<input class="emailField" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="inserisci la tua email">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_75aa26e39bb46ad03944a836e_0cf887f51c" tabindex="-1" value=""></div>
    <div class="clear pull-right"><input type="submit" value="Iscriviti" name="subscribe" id="mc-embedded-subscribe" class="button submitField"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[3]='MMERGE3';ftypes[3]='radio';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: IT
 */
$.extend($.validator.messages, {
       required: "Campo obbligatorio.",
       remote: "Controlla questo campo.",
       email: "Inserisci un indirizzo email valido.",
       url: "Inserisci un indirizzo web valido.",
       date: "Inserisci una data valida.",
       dateISO: "Inserisci una data valida (ISO).",
       number: "Inserisci un numero valido.",
       digits: "Inserisci solo numeri.",
       creditcard: "Inserisci un numero di carta di credito valido.",
       equalTo: "Il valore non corrisponde.",
       accept: "Inserisci un valore con un&apos;estensione valida.",
       maxlength: $.validator.format("Non inserire pi&ugrave; di {0} caratteri."),
       minlength: $.validator.format("Inserisci almeno {0} caratteri."),
       rangelength: $.validator.format("Inserisci un valore compreso tra {0} e {1} caratteri."),
       range: $.validator.format("Inserisci un valore compreso tra {0} e {1}."),
       max: $.validator.format("Inserisci un valore minore o uguale a {0}."),
       min: $.validator.format("Inserisci un valore maggiore o uguale a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
        </div>
</div>
<?php /* FINE NEWSLETTER */ ?>

<?php /* CONTATTI */ ?>
<div id="info-contatti" class="container margin-top-1">
	<div class="row">
    <div class="col-md-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.994963077714!2d12.203872451359823!3d45.49004617899865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb5c672f788d5%3A0x326c0113c67dbd58!2sIstituto+Salesiano+San+Marco!5e0!3m2!1sit!2sit!4v1447420022960" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    <div class="col-md-4">
    <?php the_field('info_contatti_footer', 'option'); ?>
    </div>
    <div class="col-md-4">
    <h3>Seguici</h3>
    <div class="social-footer">
	<?php $logo 	= get_field('logo', 'option'); ?>
    <?php $fb 		= get_field('facebook', 'option'); ?>
    <?php $tw 		= get_field('twitter', 'option'); ?>
    <?php $ist 		= get_field('instagram', 'option'); ?>
    <?php $you 		= get_field('youtube', 'option'); ?>
    
	<?php if ($fb != '') echo '<a href="'. $fb .'" target="_blank"><i class="fa fa-facebook"></i></a>'; ?>
    <?php if ($tw != '') echo '<a href="'. $tw .'" target="_blank"><i class="fa fa-twitter"></i></a>'; ?>
    <?php if ($ist != '') echo '<a href="'. $ist .'" target="_blank"><i class="fa fa-instagram"></i></a>'; ?>
    <?php if ($you != '') echo '<a href="'. $you .'" target="_blank"><i class="fa fa-youtube"></i></a>'; ?>
    <h3>Contattaci</h3>
    <?php echo do_shortcode('[contact-form-7 id="80" title="Contatto Footer"]'); ?>
    </div>
    </div>
    </div>
</div>
<?php /* FINE CONTATTI */ ?>

<div id="subFooter">
    <div class="container">
    	<div class="row">
        	<div class="col-md-3">
            <a class="footer-home-logo" href="<?php echo home_url(); ?>"><img width="230" src="<?php echo get_template_directory_uri() ?>/img/logo-footer.png"></a>
            </div>
        <div class="col-md-8">
        <?php 
        if ( has_nav_menu( 'footer-menu' ) ) {
              wp_nav_menu( array( 'theme_location' => 'footer-menu') ); 
        }
        ?>
        </div>
        <div class="col-md-1"><a id="toTop" class="top-button" href="#"><img width="69" src="<?php echo get_template_directory_uri() ?>/img/up-footer.png"></a></div>
    </div>
    </div>
</div>
<footer class="container site-footer">
  <div class="row">
    <div class="col-lg-12 site-sub-footer">
      <p><?php the_field('info_footer', 'option'); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
