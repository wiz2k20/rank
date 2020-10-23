$(document).ready(function(){
	$(".calc2020").keyup(function(){ 		
  	var nLut = +$(".c_r_lutas").val();
    var nVit = +$(".c_r_vitorias").val();   
// CALCULO APROVEITAMENTO    
    var auxA = nVit/nLut;        
    var finalA = auxA * 100;
	  var fixedA = finalA.toFixed(2);	
// CALCULO DERROTAS
	  var finalD = nLut - nVit;    
    $("#r_aprov").val(fixedA + '%');            
    $("#r_derrotas").val(finalD);      	
  });
});