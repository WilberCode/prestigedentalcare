<?php get_template_part( 'templates/partials/document-open' ); ?> 
<!-- Site header markup goes here --> 
 
 <header class=" bg-white header">
   <div class="container">
        <div class=" w-full relative z-40 bg-white grid   grid-cols-2 gap-4 sm:flex justify-between items-center pt-5 pb-3 space-x-2" >   
                <div> 
                    <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                        <?php if ( has_custom_logo() ) { ?> 
                    <a  href="<?php echo home_url();?>" rel="home">
                        <img   class="w-26 sm:w-27" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>" >
                    </a> 
                        <?php }else{?>
                    <a  href="<?php echo home_url();?>" rel="home">
                        <?php echo  '<h1 class="text-primary-500">'.get_bloginfo( "name" ).'</h1>'; ?>
                    </a>     
                        <?php }?>     
                </div> 
                <div  class=" hidden md:inline-flex items-top lg:pt-4 pl-2 " >
                   <svg class="text-secondary-500 fill-current  w-9 h-9 mr-3 "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#hour'; ?>"></svg> 
                    <?php dynamic_sidebar('attention-schedule') ?> 
                </div>
                <div class=" hidden md:inline-flex items-top  lg:pl-12  ">
                    <svg class="text-secondary-500 fill-current  w-9 h-9 mr-3 "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#location'; ?>"></svg> 
                    <?php dynamic_sidebar('location') ?>  
                </div>
                <div class=" text-right sm:text-left" > 
                    <?php dynamic_sidebar('make-an-appointment') ?> 
                </div> 
      </div>
   </div>
  
    <div class="header-wrap  m-auto flex h-14  sm:h-18  justify-between items-center border-t border-primary-600 "> 
       <div class="container inline-flex items-center lg:justify-between h-full "> 
         <div  class="relative z-40" > 
            <?php dynamic_sidebar('call-us') ?>  
         </div>
         <div class=" items-center md:h-full " > 
             <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'main-menu',
                    'container'       => 'nav',
                    'container_class' => 'header-nav',   
                    'container_id'    => 'header-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'header-menu',
                    'menu_id'         => 'header-menu',
                ));  
            ?>
                
                <div class="mobile-nav-wrap" id="mobile-nav-wrap"  > 
                    
                    <div class="container">
                        <?php  
                        wp_nav_menu(array(
                            'theme_location'  => 'mobile-menu',
                            'container'       => 'nav',
                            'container_class' => 'mobile-nav',
                            'container_id'    => 'mobile-nav',  
                            'menu' => 'ul',
                            'menu_class'      => 'mobile-menu',
                            'menu_id'         => 'mobile-menu' ,
                        ));  
                    ?> 
                        <div class="grid grid-cols-1 gap-6  mt-8 lg:hidden  ">  
                            <div  class=" inline-flex items-top pt-2  " >
                                <svg class="text-secondary-500 fill-current  w-9 h-9 mr-3 "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#hour'; ?>"></svg> 
                                <?php dynamic_sidebar('attention-schedule') ?>  
                            </div>
                            <div class=" inline-flex items-top pt-2">
                                <svg class="text-secondary-500 fill-current  w-9 h-9 mr-3 "><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#location'; ?>"></svg> 
                                <?php dynamic_sidebar('location') ?>  
                            </div>
                        </div>
                   </div>
                </div>
                <div class="nav-toggle-wrap block lg:hidden ">
                    <button  id="nav-toggle" class="nav-toggle focus:outline-none border-none">  
                        <span ></span> 
                        <span ></span> 
                        <span ></span> 
                        <span ></span> 
                        <span ></span> 
                        <span ></span>  
                    </button>
                </div>   
            </div>
            <div class="inline-flex social-media relative z-40" >
                <?php  
                        wp_nav_menu(array(
                            'theme_location'  => 'social-media',
                            'container'       => 'nav',
                            'container_class' => 'social-media-header',
                            'container_id'    => 'social-media-header',  
                            'menu' => 'ul',
                            'menu_class'      => 'social-media-header-menu',
                            'menu_id'         => 'social-media-header-menu',
                        ));  
                    ?> 
            </div>
       </div>
     </div>   
 
 </header>