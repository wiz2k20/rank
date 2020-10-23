function upData(cod)
{
  var j_cod_rank = cod;
  //document.getElementById("resDIRETO").innerHTML = cod;
	$.ajax({
        url: 'r_upData.php',
        type:'POST',
        data: 
        {
          p_cod_rank:j_cod_rank,
        }, 
        dataType: 'JSON',
        beforeSend: function()
        {
          $('#r_nick').css("opacity",".5");
          $("#r_player_sel").prop('disabled', true);
          $("#r_boneco_sel").prop('disabled', true);
          $("#r_nick").prop('disabled', true);  
          $("#r_btn_save").prop('disabled', true);  
          
          $("#r_btn_update").prop('disabled', false);
          $("#r_btn_clean").prop('disabled', false);
        },
        success: function(data)
        { 
          var len = data.length;        
          for(var i=0; i<len; i++){                      
            $("#r_player_sel").val(data[i].player);
        	  $("#r_boneco_sel").val(data[i].boneco);
            $("#r_nivel_sel").val(data[i].nivel); 
            $("#r_rankHidden").val(data[i].rank);
            
            $("#r_nick").val(data[i].nick);
            $("#r_pontos").val(data[i].pontos);
            $("#r_rankcfn").val(data[i].rankcfn);

            $("#r_lutas").val(data[i].lutas);
            $("#r_vitorias").val(data[i].vitorias);
            $("#r_derrotas").val(data[i].derrotas);
            $("#r_aprov").val(data[i].aprov);
            $("#r_pontosA").val(data[i].pontos);
          }  

          //var Resposta = data;
          //$('#r_Resposta').text(Resposta);

          //var rankcfn = data[i].rankcfn; 
          //console.log(data);
        	//info = JSON.parse(data);
          //document.getElementById("resHOJE").innerHTML = data.player;
        },
        complete: function() 
        {
          var msgGetData = "Dados prontos !";
          $('#r_Messages').text(msgGetData);  
          setTimeout(function(){ $("#r_Messages").text(""); }, 5000);
        }
    });
}