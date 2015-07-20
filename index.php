<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header( 'shop' ); ?>

	<div id="primary" class="site-content woocommerce woocommerce-page home-products" role="main">
		<div id="bannercontainer" class="row">
			<div class="col grid_12_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=8]"); 
				?>	
			</div>			
		</div> <!-- /#bannercontainer -->
		<div class="row">
			<div class="col grid_4_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=11]"); 
				?>
			</div>
			<div class="col grid_4_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=12]"); 
				?>
			</div>
			<div class="col grid_4_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=13]"); 
				?>
			</div>
		</div>
		<div class="row">
			<ul class="products col grid_12_of_12" style="text-align:center; margin:0">
				<h4>Produtos para simplificar sua vida</h4>
			    <?php

			        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'categoria', 'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post(); global $product, $woocommerce_loop; ?>

			        		<?php
							// Store loop count we're currently on
							if ( empty( $woocommerce_loop['loop'] ) ) {
								$woocommerce_loop['loop'] = 0;
							}

							// Store column count for displaying the grid
							if ( empty( $woocommerce_loop['columns'] ) ) {
								$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
							}

							// Ensure visibility
							if ( ! $product || ! $product->is_visible() ) {
								return;
							}

							// Increase loop count
							$woocommerce_loop['loop']++;

							// Extra post classes
							$classes = array();
							if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
								$classes[] = 'first';
							}
							if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
								$classes[] = 'last';
							}
			        		?>

			                <li <?php post_class( $classes ); ?>>    
			                	<h3><?php the_title(); ?></h3>
			                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
			                    	
			                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?> 
			                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

			                        

			                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

			                    </a>

			                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

			                </li>

			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</ul><!--/.products-->
		</div> <!-- /.col.grid_12_of_12 -->
		<div class="row">
			<div class="col grid_6_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=20]"); 
				?>
			</div>
			<div class="col grid_6_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=22]"); 
				?>
			</div>
		</div>
		<div class="row">
			<ul class="products col grid_12_of_12" style="text-align:center; margin:0">
				<h4>Painel Automotivo</h4>
			    <?php

			        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'categoria', 'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post(); global $product, $woocommerce_loop; ?>

			        		<?php
							// Store loop count we're currently on
							if ( empty( $woocommerce_loop['loop'] ) ) {
								$woocommerce_loop['loop'] = 0;
							}

							// Store column count for displaying the grid
							if ( empty( $woocommerce_loop['columns'] ) ) {
								$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
							}

							// Ensure visibility
							if ( ! $product || ! $product->is_visible() ) {
								return;
							}

							// Increase loop count
							$woocommerce_loop['loop']++;

							// Extra post classes
							$classes = array();
							if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
								$classes[] = 'first';
							}
							if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
								$classes[] = 'last';
							}
			        		?>

			                <li <?php post_class( $classes ); ?>>    
			                	<h3><?php the_title(); ?></h3>
			                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
			                    	
			                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?> 
			                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

			                        

			                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

			                    </a>

			                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

			                </li>

			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</ul><!--/.products-->
		</div> <!-- /.col.grid_12_of_12 -->
		<div class="row">
			<div class="col grid_4_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=23]"); 
				?>
			</div>
			<div class="col grid_4_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=24]"); 
				?>
			</div>
			<div class="col grid_4_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=25]"); 
				?>
			</div>
		</div>
		<div class="row">
			<ul class="products col grid_12_of_12" style="text-align:center; margin:0">
				<h4>Proteção para o seu bebê</h4>
			    <?php

			        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'categoria', 'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post(); global $product, $woocommerce_loop; ?>

			        		<?php
							// Store loop count we're currently on
							if ( empty( $woocommerce_loop['loop'] ) ) {
								$woocommerce_loop['loop'] = 0;
							}

							// Store column count for displaying the grid
							if ( empty( $woocommerce_loop['columns'] ) ) {
								$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
							}

							// Ensure visibility
							if ( ! $product || ! $product->is_visible() ) {
								return;
							}

							// Increase loop count
							$woocommerce_loop['loop']++;

							// Extra post classes
							$classes = array();
							if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
								$classes[] = 'first';
							}
							if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
								$classes[] = 'last';
							}
			        		?>

			                <li <?php post_class( $classes ); ?>>    
			                	<h3><?php the_title(); ?></h3>
			                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
			                    	
			                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?> 
			                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

			                        

			                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

			                    </a>

			                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

			                </li>

			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</ul><!--/.products-->
		</div> <!-- /.col.grid_12_of_12 -->
		<div class="row">
			<div class="col grid_6_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=26]"); 
				?>
			</div>
			<div class="col grid_6_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=27]"); 
				?>
			</div>
		</div>
		<div class="row">
			<ul class="products col grid_12_of_12" style="text-align:center; margin:0">
				<h4>Definir ultima categoria</h4>
			    <?php

			        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'categoria', 'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post(); global $product, $woocommerce_loop; ?>

			        		<?php
							// Store loop count we're currently on
							if ( empty( $woocommerce_loop['loop'] ) ) {
								$woocommerce_loop['loop'] = 0;
							}

							// Store column count for displaying the grid
							if ( empty( $woocommerce_loop['columns'] ) ) {
								$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
							}

							// Ensure visibility
							if ( ! $product || ! $product->is_visible() ) {
								return;
							}

							// Increase loop count
							$woocommerce_loop['loop']++;

							// Extra post classes
							$classes = array();
							if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
								$classes[] = 'first';
							}
							if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
								$classes[] = 'last';
							}
			        		?>

			                <li <?php post_class( $classes ); ?>>    
			                	<h3><?php the_title(); ?></h3>
			                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
			                    	
			                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?> 
			                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

			                        

			                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

			                    </a>

			                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

			                </li>

			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</ul><!--/.products-->
		</div> <!-- /.col.grid_12_of_12 -->
		<?php get_template_part( 'newsletter' ); ?>
	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
