<?php
/*
Template Name: Home
Template Post Type: post, page, event
*/ 
get_header();?>
<?php $file = './tailwind.js';?>   

<?php dynamic_sidebar('banner-image') ?> 

<section class="pt-17 pb-16 bg-gray-200" >
  <div class="container bg-gray-200">
      <div class="grid grid-cols-1 md:grid-cols-2 md:px-4 row-gap-6 ">
        <div class="text-primary-500 pr-0 sm:pr-4 " >
          <h3  classw=" sm:text-xl tracking-widest " >Our Dental Services
          </h3>
          <h1 class="text-2xl sm:text-5xl font-light leading-tighter mt-2" >Welcome to <br>
          Prestige Dental Care.</h1>
          <h4 class=" text-xl sm:text-2xl font-light" >We love what we can do for you!
          </h4>
          <img class=" w-full sm:max-w-xs mt-4" src="https://prestigedentalcare.tendenzeperu.com/wp-content/uploads/2020/08/chica-feliz-espejo-dental.jpg" alt="chica feliz espejo dental">
        </div>
        <div>  
              <h2 class="py-6 sm:py-8 px-2 text-center  bg-primary-500 text-white text-xl tracking-wider " >Yes! I want to make an Appointment today!</h2> 
              <?php   

              if (file_exists(dirname(__FILE__) . $file)) {  
                  echo do_shortcode('[everest_form id="63"]'); 
              }else{
                  echo do_shortcode('[everest_form id="76"]');
              }
              ?> 
        </div>
      </div>
  </div>
  <div class="pt-10 border-t mt-12 border-primary-500  " >
    <div class="container">
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
          <a  class="block  " href="#" >
            <img class="w-full" src="https://prestigedentalcare.tendenzeperu.com/wp-content/uploads/2020/08/financing-dental.jpg" alt="">
            <div  class="bg-white h-full text-center py-12 px-2 mt-1 text-primary-500" >
              <h2  class="text-2xl leading-7 font-semibold tracking-wider" >  Financing </h2>
              <h3 class="text-2xl font-light tracking-wider " >Prestige Dental Care</h3>
              <p class="text-lg font-light m-0 tracking-normal" >We have a dental plan for you</p>
                 

            </div>
          </a>
          <a  class="flex flex-col  " href="#" >
            <img class="w-full" src="https://prestigedentalcare.tendenzeperu.com/wp-content/uploads/2020/08/man.png" alt="">
            <div  class="bg-white h-full text-center py-12 px-2 mt-1 text-primary-500" >
              <h2  class="text-2xl leading-7 font-semibold tracking-wider" >  New Patients </h2>
              <h3 class="text-2xl font-light tracking-wider " >Prestige Dental Care</h3> 
            </div>
          </a>
          <a  class="flex flex-col  " href="#" >
            <img class="w-full" src="https://prestigedentalcare.tendenzeperu.com/wp-content/uploads/2020/08/heart-dentist-patient.jpg" alt="">
            <div  class="bg-white h-full text-center py-12 px-2 mt-1 text-primary-500" >
              <h2  class="text-2xl leading-7 font-semibold tracking-wider" >  Gallery </h2>
              <h3 class="text-2xl font-light tracking-wider " >Prestige Dental Care</h3>
              <p class="text-lg font-light m-0 tracking-normal" >More about us - Before After</p> 
            </div>
          </a>
      </div>

      <h2 class=" text-2xl  sm:text-5xl mt-12 text-primary-500 text-center mb-5 font-medium" >Our patients <span  class="font-light" >say</span></h2>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
          <div  class="flex flex-col"  > 
            <div  class="bg-white text-center py-6 px-2  text-primary-500" >
               <svg class="text-secondary-500 fill-current  w-26 h-5 m-auto mt-1"><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#start'; ?>"></svg>  
              <h2  class="text-lg leading-5 font-normal tracking-wide mt-4" >  “Lorem ipsum dolor sit Lorem <br>
ipsum dolor sit Lorem ipsum <br>
dolor sit” </h2> 
            <p class="font-semibold mt-6 text-base " >Christine, 27 years</p>

            </div>
          </div>
          <div  class="block"  >
            <div  class="bg-white text-center py-6 px-2  text-primary-500" >
               <svg class="text-secondary-500 fill-current  w-26 h-5 m-auto mt-1"><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#start'; ?>"></svg>  
              <h2  class="text-lg leading-5 font-normal tracking-wide mt-4" > “Lorem ipsum dolor sit Lorem <br>
ipsum dolor sit Lorem ipsum <br>
dolor sit”  </h2> 
            <p class="font-semibold mt-6 text-base " >Christine, 27 years</p>
            </div>
          </div>
          <div  class="block"  >
            <div  class="bg-white text-center py-6 px-2  text-primary-500" >
               <svg class="text-secondary-500 fill-current  w-26 h-5 m-auto mt-1"><use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#start'; ?>"></svg>   
              <h2  class="text-lg leading-5 font-normal tracking-wide mt-4" > “Lorem ipsum dolor sit Lorem <br>
ipsum dolor sit Lorem ipsum <br>
  dolor sit”  </h2> 
              <p class="font-semibold mt-6 text-base " >Christine, 27 years</p>

            </div>
          </div>
      </div>
    </div>
  </div>
 
 </section>

 

 

 <?php  
get_footer();
?>

