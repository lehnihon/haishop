<?php
/**
 * Template Name: Contato
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content" role="main">
		<div class="row">
			<div class="col grid_12_of_12">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<p><strong>Entre em contato com a Haishop, respondemos em breve!</strong><p>
			</div>
		</div>
		<div class="row">
			<div class="col grid_6_of_12">
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); } ?>

			</div> <!-- /.col.grid_6_of_12 -->
			<div class="col grid_6_of_12">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1828.7215682314447!2d-46.629342915728515!3d-23.55252306537228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce590747f2413b%3A0x2e7d616150104a8f!2sR.+Silveira+Martins%2C+160+-+S%C3%A9%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1436115558103" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				<p>
					<strong>Endereço</strong><br/>
					Rua Silveira Martins, 160 conjunto 02 - Centro - São Paulo
				</p>
				<p>
					<strong>Telefones</strong><br/>
					11 3203-1478<br/>
					11 98937-2110
				</p>
			</div> <!-- /.col.grid_6_of_12 -->
		</div>
	</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
