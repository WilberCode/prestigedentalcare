<?php
/*
Template Name: Financing
Template Post Type: post, page, event
*/ 
get_header();?>
 <main class="main py-12 bg-body ">
    <div class="container">
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

