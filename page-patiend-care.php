<?php
/*
Template Name: Patient care and safety
Template Post Type: post, page, event
*/ 
get_header();?>
 <main class="main bg-body ">
    <div class="container">
    <?php
    while ( have_posts() ) :
        the_post(); 
        the_content(); 
    endwhile;
    ?>  
    </div>
    <div class="max-w-6xl m-auto pb-20 sm:pb-32">
        <img class="w-full"  src="https://prestigedentalcare.tendenzeperu.com/wp-content/uploads/2020/08/Patient-care-and-safety.jpg" alt="Patient care and safety">
    </div>
</main> 
   
 <?php  
get_footer();
?>
 




