<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

	if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

		<footer id="main-footer" class="option-1">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>
			
			<?php if ( false !== et_get_option( 'center_footer_content', true ) ) { ?>
			<style>
			#footer-info, .et-social-icons {
			text-align: center;
			line-height:40px;
			float: none;
			}
			</style>
			<?php } ?>

				<?php $visibility = ( '1' == et_get_option( 'hide_footer_section' ) ) ? 'hidden' : '' ?>
					
				<div id="footer-bottom" class="<?php echo $visibility; ?>" >
					
					<div class="container clearfix">
					
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>
				
					<p id="footer-info">
					
					&copy; <?php echo date('Y'); ?> 
				<?php 
					if ( '' !== et_get_option( 'footer_copyright_text' ) && false !== et_get_option( 'footer_copyright_text' ) ) {
						echo et_get_option( 'footer_copyright_text' );
					} else {
                ?>
					<a href="http://www.candythemes.com" target="_blank">Candy Themes</a> | Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a> &amp; <a href="http://www.candythemes.com/visit/ElegantThemes/Divi" target="_blank"  rel="nofollow">Divi</a> by <a href="http://www.candythemes.com/visit/ElegantThemes" target="_blank"  rel="nofollow">Elegant Themes</a><br/>
				<?php
                    }
				?>
					
					</p>
						
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

	<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
	
</body>
</html>