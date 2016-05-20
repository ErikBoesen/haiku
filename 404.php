<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title><?php echo bloginfo( 'name' )." - 404"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php

		$options = get_option( 'haiku_settings' );

		echo "
			<style>
			html,
			body{
				background-color:#".$options['txt_color'].";
			}
			</style>
			";

?>
    <style>
        html,
        body {
            height: 100%;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
						flex-direction: column;

        }
    </style>

</head>
<body>
    <h1><?php echo $options['txt_404'] ?></h1> </br>
    <p><a href="<?php bloginfo('url'); ?>">home.</a></p>
</body>
</html>
