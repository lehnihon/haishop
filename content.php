<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<div class="featured-post">
				<?php esc_html_e( 'Featured post', 'quark' ); ?>
			</div>
		<?php } ?>
		<header class="entry-header">
			<?php if ( is_single() ) { ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php }
			else { ?>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
			<?php } // is_single() ?>

			<?php if ( has_post_thumbnail() && !is_search() ) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
					<?php the_post_thumbnail( 'post_feature_full_width' ); ?>
				</a>
			<?php } ?>
		</header> <!-- /.entry-header -->

		<?php if ( is_search() ) { // Only display Excerpts for Search ?>
		<div style="float:left; width: 20%">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<?php the_post_thumbnail( 'post_feature_full_width' ); ?>
			</a>
		</div>
		
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<?
				global $product;

				?>
				<br/>
				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
					<span style="color:#005176; font-weight:bold">Preço</span>
					<p class="price"><?php echo $product->get_price_html(); ?></p>

					<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
					<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
					<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

				</div>
			</div> <!-- /.entry-summary -->
		<?php }
		else { ?>
			<div class="entry-content">
				<?php the_content( wp_kses( __( 'Continue a ler <span class="meta-nav">&rarr;</span>', 'quark' ), array( 'span' => array( 
					'class' => array() ) ) )
					); ?>
				<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'quark' ),
					'after' => '</div>',
					'link_before' => '<span class="page-numbers">',
					'link_after' => '</span>'
				) ); ?>
			</div> <!-- /.entry-content -->
		<?php } ?>

	<div style="clear:both"></div>
	</article> <!-- /#post -->
