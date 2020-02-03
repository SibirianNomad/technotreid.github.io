    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
   
        $("#popup1").show();
        $('.shadow').addClass( "backgroung_all1");
        $('body').addClass( "overflow");
        
    }
    //Функция скрытия PopUp
    function PopUpHide(){
   
        $("#popup1").hide();
        $('.shadow').removeClass( "backgroung_all1");
          $('body').removeClass( "overflow");

       
    }

