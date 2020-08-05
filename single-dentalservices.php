<?php
/*
Template Name: Dental Services
Template Post Type: post, page, event
*/ 
get_header();?>
 
 
<div class="container">
<div class="flex flex-col-reverse sm:grid grid-cols-4 col-gap-10 lg:col-gap-8 mt-20 mb-20 ">
            <aside class="aside mt-8 sm:mt-0  col-span-1   border-r border-primary-500 pr-4">
                <?php
                // Query post services
                $args = array(
                    'post_type'		=> 'dentalservices',
                    'numberposts'	=> -1,
                    'post_status' => 'publish',
                    'posts_per_page'   => 6
                ); 
                // query
                $the_query = new WP_Query( $args );  
                if( $the_query->have_posts() ): 
                    while( $the_query->have_posts() ) :$the_query->the_post(); ?>   
                        <a class="text-sm text-primary-500 block mb-3" href="<?php the_permalink(); ?>" >  <?php the_title();  ?>  </a> 
                         <?php endwhile;
                    else:
                        printf('<p>Sin contenido</p>');
                    endif;
                    rewind_posts();  ?>    
                    <!-- End While post type services --> 
            </aside>
           <main class="main  col-span-3  font-normal  ">  
                <?php if(have_posts()):
                                while(have_posts()):  
                                    the_post(); ?>
                                     <h1  class=" inline-block bg-primary-500 text-white py-5  pl-5 pr-24 text-base font-light uppercase tracking-wide " ><?php  the_title(); ?> </h1>   
                                     <div  class="main-content" > <?php  the_content(); ?>  </div>
                <?php endwhile;
                        else:
                            printf('<p>Sin contenido</p>');
                    endif;
                rewind_posts(); ?>
                <div  class="mt-8">
                <p  class="info-contact" >If you are considering teeth whitening with a caring dentist near you,
call us today at (561) 965-3933 or click below for a consultation</p>
                </div>
                <div class="text-center mt-6" >
                    <a class="py-4 px-5 border tracking-wider text-primary-500 border-primary-500 rounded-3xl text-xl-1 inline-block " href="#">Click here to request an Appointment</a>
                </div>
           </main>
            
       </div>
</div>
 
 

 <?php  
get_footer();
?>

