function unlockBtn()
{
  var passN = $("#r_unlock").val();
if (passN == 55669) 
{
  $('#TESTE201').text('unlocked');
  $("#r_btn_add").prop('disabled', false);
  $("#r_unlock").val('');

  setTimeout(function(){ 
    $("#r_unlock").hide();
    $("#r_btn_unlock").hide();
    $("#TESTE201").hide(); 
  }, 3000);
}
else
{
  $('#TESTE201').text('wrong');
  setTimeout(function(){ $('#TESTE201').html(''); }, 3000);

  $("#r_unlock").val('');
}
}