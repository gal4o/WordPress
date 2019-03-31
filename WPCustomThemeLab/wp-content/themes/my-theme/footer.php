</div>
<footer id="footer">
	<nav id="menu-footer">
	<label class="toggle-footer" for="toggle-footer">&#9776; Menu</label>
	<input id="toggle-footer" class="toggle-footer"
type="checkbox"/>
<?php wp_nav_menu(array('theme_location' => 'footer-menu'));
?>
</nav>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left Footer") ) : ?>
<?php endif;?>
	<?php if ( !function_exists('dynamic_sidebar') ||
!dynamic_sidebar("Middle Footer") ) : ?>
<?php endif;?>
	<?php if ( !function_exists('dynamic_sidebar') ||
!dynamic_sidebar("Right Footer") ) : ?>
<?php endif;?>
	
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
	
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>