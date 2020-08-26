
 const hacksBehaviors = ($) => {

    $('.evf-field-date-time input').change(function(e) { 
        if($('.evf-field-date-time input')[0].value !== ''){ 
            e.target.classList.add('time-value')
        }
    }); 
   
}; 


export default hacksBehaviors