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
				<h1 style="background-color:#f0f2f4; padding:10px 25px; color:#005274; font-size:20px; font-weight:bold" class="entry-title"><?php the_title(); ?></h1>
			</div>
		</div><br>
		<div class="row">
			<div class="col grid_6_of_12">
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); } ?>

			</div> <!-- /.col.grid_6_of_12 -->
			<div class="col grid_6_of_12">
				<div style="background-color:#005274; padding:25px 50px; color:white">
					<p>
						<strong>HaiShop</strong><br>
						Vila Carrão - São Paulo <br>
						CNPJ 078.898.886/0001-81
					</p>
					<p>
						<strong>Contatos</strong>
						contato@haishop.com.br <br>
						11 2296-3412
					</p>
					<p>
						<strong>SAC HaiShop</strong><br/>
						sac@haishop.com.br<br/>
						11 2296-3412
					</p>
				</div>
			</div> <!-- /.col.grid_6_of_12 -->
		</div>
	</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
