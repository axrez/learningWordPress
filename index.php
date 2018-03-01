<?php

get_header();

if (have_posts()):
    $i = 0;
    while (have_posts()) : the_post(); ?>
    
    <div class="content" id="cnt<?php echo $i; ?>">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>
    <?php $i = $i + 1;
    endwhile;

    else:
        echo '<p>No content found </p>';
    endif;

get_footer();

?>
