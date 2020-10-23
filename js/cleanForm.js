function cleanForm()
{
  $("#r_nick").val('');
  $("#r_player").val('');
  $("#r_pontos").val('');
  $("#r_boneco").val('');
  $("#r_nivel").val('');
  $("#r_lutas").val('');
  $("#r_vitorias").val('');
  $("#r_derrotas").val('');
  $("#r_aprov").val('');
  $("#r_rankcfn").val('');	
            
  $("#r_player_sel").val('1');
  $("#r_boneco_sel").val('1');
  $("#r_nivel_sel").val('1'); 

  $('#r_nick').css("opacity","1");
  $("#r_nick").prop('disabled', false); 
  $("#r_player_sel").prop('disabled', false);
  $("#r_boneco_sel").prop('disabled', false);
  
  $("#r_btn_save").prop('disabled', false); 
  $("#r_btn_update").prop('disabled', true);
  $("#r_btn_clean").prop('disabled', true);
}