<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title><?php the_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php
        $options = get_option( 'haiku_options' );
        if ($options['txt_prev'] == null) $options['txt_prev'] = 'previous';
        if ($options['txt_next'] == null) $options['txt_next'] = 'next';
    ?>
    <!--?php
        if ($options['check_grayscale'] == '1') {
            echo '
                <style>
                    img {
                        -webkit-filter: grayscale(100%);
                        filter: grayscale(100%);
                    }
                </style>
            ';
        }
    ?>-->
    <style>
        body {
            background-color: <?php echo $options['bgcolor'] ?>;
            color: <?php echo $options['textcolor'] ?>;
        }
        @media (max-width: 10in) {
            #float {
                background: <?php echo $options['bgcolor'] ?>;
            }
        }
    </style>
</head>

<body>
    <article>
        <?php the_post(); ?>
        <?php if ($options['radio_date']=='atitle') echo the_date('', '<h5>', '</h5>')?>
        <h1><?php the_title(); ?></h1>
        <?php if ($options['radio_date']=='utitle') echo the_date('', '<h5>', '</h5>')?>
        <?php the_content(); ?>
        <?php if ($options['radio_date']=='upost') echo the_date('', '<h5>', '</h5>')?>
    </article>
    <div id="float">
        <div id="prev"><?php previous_post('% ', $options['txt_prev'], 'no'); ?></div>
        <div id="next"><?php next_post('% ', $options['txt_next'], 'no'); ?></div>
    </div>
</body>
</html>
