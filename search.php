<?php get_header();?>
<div class="msearch">
    <div class="bg-body text-primary-500 py-10">
        <div class="container">
            <div  class="max-w-lg m-auto" ><?php get_search_form(true);?></div>
        </div>
    </div>
	<div class="container"> 
		<div class="max-w-lg m-auto ">
        <h1 class="mt-8 mb-4 text-base  text-primary-500 ">The results for the search
			<b>
				<?php echo  get_search_query();?>
			</b> are:
		</h1>
		<div class="msearch-posts mb-8 ">
			<?php if(have_posts()):
					while(have_posts()):  the_post(); ?>  
						<article class="grid grid-cols-3 mb-4 shadow hover:underline  ">
							<?php if(thumbnail_image_url('full')){  ?> 
                            <a href="<?php the_permalink();?>" class=" col-span-1 " >
                                <img  class="block xs:p-6 "  src="<?php echo thumbnail_image_url('full'); ?>" alt="">
							</a>
							<div class=" col-span-2  flex justify-start items-center xs:py-5 px-3 xs:px-8 "> 
								<a href="<?php the_permalink(); ?>" class=" text-md sm:text-xl  text-primary-500 ">  
								    <?php the_title(); ?> 
								</a>
							</div> 
							<?php }else{	?>
								<a href="<?php the_permalink(); ?>" class=" text-center flex justify-center items-center py-5 px-8 text-md sm:text-xl col-span-3 text-primary-500 ">  
								 <?php the_title(); ?> 
								</a>
							<?php }?>
						</article>  
			<?php endwhile;  ?>
			<div class="msearch-navigation mb-4">
				<?php echo paginate_links();?>
			</div>
			<?php else:?>
			<div class="msearch-not mb-6">
				<h2 class="m-0">No results found.</h2>
				<p class="text-sm m-0 text-secondary-400 ">Try other keywords.</p>
			</div>
			<?php endif;
                        rewind_posts();  
                        ?> 
		</div>
        </div>
	</div>
</div>
<?php get_footer();