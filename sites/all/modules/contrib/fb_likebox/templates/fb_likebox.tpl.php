<?php

/**
 * @file
 * Facebook Likebox Template.
 */
?>

<iframe
src="//www.facebook.com/plugins/likebox.php?href=<?php print $fb_url; ?>&amp;width=<?php print $fb_width; ?>&amp;colorscheme=<?php print $fb_colorscheme; ?>&amp;show_faces=<?php print $fb_show_faces; ?>&amp;bordercolor&stream=<?php echo $fb_stream; ?>&amp;header=<?php print $fb_header; ?>&amp;height=<?php print $fb_height; ?>"
scrolling="<?php echo $fb_scrolling; ?>"
frameborder="0"
style="border: none; overflow: hidden; width: <?php print $fb_width; ?>px; height: <?php print $fb_height; ?>px;"
allowTransparency="true">
</iframe>
