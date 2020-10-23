function updateRecord()
{                	
  var r_rankCod  = $("#r_rankHidden").val();     
  var r_pontos   = $("#r_pontos").val();
  var r_pontosA  = $("#r_pontosA").val();
  var r_rankcfn  = $("#r_rankcfn").val();
  var r_nivel    = $("#r_nivel :selected").val();
  var r_lutas		 = $("#r_lutas").val();
  var r_vitorias = $("#r_vitorias").val();
  var r_derrotas = $("#r_derrotas").val();
  var r_aprov    = $("#r_aprov").val();
  var r_nick     = $("#r_nick").val();
                               
	$.ajax
	({
		url:'r_upData_New.php',
        type:'POST',
        data:
        {
      out_rankCod:r_rankCod,    
      out_pontos:r_pontos,
      out_pontosA:r_pontosA,  
      out_rankcfn:r_rankcfn,
      out_nivel:r_nivel,
      out_lutas:r_lutas,
			out_vitorias:r_vitorias,
			out_derrotas:r_derrotas,
			out_aprov:r_aprov,	   
        },
        beforeSend: function()
        {
          //var msgBefore = "Task Start";
          //$('#r_Resposta').text(msgBefore); 
        },
        success:function(data)
        {  
        	var Resposta = data;
          $('#r_Resposta').text(Resposta);   
                		
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
                
          //getRank();
          //getPoints();         	
        },
        ajaxError: function() 
        {
          //var msgError = "Task error";
          //$('#r_Resposta').text(msgError); 
        },   
        complete: function() 
        { 
          //var msgComplete = "Task completed";
          //$('#r_Resposta').text(msgComplete);  
          setTimeout(function(){ $("#r_Resposta").text(""); }, 5000);
          
          $("#r_btn_save").prop('disabled', false); 
          $("#r_btn_update").prop('disabled', true);
          $("#r_btn_clean").prop('disabled', true);

          $('#r_nick').css("opacity","1");
          $("#r_nick").prop('disabled', false); 
          $("#r_player_sel").prop('disabled', false);
          $("#r_boneco_sel").prop('disabled', false);

          $('#r_Messages').text('Nick: ' + r_nick); 
          setTimeout(function(){ $("#r_Messages").text(""); }, 5000);

          getRank();
          getPoints(); 
          
        }   
    });                
}