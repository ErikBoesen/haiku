<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>haiku</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <?php the_post(); ?>
    <p><?php the_content(); ?></p>
    <div id="before">
        <?php previous_post('% ', 'before', 'no'); ?>
    </div>
    <div id="after">
        <?php next_post('% ', 'after', 'no'); ?>
    </div>
</body>
</html>