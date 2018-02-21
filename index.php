<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>
    <div class="content">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>

<?php endwhile;

    else:
        echo '<p>No content found </p>';
    endif;

get_footer();

?>


