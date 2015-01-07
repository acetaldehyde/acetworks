<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri() ?>/images/icon.ico">
        <title><?php bloginfo(); ?></title>
        <?php wp_head() ?>
    </head>
    <body>
    <header>
        <h1><a href="<?php bloginfo('url') ?>" title="<?php bloginfo() ?>"><?php bloginfo() ?></a></h1>
        <?php wp_nav_menu() ?>
    </header><!-- /header -->
