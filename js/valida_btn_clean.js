$(document).ready(function(){
	$(".c_r_nick").keyup(function(){ 		
    var validaInput = +$("#r_nick").val();
    if (validaInput == '')
    { 
      $("#r_btn_clean").prop('disabled', true); 
    } else {
      $("#r_btn_clean").prop('disabled', false);
    } 	
  });
});