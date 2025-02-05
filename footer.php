<?php
/**
 * @package WordPress
 * @subpackage Tersus
 */
?>

<?php

	// This duplicates some code that exists in the
	// header for handling the stylesheet switching.
	// We might want to make this a single function
	// or global elsewhere.

	global $options;
	foreach ($options as $value) {
		if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
	}
?>			

		<footer>
			<p>Powered by <a href="http://wordpress.org/" title="Code is poetry.">WordPress <?php bloginfo('version'); ?></a></p>
			<p>Themed by <a href="<?php echo THEME_URI; ?>" title="<?php echo THEME_DESCRIPTION; ?>"><?php echo THEME_NAME . ' ' . THEME_VERSION; ?></a> using the “<?php echo ($tersus_style_sheet); ?>” style</p>
			<p>Subscribe to <a href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="Feed me.">Posts (RSS)</a> or <a href="<?php bloginfo('comments_rss2_url'); ?>" rel="alternate" title="Feed me.">Comments (RSS)</a></p>
			<?php wp_footer(); ?>
		</footer>
	</body>
</html>