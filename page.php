<?php 
get_header(); ?> 

<main class="main bg-body "> 
    <?php
    while ( have_posts() ) :
        the_post(); 
        the_content(); 
    endwhile;
    ?>   
</main> 

<?php
get_footer();
