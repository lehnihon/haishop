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
		<div class="products row" style="text-align:center; margin-bottom:20px">
			<h4>Produtos para simplificar sua vida</h4>
		    <?php

		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'categoria', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post(); global $product, $woocommerce_loop; ?>

		        		<?php
						// Ensure visibility
						if ( ! $product || ! $product->is_visible() ) {
							return;
						}
						// Extra post classes
						$classes = array();

						$classes[] = 'col grid_3_of_12';
		        		?>

		                <div <?php post_class( $classes ); ?>>    
		                	<h3><?php the_title(); ?></h3>
		                    <a  class="bw" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
		                    	
		                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?> 
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

		                        

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

		                </div>

		    <?php endwhile; ?>
		    <?php wp_reset_query(); ?>
		</div><!--/.products-->

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
		<div class="products row" style="text-align:center; margin-bottom:20px">
			<h4>Produtos para simplificar sua vida</h4>
		    <?php

		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'categoria', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post(); global $product, $woocommerce_loop; ?>

		        		<?php
						// Ensure visibility
						if ( ! $product || ! $product->is_visible() ) {
							return;
						}
						// Extra post classes
						$classes = array();

						$classes[] = 'col grid_3_of_12';
		        		?>

		                <div <?php post_class( $classes ); ?>>    
		                	<h3><?php the_title(); ?></h3>
		                    <a  class="bw" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
		                    	
		                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?> 
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

		                        

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

		                </div>

		    <?php endwhile; ?>
		    <?php wp_reset_query(); ?>
		</div><!--/.products-->
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
		<div class="products row" style="text-align:center; margin-bottom:20px">
			<h4>Produtos para simplificar sua vida</h4>
		    <?php

		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'categoria', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post(); global $product, $woocommerce_loop; ?>

		        		<?php
						// Ensure visibility
						if ( ! $product || ! $product->is_visible() ) {
							return;
						}
						// Extra post classes
						$classes = array();

						$classes[] = 'col grid_3_of_12';
		        		?>

		                <div <?php post_class( $classes ); ?>>    
		                	<h3><?php the_title(); ?></h3>
		                    <a  class="bw" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
		                    	
		                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?> 
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

		                        

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

		                </div>

		    <?php endwhile; ?>
		    <?php wp_reset_query(); ?>
		</div><!--/.products-->
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
		<div class="products row" style="text-align:center; margin-bottom:20px">
			<h4>Produtos para simplificar sua vida</h4>
		    <?php

		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'categoria', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post(); global $product, $woocommerce_loop; ?>

		        		<?php
						// Ensure visibility
						if ( ! $product || ! $product->is_visible() ) {
							return;
						}
						// Extra post classes
						$classes = array();

						$classes[] = 'col grid_3_of_12';
		        		?>

		                <div <?php post_class( $classes ); ?>>    
		                	<h3><?php the_title(); ?></h3>
		                    <a  class="bw" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
		                    	
		                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?> 
		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

		                        

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

		                </div>

		    <?php endwhile; ?>
		    <?php wp_reset_query(); ?>
		</div><!--/.products-->
		<?php get_template_part( 'newsletter' ); ?>
	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
