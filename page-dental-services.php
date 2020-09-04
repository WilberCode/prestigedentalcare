<?php
/*
Template Name: Dental Services
Template Post Type: post, page, event
*/ 
get_header();?>
 
<section class="pt-20 pb-16  " > 
    <div class="container">
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 ">
        
          <?php
                // Query post services
                $args = array(
                    'post_type'		=> 'dentalservices',
                    'numberposts'	=> -1,
                    'post_status' => 'publish',
                    'posts_per_page'   => 15
                ); 
                // query
                $the_query = new WP_Query( $args );  
                if( $the_query->have_posts() ): 
                    while( $the_query->have_posts() ) :$the_query->the_post(); ?>    
                       
                        <a  class="flex flex-col h-full " href="<?php the_permalink(); ?>" >
                            <img class="w-full block" src="<?php echo thumbnail_image_url('thumbnail'); ?>" alt=" <?php the_title();  ?> ">
                            <div  class="bg-gray-200 h-26-1 flex items-center justify-center py-8 px-6 mt-1-1 text-primary-500" >
                              <h2  class="text-base leading-5 font-medium text-center" >   <?php the_title();  ?> </h2> 
                            </div>
                        </a> 
                       
                       <?php endwhile;
                  else:
                      printf('<p>No content</p>');
                  endif;
                  rewind_posts();  ?>    
                  <!-- End While post type services --> 
          </div> 
    </div> 
 </section>

 <div class="container">
    <?php
      if(have_posts()):
    while ( have_posts() ) :    
        the_post(); 
        the_content(); 
    endwhile;
    else:
        printf('<p>No content</p>');
    endif;
    rewind_posts();  
    ?>   
   </div>
  
 <?php  
get_footer();
?>

