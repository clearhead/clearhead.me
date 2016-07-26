<?php
/**
 * Adds additional fields to the profile page
 *
 *
 * @package clearhead
 */

/**
 * Outputs markup for profile fields
 */
function clearhead_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="title">Title</label></th>

			<td>
				<input type="text" name="title" id="title" value="<?php echo esc_attr( get_the_author_meta( 'title', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your title.</span>
			</td>
		</tr>

		<tr>
			<th><label for="title">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter handle.</span>
			</td>
		</tr>

		<tr>
			<th><label for="title">LinkedIn</label></th>

			<td>
				<input type="text" name="linked" id="linked" value="<?php echo esc_attr( get_the_author_meta( 'linked', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your LinkedIn URL.</span>
			</td>
		</tr>

		<tr>
			<th><label for="hi">Hi Link</label></th>

			<td>
				<input type="text" name="hi" id="hi" value="<?php echo esc_attr( get_the_author_meta( 'hi', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your "Say Hi" URL.</span>
			</td>
		</tr>

	</table>
<?php }
add_action( 'show_user_profile', 'clearhead_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'clearhead_show_extra_profile_fields' );

/**
 * Saves markup for profile fields
 *
 * @TODO Proper data sanitization
 */
function clearhead_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	update_usermeta( $user_id, 'title', $_POST['title'] );
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
	update_usermeta( $user_id, 'linked', $_POST['linked'] );
	update_usermeta( $user_id, 'hi', $_POST['hi'] );
}
add_action( 'personal_options_update', 'clearhead_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'clearhead_save_extra_profile_fields' );