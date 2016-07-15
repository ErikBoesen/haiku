<?php

function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'header_color' , array(
        'default'     => '#000000',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_setting( 'header_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'refresh',
    ) );

}
add_action( 'customize_register', 'mytheme_customize_register' );

?>