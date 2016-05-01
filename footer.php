<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

		<?php	do_action( 'quark_after_woocommerce' ); ?>
	</div> <!-- /#maincontentcontainer -->

	<div id="footercontainer">
		<div class="site-footer">
			<footer class="row" role="contentinfo">
				<div class="col grid_2_of_12">
					<h5>Departamentos</h5>
					<ul>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/boia-eletrica'; ?>">Bóia Elétrica</a></li>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/chaves'; ?>">Chaves</a></li>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/chave-botao-caca'; ?>">Chaves Botão Caça</a></li>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/coluna-de-instrumentos'; ?>">Coluna de Instrumentos</a></li>
					</ul>
				</div>		
				<div class="col grid_2_of_12"><br/>
					<ul>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/instrumentacao'; ?>">Instrumentação Automotiva</a></li>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/painel'; ?>">Painel Automotivo</a></li>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/Marcas'; ?>">Marcas</a></li>
					</ul>
				</div>
				<div class="col grid_2_of_12"><br/>
					<ul>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/bebes'; ?>">Bebês</a></li>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/casa'; ?>">Casa</a></li>
						<li><a href="<?php echo home_url( '/' ).'categoria-produto/bar-pro'; ?>">Bar pró</a></li>
					</ul>
				</div>
				<div class="col grid_2_of_12">
					<h5>Sobre a Haishop</h5>
					<ul>
						<li><a href="#">Institucional</a></li>
						<li><a href="#">Política de Privacidade</a></li>
						<li><a href="#">Troca e Devolução</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ))."/contato/"; ?>">Fale Conosco</a></li>
					</ul>
				</div>
				<div class="col grid_4_of_12">
					<h5>Nossa Redes Sociais</h5>
					<ul class="redes_sociais_bot">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="#"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
						<li class="facebook"><a target="_blank" href="#"></a></li>
					</ul>	
				</div>
			</footer> <!-- /.site-footer.row --> <br> <br>
			<footer class="row" style="border-top:2px solid #E8E8E8; padding:25px 0; ">
				<div class="col grid_6_of_12">
					<h5>Formas de Pagamento</h5>
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/formas_pgto.jpg"; ?>" alt="" />
				</div>
				<div class="col grid_6_of_12">
					<h5>Televendas</h5>
					<p>
						11 2296-3412 <br>
						contato@haishop.com.br
					</p>
				</div>
			</footer>
			<?php if ( of_get_option( 'footer_content', quark_get_credits() ) ) {
				echo '<div class="row smallprint">';
				echo apply_filters( 'meta_content', wp_kses_post( of_get_option( 'footer_content', quark_get_credits() ) ) );
				echo '</div> <!-- /.smallprint -->';
			} ?>
		</div>
	</div> <!-- /.footercontainer -->
	<div id="copyrightcontainer">
		<div class="site-content">
			<div class="row">
				<div class="col grid_10_of_12" style="text-align:center">
					<p>
					© Copyright 2015 - Haishop - CNPJ 07.898.886/0001-81 - Vila Carrão - São Paulo 
					</p>
				</div>
				<div class="col grid_2_of_12">
					<a target="_blank" href="http://agenciarino.com.br/"><img class="anima-rino" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-rino.jpg"?>" /></a>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.#wrapper.hfeed.site -->

<?php wp_footer(); ?>
</body>

</html>
