<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package harmonic
 */
?>

						<div class="clear"></div>
					</div><!-- #content .site-wrapper -->
				</div><!-- #content-wrapper -->
			</div>
			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="site-info">
					<?php do_action( 'harmonic_credits' ); ?>
					<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'harmonic' ), 'WordPress' ); ?></a>
					<!--<span class="sep"> | </span>-->
					<?php printf( __( 'Developed by %2$s.', 'harmonic' ), '', '<a href="http://calli.tech/" rel="designer">CalliTech</a>' ); ?>
				</div><!-- .site-info -->

			</footer><!-- #colophon .site-footer -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>