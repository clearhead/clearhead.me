<?php
/**
* Dashboard RSS Feed Widget
*/
?>
<div class="rss-widget">
	<a href="http://outside.hotjar.com/" class="" target="_blank"><img src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)); ?>../css/outside_logo.png" class="alignright" /></a>
	
	<ul>
		<?php
		if (!empty($rssPosts->item)) {
			foreach ($rssPosts->item as $key=>$rssPost) {
				?>
				<li>
					<a href="<?php echo (string) $rssPost->link; ?>" target="_blank" class="rsswidget"><?php echo (string) $rssPost->title; ?></a> <span class="rss-date">– <span class="rss-date"><?php echo date('m.d.y', strtotime($rssPost->pubDate)); ?></span>
				</li>
				<?php
			}
		}
		?>
		
		<li>
			<hr />
			<a href="http://outside.hotjar.com/feed/" class="rss" target="_blank"><?php _e('Subscribe with RSS', $this->dashboard->name); ?></a>
			<a href="http://outside.hotjar.com/" class="email" target="_blank"><?php _e('Subscribe by email', $this->dashboard->name); ?></a>
			<a href="https://www.facebook.com/HotjarApps" class="facebook" target="_blank"><?php _e('Follow Hotjar on Facebook', $this->dashboard->name); ?></a>
		</li>
	</ul>
</div>