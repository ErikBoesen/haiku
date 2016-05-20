<!DOCTYPE html>
<html>
<?php
    $options = get_option( 'haiku_settings' );
    if ($options['txt_prev']==null) $options['txt_prev']="previous";
    if ($options['txt_next']==null) $options['txt_next']="next";
?>
<head>
	<meta charset="utf-8">
    <title><?php the_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <article>
        <h1><?php the_post(); the_title(); ?></h1>
        <?php the_content(); ?>
    </article>
    <div id="float">
        <div id="prev"><?php previous_post('% ', $options['txt_prev'], 'no'); ?></div>
        <div id="next"><?php next_post('% ', $options['txt_next'], 'no'); ?></div>
    </div>
</body>
</html>
