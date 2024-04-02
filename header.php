<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg">
	        <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu'
                ]);
	        ?>
        </nav>
    </header>
