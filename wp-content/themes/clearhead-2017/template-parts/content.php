<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clearhead-2016
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry-image">
		<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<?php endif; ?>
	<?php
		// get subtitle field, if post doesn't have it then make variable empty (avoid)
		$subtitle = get_field('subtitle');
		if ($subtitle == NULL) {
			$subtitle = '';
		} else {
			$subtitle = ': ' . $subtitle;
		}

		$header_title = get_the_title() . $subtitle;

	?>
	<div class="archive-entry-header">
		<h1 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php echo $header_title ?></a></h1>
	</div><!-- .archive-entry-header -->

	<div class="entry-content entry-content-archive">
		<?php
			// get the excerpt, if there isn't, then take testimony custom fields and it.
			$c_excerpt = strlen(get_the_excerpt());

			if ($c_excerpt !== 0) {
			 	the_excerpt();
			} else if ($c_excerpt == 0) {
		 		if( have_rows('intro_section') ) {
		 			while( have_rows('intro_section') ) : the_row();
						if( get_row_layout() == 'testimonial_block'):
							// get testimony from testimonial in intro section
							$testimony_words_count = substr_count(get_sub_field('testimony'), ' ');
							$max_words = 55;
							
							//spit and add the post link if content has more than 55 words
							if ($testimony_words_count < $max_words):
							?>
								<p><?php the_sub_field('testimony'); ?></p>
							<?php 
							else:
								// get the testimony as a string
								$testimony_content = get_sub_field('testimony');
								// split the string in words until it gets to the max amount of words
								$custom_ex = explode(" ", $testimony_content, $max_words);
								// take out the rest of the text
								array_pop($custom_ex);
								// display the text result and the post link
							?>
								<p><?php echo join(' ', $custom_ex) ?>...  <a href="<?php echo get_permalink(); ?>">Read More »</a></p>
							<?php 
							endif;
						endif;
					endwhile;
		 		}
			 }
		 ?>
	</div><!-- .entry-content -->

	<div class="author-meta clearfix">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 44 ); ?>
		<div class="author-information">
			<h3 class="m0"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></h3>
			<?php clearhead_2016_posted_on(); ?>
		</div>
	</div>
</article>
