$(document).ready(function(){
    $('#popup_form').submit(function(){
        console.log($(this).find('input.error').length);
        if($(this).find('input.error').length == 0){
            $.post('ajax/ajax1.php',{
                popup_name:$('input[name=popup_name]').val(),
                popup_number:$('input[name=popup_number]').val()
            },function(data,status){
                if(data==1){
                    $.fancybox.open($("#popup2"));
                }
            });
        }

        return false;
    });
    $('#main_form').submit(function(){
        if($(this).find('input.error').length==0){
            $.post('ajax/ajax2.php',{
                name1:$('input[name=name1]').val(),
                number:$('input[name=number]').val(),
                theme:$('input[name=theme]').val(),
                maintext:$('textarea[name=maintext]').val(),
            },function(data,status){
                if(data==1){
                    $.fancybox.open($("#popup2"));
                }
            });
        }

        return false;
    });
});

$(function(){$("#phone").mask("8(999)-999-9999");})
$(function(){$("#popup_phone").mask("8(999)-999-9999");})

$(function (){
    $('.header_burger').on('click',function(){
        $('.header_b-menu1').slideToggle(400);

    });
});


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


