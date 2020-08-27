<?php 
get_header(); ?>
<?php 
get_header();?>
 <div class="404  bg-body text-primary-500 "> 
   <div class="container">
    <div class="text-center py-10 ">
            <h1 class=" ">¡Oops!... Page not found</h1>
            <p class="  max-w-2xl m-auto mt-5">
            The page you are looking for does not exist, probably the link you used is wrong, try to locate it on the main page or use the search engine:
            </p> 
            <div class="max-w-lg m-auto mt-4">
                <?php get_search_form(true); ?>
            </div> 
            <a class=" font-medium text-secondary-800 block mt-8 hover:underline" href="<?php echo esc_url(home_url("/"));?>">Return to Home Page</a>
        </div> 
   </div>
 </div>     
 <?php 
get_footer();
?>