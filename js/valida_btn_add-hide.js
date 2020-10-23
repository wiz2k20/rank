$(document).ready(function(){
  $("#r_btn_add").click(function(){
    if($('#THE_GOD_FORM').css('display') == 'none')
	  {
      $("#THE_GOD_FORM").css("display", "block");
      $("#img_footer").css("display", "none");
      $("#r_btn_add").prop('disabled', true);
      $("#r_btn_hide").prop('disabled', false);

      $(".c_r_upData").prop('disabled', false);
      
    } 
    //$("#THE_GOD_FORM").show();
  });
  
  $("#r_btn_hide").click(function(){
    if($('#THE_GOD_FORM').css('display') == 'block')
	  {
      $("#THE_GOD_FORM").css("display", "none"); 
      $("#img_footer").css("display", "block");
      $("#r_btn_add").prop('disabled', false);
      $("#r_btn_hide").prop('disabled', true);

      $(".c_r_upData").prop('disabled', true);
      
    } 
    //$("#THE_GOD_FORM").hide();
  });
});