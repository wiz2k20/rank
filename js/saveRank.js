function saveRank()
{                	
	  var r_nick     = $("#r_nick").val();
	  var r_player   = $("#r_player :selected").val();
    var r_pontos   = $("#r_pontos").val();
    var r_boneco 	 = $("#r_boneco :selected").val();
    var r_nivel    = $("#r_nivel :selected").val();
    var r_lutas		 = $("#r_lutas").val();
    var r_vitorias = $("#r_vitorias").val();
    var r_derrotas = $("#r_derrotas").val();
    var r_aprov    = $("#r_aprov").val();
    var r_rankcfn  = $("#r_rankcfn").val();
                               
	$.ajax
	({
		url:'r_save.php',
        type:'POST',
        data:
        {
			out_nick:r_nick,
			out_player:r_player,
			out_pontos:r_pontos,
			out_boneco:r_boneco,
			out_nivel:r_nivel,
			out_lutas:r_lutas,
			out_vitorias:r_vitorias,
			out_derrotas:r_derrotas,
			out_aprov:r_aprov,
			out_rankcfn:r_rankcfn,   
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
        },
        complete: function() 
        {
          getRank();
          getPoints();
          //setTimeout(function(){ getPoints(); }, 3000);

          setTimeout(function(){ $("#r_Resposta").text(""); }, 5000);

          $('#r_Messages').text('Nick: ' + r_nick); 
          setTimeout(function(){ $("#r_Messages").text(""); }, 5000);
        }     
    });               
}