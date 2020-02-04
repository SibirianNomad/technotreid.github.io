

	
$(document).ready(function(){
	$('#popup_form').submit(function(){
		console.log($(this).find('input.error').length);
		if($(this).find('input.error').length == 0){
			$.post('ajax1.php',{
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
			$.post('ajax2.php',{
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