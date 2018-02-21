<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rikke Østergaard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="landing">
            <h1 class="title"><?php bloginfo( 'name' ); ?></h1>
            <h5><?php bloginfo( 'description' )?></h5>
            <a href="#" id="landing-btn">Læs Mere</a>
        </div>
    </header>

    <nav class="site-nav">
        <?php wp_nav_menu(); ?>
    </nav>
