<!doctype html>
<html lang="en-US">
    <head>
        <title>Zelda Archive</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    </head>
    <body>
        <main>
            <div id="controls">
                <span id="logo">Zelda Archive</span>
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
            </div>