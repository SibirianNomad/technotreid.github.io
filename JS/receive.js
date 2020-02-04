
$(document).ready(function(){
          $("#popup_form").validate({
             rules:{
                popup_name:{
                  required: true,
                },
                popup_number:{
                  required: true,
                  
                },
             },
             messages:{
               popup_name:{
                 required: "Заполните имя!",
                 
             },
               popup_number:{
               required: "Номер!",
               
               },
             }

          });

          $("#main_form").validate({
             rules:{
                name1:{
                  required: true,
                },
                number:{
                  required: true,
                  
                },
      
             },
             
            
          });
           
           });


