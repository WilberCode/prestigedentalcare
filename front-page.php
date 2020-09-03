<?php
/*
Template Name: Home
Template Post Type: post, page, event
*/ 
get_header();?>   

<section  class="w-full bg-body" >
  <?php dynamic_sidebar('banner-image') ?> 
</section>   
<section class=" pt-12 sm:pt-16 pb-16 bg-gray-200" >
  <div class="container bg-gray-200">
      <div class="grid grid-cols-1 md:grid-cols-2 md:px-4 row-gap-6 ">
        <div class="text-primary-500 pr-0 sm:pr-4 " >
          <a href="dental-services/" class=" no-underline" >
            <?php  dynamic_sidebar('our-dental-service'); ?> 
          </a>   
        </div>
       <div id="appointment-today"  class="pt-3">   
              <?php dynamic_sidebar('form-make-appointment'); ?>  
        </div>  
      </div>
  </div>
  <div class=" pt-0 sm:pt-10 border-t mt-12 border-primary-600" >
    <main class="main bg-body "> 
        <div class="container">
          <?php
          if(have_posts()):
            while ( have_posts() ) :    
                the_post(); 
                the_content(); 
            endwhile;
           else:
                  printf('<p>Empty</p>');
           endif;
          rewind_posts(); 
          ?>   
        </div>
    </main>  
  </div>  
 </section> 


 <?php  
get_footer();
?>

