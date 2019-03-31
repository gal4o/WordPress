</div>
<footer id="footer">
	<?php if (!dynamic_sidebar("Left Footer")) : endif;?>
	<?php if (!dynamic_sidebar("Middle Footer")) : endif;?>
	<?php if (!dynamic_sidebar("Right Footer")) : endif;?>
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>