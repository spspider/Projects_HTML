<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06.02.2018
 * Time: 13:40
 */
// create custom plugin settings menu
add_action('admin_menu', 'MQTT_OPTIONS');
function MQTT_OPTIONS() {

	//create new top-level menu
	add_menu_page('MQTT options Settings', 'MQTT options', 'administrator', __FILE__, 'baw_settings_page',plugins_url('/images/icon.png', __FILE__));

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {
	//register our settings
	register_setting( 'MQTT-settings-group', 'MQTT_Server_port' );
	register_setting( 'MQTT-settings-group', 'MQTT_login' );
	register_setting( 'MQTT-settings-group', 'MQTT_pass' );
}


function baw_settings_page() {
	?>
	<div class="wrap">
		<h2>Your Plugin Name</h2>

		<form method="post" action="options.php">
			<?php settings_fields( 'baw-settings-group' ); ?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Server, port</th>
					<td><input type="text" name="MQTT_Server_port" value="<?php echo get_option('MQTT_Server_port'); ?>" /></td>
				</tr>

				<tr valign="top">
					<th scope="row">login</th>
					<td><input type="text" name="MQTT_login" value="<?php echo get_option('MQTT_login'); ?>" /></td>
				</tr>

				<tr valign="top">
					<th scope="row">pass</th>
					<td><input type="text" name="MQTT_pass" value="<?php echo get_option('MQTT_pass'); ?>" /></td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
			</p>

		</form>
	</div>
<?php } ?>