<?php
/*
Template Name: Redirect
*/

$latest = new WP_Query(array('showposts'=> 1));
while ($latest->have_posts()) : $latest->the_post();
$redirect_url = get_permalink();
endwhile;

if ($redirect_url) {
wp_redirect($redirect_url);

} ?> 