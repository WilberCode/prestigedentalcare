 
 
var $ = jQuery.noConflict(); 
import menuMobile from  './components/menuMobile' 
import hacksBehaviors from  './utils/hacks'



jQuery(function ($) {  
    $(document).ready(function () {  
        menuMobile($)       // Menu Mobile: Show and hide the menu  
        hacksBehaviors($)   // Hacks Behaviors
    });  
   
});
 


