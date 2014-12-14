<!DOCTYPE html>
<?php
wp_head();
?>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo(); ?></title>
    </head>
    <body>
    <header>
        <h1><a href="<?php bloginfo('url') ?>" title="<?php bloginfo() ?>"><?php bloginfo() ?></a></h1>
        <?php wp_nav_menu() ?>
    </header><!-- /header -->
