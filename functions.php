<?php
add_action( 'admin_menu', 'haiku_add_admin_menu' );
add_action( 'admin_init', 'haiku_settings_init' );


function haiku_add_admin_menu(  ) {

	add_menu_page( 'haiku', 'haiku', 'manage_options', 'haiku', 'haiku_options_page' );

}

function haiku_settings_init(  ) {

	register_setting( 'pluginPage', 'haiku_settings' );

	add_settings_section(
		'haiku_pluginPage_section',
		__( '', 'wordpress' ),
		'haiku_settings_section_callback',
		'pluginPage'
	);

	add_settings_field(
		'txt_prev',
		__( 'previous text', 'wordpress' ),
		'txt_prev_render',
		'pluginPage',
		'haiku_pluginPage_section'
	);

	add_settings_field(
		'txt_next',
		__( 'next text', 'wordpress' ),
		'txt_next_render',
		'pluginPage',
		'haiku_pluginPage_section'
	);

	add_settings_field(
		'txt_404',
		__( 'error 404 message', 'wordpress' ),
		'txt_404_render',
		'pluginPage',
		'haiku_pluginPage_section'
	);

	add_settings_field(
		'check_grayscale',
		__( 'auto grayscale images', 'wordpress' ),
		'check_grayscale_render',
		'pluginPage',
		'haiku_pluginPage_section'
	);

}


function txt_prev_render(  ) {

	$options = get_option( 'haiku_settings' );
	?>
	<input type='text' name='haiku_settings[txt_prev]' value='<?php echo $options['txt_prev']; ?>'>
	<?php

}

function txt_next_render(  ) {

	$options = get_option( 'haiku_settings' );
	?>
	<input type='text' name='haiku_settings[txt_next]' value='<?php echo $options['txt_next']; ?>'>
	<?php

}

function txt_404_render(  ) {

	$options = get_option( 'haiku_settings' );
	?>
	<input type='text' name='haiku_settings[txt_404]' value='<?php echo $options['txt_404']; ?>'>
	<?php

}

function check_grayscale_render(  ) {

	$options = get_option( 'haiku_settings' );
	?>
	<input type='checkbox' name='haiku_settings[check_grayscale]' <?php checked( $options['check_grayscale'], 1 ); ?> value='1'>
	<?php

}

function haiku_settings_section_callback(  ) {

}


function haiku_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>haiku theme options</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>
