<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Today</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/aseets/css/style.css">
    <?php wp_head(); ?>

</head>

<body>

    <!-- Header -->
    <header>
        <div class="container">
            <h1 class="logo">📰 wordpress</h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="<?php echo home_url('/') ?>">HOME</a></li>
                    <li><a href="<?php echo home_url('/new') ?>">NEWS</a></li>
                    <li><a href="<?php echo home_url('/faq') ?>">FAQ</a></li>
                    <li><a href="<?php echo home_url('/contact') ?>">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>