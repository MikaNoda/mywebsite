<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="body-wrap">
        <header>
            <div class="header-left">
                <h1 class="header-title">My Website</h1>
            </div>
            <nav class="header-right">
                <ul>
                    <a href="#about">
                        <li>About</li>
                    </a>
                    <a href="#recommend">
                        <li>Recommend</li>
                    </a>
                    <a href="#contact">
                        <li>Contact</li>
                    </a>
                </ul>
            </nav>
        </header>