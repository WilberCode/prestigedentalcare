<?php 
get_header();?>
 
 
<div class="container">
<div class="flex flex-col-reverse sm:grid grid-cols-4 col-gap-10 lg:col-gap-10 mt-20 mb-20  ">
            <aside class="aside mt-10 sm:mt-0 pt-6 sm:pt-0  col-span-1  border-t sm:border-t-0 sm:border-r border-primary-500 pr-4">
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
                        <a class=" text-md sm:text-sm text-primary-500 block mb-3 font-robotocd " href="<?php the_permalink(); ?>" >  <?php the_title();  ?>  </a> 
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
                                     <?php 
                                          if(!empty(get_the_excerpt()) && ctype_space(get_the_excerpt()) != 1) {?>
                                            <h1  class=" main-content__title inline-block" >
                                                <?php the_excerpt();?>
                                            </h1>   
                                       <?php } else { ?> 
                                              <h1  class=" main-content__title max-w-xxs  " >
                                                <?php the_title();?>
                                            </h1>   
                                        <?php } ?> 
                                      
                                     <div  class="main-content" > <?php  the_content(); ?>  </div>
                <?php endwhile;
                        else:
                            printf('<p>Sin contenido</p>');
                    endif;
                rewind_posts(); ?> 
           </main>
            
       </div>
</div>
  

 <?php  
get_footer();
?>

