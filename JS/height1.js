

$(window).resize(function() {
     var arr=document.querySelectorAll('.service_boxs-bottom');
     var arr1=document.querySelectorAll('.service_boxs-top');
    for(var i=0;i<arr.length;i++){
    	var maxHeight=max(arr);
    	var maxHeight1=max(arr1);
    	var a=(maxHeight-40)+'px';
    	arr[i].style.height=a;
    	var a1=(maxHeight1-40)+'px';
    	arr1[i].style.height=a1;
    }
});
function max(arr){
	var max=arr[1].offsetHeight;
	for(var i=1;i<arr.length;i++){
		if(arr[i].offsetHeight>max){
			max=arr[i].offsetHeight;
		}
	}
	return max;
}

$(window).resize();