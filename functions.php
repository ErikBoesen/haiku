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
		'txt', 
		__( 'before text', 'wordpress' ), 
		'txt_render', 
		'pluginPage', 
		'haiku_pluginPage_section' 
	);

	add_settings_field( 
		'haiku_text_field_1', 
		__( 'after text', 'wordpress' ), 
		'haiku_text_field_1_render', 
		'pluginPage', 
		'haiku_pluginPage_section' 
	);


}


function txt_render(  ) { 

	$options = get_option( 'haiku_settings' );
	?>
	<input type='text' name='haiku_settings[txt]' value='<?php echo $options['txt']; ?>'>
	<?php

}


function haiku_text_field_1_render(  ) { 

	$options = get_option( 'haiku_settings' );
	?>
	<input type='text' name='haiku_settings[haiku_text_field_1]' value='<?php echo $options['haiku_text_field_1']; ?>'>
	<?php

}


function haiku_settings_section_callback(  ) { 

}


function haiku_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>haiku</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>