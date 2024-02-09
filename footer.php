</main>
	<footer id="site-footer">
		<h2>
			<span class="screen-reader-text">
				<?php _e( 'Site footer', 'toms' ); ?>
			</span>
		</h2>

		<div class="footer-columns">
			<div class="footer-columns-container widgets">
				<div class="footer-column">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="footer-column">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="footer-column">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
				<div class="footer-column">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell">
						<?php dynamic_sidebar( 'copyright' ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
