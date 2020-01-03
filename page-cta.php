<?php
/**
 * Template Name: CTA + form7
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpms
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

	
		<div class="row">
				<div class="col-6 pr-5">
					<h1 class="font-weight-bold mt-5">
						<?php the_field('text1'); ?>
					</h1>
					<p class="mt-4 mr-4 mb-4">
						<?php the_field('more'); ?>
					</p>
					<button type="button" id="ctaButton" class="btn btn-warning orangeButtons">
						<?php the_field('CTA-Button'); ?>
					</button>
				</div>

				<div class="col-6">

					<div id="cf7Block" class="text-center rounded">

						<h3 class="mt-5 font-weight-bold">Skontaktuj się z nami!</h3>

						<p class="mt-4">
							Oddzwonimy w ciągu 24 godzin
						</p>


						<?php
						echo do_shortcode( '[contact-form-7 id="26" title="Formularz 1"]' ); 
						?>

					</div>

				</div>
		
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
