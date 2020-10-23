$(document).ready(function(){
	$(".calcNIVEL").keyup(function(){ 		    
    var nPon = +$(".c_r_pontos").val();
    var msgAux = "Digite novamente.";
    if (nPon >= 14000)
    {
      $.ajax({
        url: "txt/pontos_max.txt", 
        success: function (result,status,xhr) {
          $("#r_pontos").val('');
          $("#r_nivel_sel").val('1');
          $("#r_Messages").html(result);
          $("#r_Resposta").text(msgAux);

          setTimeout(function(){
            $("#r_Resposta").text("");
            $("#r_Messages").text("");
          }, 3000);
          
          //setTimeout(function(){ $("#r_Messages").text(""); }, 3000);
        }
      });
      //$('#r_Messages').text(msgMax); 
      //$("#r_pontos").val('');
      //$("#r_nivel_sel").val('1'); 
    }
    switch (true) 
    {
      case (nPon <= 499):                    $("#r_nivel_sel").val('Rookie'); break;
      case (nPon >= 500 && nPon <= 999):     $("#r_nivel_sel").val('Bronze'); break;
      case (nPon >= 1000 && nPon <= 1499):   $("#r_nivel_sel").val('Super Bronze'); break;
      case (nPon >= 1500 && nPon <= 1999):   $("#r_nivel_sel").val('Ultra Bronze'); break;
      case (nPon >= 2000 && nPon <= 2999):   $("#r_nivel_sel").val('Silver'); break;
      case (nPon >= 3000 && nPon <= 3499):   $("#r_nivel_sel").val('Super Silver'); break;
      case (nPon >= 3500 && nPon <= 3999):   $("#r_nivel_sel").val('Ultra Silver'); break;
      case (nPon >= 4000 && nPon <= 5499):   $("#r_nivel_sel").val('Gold'); break;
      case (nPon >= 5500 && nPon <= 6499):   $("#r_nivel_sel").val('Super Gold'); break;
      case (nPon >= 6500 && nPon <= 7499):   $("#r_nivel_sel").val('Ultra Gold'); break;
      case (nPon >= 7500 && nPon <= 9999):   $("#r_nivel_sel").val('Platinum'); break;
      case (nPon >= 10000 && nPon <= 11999): $("#r_nivel_sel").val('Super Platinum'); break;
      case (nPon >= 12000 && nPon <= 13999): $("#r_nivel_sel").val('Ultra Platinum'); break;        
    }
    document.getElementById("resNIVELp").innerHTML = aux;
  });
});