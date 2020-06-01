<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elamentor_eCommerce
 */

?>

					<footer id="colophon" class="site-footer">
						<div class="row">
							<div class="col">
								<h2><?php echo bloginfo('name'); ?></h2>
								<div class="footer-left-menu">
									<?php
										wp_nav_menu(
											array(
												'theme-location' => 'footer-left-menu',
												'menu-class' 	 => 'd-flex'
											)
										);
									?>
								</div>
								
							</div>
							<div class="col-lg-1">
								
							</div>
							<div class="col">
								<div class="footer-right-menu">
									<?php
										wp_nav_menu(
											array(
												'theme-location' => 'footer-left-menu',
												'menu-class' 	 => 'd-flex'
											)
										);
									?>																		
								</div>
								
							</div>
						</div>
						<div class="site-info">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'elementor-commerce' ) ); ?>">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( 'Proudly powered by %s', 'elementor-commerce' ), 'WordPress' );
								?>
							</a>
							<span class="sep"> | </span>
								<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Theme: %1$s by %2$s.', 'elementor-commerce' ), 'elementor-commerce', '<a href="https://osmanhaider.com">adnan</a>' );
								?>
						</div><!-- .site-info -->
					</footer><!-- #colophon -->
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
