
 <section  class="bg-primary-500 py-21" >
    <div class="container  ">
        <div  class="  grid col-gap-1 md:grid-cols-2 row-gap-6  lg:flex   lg:space-x-12  lg:px-6" >
          <div class="inline-flex items-center  " >

          <svg class="text-secondary-500 fill-current w-16  xl:w-21 h-16 xl:h-21 "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#phone'; ?>"></svg>  
          <p class="text-white font-light text-lg  ml-4 md:ml-8 tracking-wider " >Tel. (561)965-3933 <br>
Fax (561)965-9303</p>
          </div>
          <div class="inline-flex items-center" >

          <svg class="text-secondary-500 fill-current w-16  xl:w-21 h-16 xl:h-21 "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#mail'; ?>"></svg>  
          <p class="text-white font-light text-lg  ml-4   tracking-wider " >prestigedentalcarefl@gmail.com</p>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3034.415620236627!2d-74.5886315483243!3d40.488191559111534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1596585422741!5m2!1ses!2spe" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                    <p  class="text-primary-500 text-base font-robotocd font-normal " >Monday - Friday 8:30am - 6:00pm <br> Saturday 9:00am - 2:00pm <span class="text-secondary-500" >Sunday Closed</span> </p>
                
           </div>

          <div >
             <a class="btn bg-secondary-500" href="#">Make an Appointment</a>  
            </div> 
        </div>
    </div>
 </footer>



<!-- Site footer markup goes here -->
<!-- <footer class=" footer bg-dark w-full py-6  <?php //if(is_page('mi-cuenta')){ echo "sm:mt-64";} ?> "> 
    <div class="container text-white">
        <?php  // dynamic_sidebar('footer-info') ?>
    </div>
</footer> -->
<?php wp_footer();  ?>   
</body> 
</html>