<?php
/*
Template Name: About Us
Template Post Type: post, page, event
*/ 
get_header();?>
 <main class="main py-12 bg-body ">
    <div class="container sm:px-9">
    <?php
    while ( have_posts() ) :
        the_post(); 
        the_content(); 
    endwhile;
    ?>  
    </div>
</main> 
 
 

 <?php  
get_footer();
?>

