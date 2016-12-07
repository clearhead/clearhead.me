#[clearhead.me](http://clearhead.me/)

Website for Clearhead

## Site Setup

### Hosting
The production site and staging site ([clearhead.staging.wpengine.com](http://clearhead.staging.wpengine.com/)) are hosted by [WP Engine](https://my.wpengine.com/installs/clearhead).

### CMS
The site uses [WordPress](https://wordpress.org/) for content management. Visit the WordPress Admin Screens to edit the content: [clearhead.me/wp-admin](http://clearhead.me/wp-admin/). The active theme’s files are located in `/wp-content/themes/clearhead-2016/` (AKA `~` for our purposes).

As of now the CMS is only integrated with the blog and generic body content on a handful of other pages.

### Styles
The CSS file (found at `~/style.css`) is a [Sass](http://sass-lang.com/) output file and should not be edited directly. The source files are in `~/sass/`. This Sass was originally compiled using [CodeKit](https://incident57.com/codekit/).

### Scripts
Javascript files can be found in `~/js/` and “[enqueued](https://developer.wordpress.org/reference/functions/wp_enqueue_script/)” from the `~/functions.php` file’s `clearhead_2016_scripts_and_styles` function using the `wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );` function and parameters. 

### Contact Form
The Contact form uses Jetpack’s [“Contact Form” module](https://jetpack.com/support/contact-form/). The form’s entries are sent via email to the recipient specified in its shortcode markup – which is located in the [Contact page’s](http://clearhead.me/wp-admin/post.php?post=22&action=edit) entry.


## Deploying
[Git Push](https://my.wpengine.com/installs/clearhead/git_push) integration is setup with [Circle CI](https://circleci.com/gh/clearhead/clearhead.me) to automatically deploy changes via SSH to WP Engine. The deploy scripts are located in `/bin/`. Check [Circle CI](https://circleci.com/gh/clearhead/clearhead.me) for the status.

* Changes pushed to the `staging` branch to deploy to the **staging site**.
* Changes pushed to the `master` branch to deploy to the **production site**.
