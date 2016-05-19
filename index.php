<!DOCTYPE html>
<html>
<?php $options = get_option( 'haiku_settings' ); 
?> 
<head>
	<meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <article>
        <h1><?php the_post(); the_title(); ?></h1>
        <?php the_content(); ?>
    </article>
    <div id="float">
        <div id="before"><?php previous_post('% ', $options['txt'], 'no'); ?></div>
        <div id="after"><?php next_post('% ', $options['haiku_text_field_1'], 'no'); ?></div>
    </div>
</body>
</html>

