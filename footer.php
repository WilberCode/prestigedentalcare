
 <section  class="bg-primary-500 py-21" >
    <div class="container  ">
        <div  class="  grid col-gap-1 md:grid-cols-2 row-gap-6  lg:flex   lg:space-x-12  lg:px-6" >
          <div class="inline-flex items-center relative " >

            <svg class="text-secondary-500 fill-current w-16  xl:w-21 h-16 xl:h-21 mr-4 md:mr-8 "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#phone'; ?>"></svg>  
            <?php dynamic_sidebar('phone-number') ?>
          </div>
          <div class="inline-flex items-center relative" >

            <svg class="text-secondary-500 fill-current w-16  xl:w-21 h-16 xl:h-21 mr-4  "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#mail'; ?>"></svg>  
     
            <?php dynamic_sidebar('contact-mail') ?> 
          </div>  

          <div class="social-media flex items-center " >
                <?php  
                        wp_nav_menu(array(
                            'theme_location'  => 'social-media',
                            'container'       => 'nav',
                            'container_class' => 'social-media-footer',
                            'container_id'    => 'social-media-footer',  
                            'menu' => 'ul',
                            'menu_class'      => 'social-media-footer-menu',
                            'menu_id'         => 'social-media-footer-menu',
                        ));  
                    ?> 
            </div> 
        </div>
    </div>
  </section> 
<div> 
    <iframe width="100%" height="300" src="https://maps.google.com/maps?q=40%C2%B029'17.5''N%2074%C2%B035'11.0''W&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>

<footer class="bg-white" >
 <div class="container  ">
        <div  class="grid col-gap-1 md:grid-cols-2 row-gap-6 md:flex md:space-x-6 xl:space-x-12 pl-0 lg:pl-27 xl:pl-44 pr-0 lg:pr-10 py-10 items-center" >
          <div class="inline-flex items-center" >
            <?php 
                      $custom_logo_id = get_theme_mod( 'custom_logo' );
                      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                          <?php if ( has_custom_logo() ) { ?> 
                      <a class="logo__url" href="<?php echo home_url();?>" rel="home">
                          <img id="logo__img" class="w-42" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>" >
                      </a> 
                          <?php }else{?>
                      <a class="logo__title" href="<?php echo home_url();?>" rel="home">
                          <?php echo  '<h1 class="text-primary-500">'.get_bloginfo( "name" ).'</h1>'; ?>
                      </a>     
                          <?php }?>     
          </div>
          <div  class="inline-flex items-center pl-0 md:pl-5 " >
                   <svg class="text-secondary-500 fill-current  w-9 h-9 mr-3 "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#hour'; ?>"></svg> 
                   <?php dynamic_sidebar('attention-schedule') ?>  
                
           </div>

          <div > 
             <?php dynamic_sidebar('make-an-appointment') ?>  
            </div> 
        </div>
    </div>
 </footer>

 
<?php wp_footer();  ?>   
</body> 
</html>