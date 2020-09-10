 
 
var $ = jQuery.noConflict(); 
import menuMobile from  './components/menuMobile' 
import hacksBehaviors from  './utils/hacks'



jQuery(function ($) {  
    $(document).ready(function () {  
        menuMobile($)       // Menu Mobile: Show and hide the menu  
        hacksBehaviors($)   // Hacks Behaviors
    });  
 
      $(".target-form-espanol").click(function() {
        const forEspanol = document.getElementById('form-espanol'); 
        forEspanol.scrollIntoView({
          block: 'center',
        });
      });
      $(".target-form-english").click(function() {
        const forEspanol = document.getElementById('form-english'); 
        forEspanol.scrollIntoView({
          block: 'center',
        });
      });
      
   
});
 


