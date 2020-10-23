<html>
<head>
<link rel="stylesheet" href="sty1rank.css">
<title>RANK</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="shortcut icon" href="/favicon1.ico" type="image/x-icon">
<link rel="icon" href="/favicon1.ico" type="image/x-icon">

<?php
/*

<WORKING>
- CALCULO PONTUACAO EQUIPE<br>
- ATUALIZAR DATA FOOTER QUANDO ALGUM DADO FOR ATUALIZADO<br>
</WORKING>

*/
?>

</head>

<body oncontextmenu="return false;">

<div class="FOOTER_wrapper">                <!-- # # # # # WRAPPER # # # # #  --> 
<script src="desativar.js"></script>

<div id="img_topo">
  <img src="/rank/img/topo1.jpg" width="1060" height="100">
</div>

<script src="js/ready_getbonecos.js"></script>
<script src="js/cleanForm.js"></script>
<script src="js/saveRank.js"></script>
<script src="js/updateRecord.js"></script>
<script src="js/upData.js"></script>
<script src="js/ready_calcNIVEL.js"></script>
<script src="js/ready_calcAPROV.js"></script>
<script src="js/valida_btn_clean.js"></script>
<script src="js/valida_btn_add-hide.js"></script>
<script src="js/getRank.js"></script>
<script src="js/getPoints.js"></script>
<script src="js/unlockBtn.js"></script>

<script>
getRank();
</script>

<table class="Tab_Unica">
<tbody>
<tr>

<td id='Tab_Col_A'> <!--         A A A A A             A A A A A           -->



<div id="r_TituloAmarelo"><TITULO_COLA>Destaques</TITULO_COLA></div>

<div id="c_DESTAQUES">              <!-- # # # # # DESTAQUES # # # # #  -->  
<div class="c_r_DestaqueA" id="r_DestaqueA">
  <div class="c_r_TitDesk">Destaques (27.09.20)</div>
    <div class="c_r_DeskTextA">
- venomwarlord alcança o nível platina.<br>
- Michael-Myers chega ao nível Ultra Silver e decide se aposentar.<br>
- Equipe Donovan alcança mais de 63k e fica líder do rank de equipes.<br>
- Equipe Drop ficou na primeira posição por 1 ano e 9 meses.<br>
- TheLordDrop é o novo membro da Equipe Drop. 
    </div>
  </div>

<div class="c_r_DestaqueB" id="r_DestaqueB">
  <div class="c_r_TitDesk">Histórico de FTs </div>
    <div class="c_r_DeskTextB">
    26.08.20 | <TitDesk>venomwarlord</TitDesk> vs <TitDesk>Drop-MisterNike</TitDesk> | 10x5<br>    </div>  
    <br>
  <div class="c_r_TitDesk">Recordes</div>
    <div class="c_r_DeskTextB">
1&#867; Posição Solo | <TitDesk>DropBlackPhanter</TitDesk>: 1 ano e 2 meses<br>
1&#867; Posição Team | <TitDesk>Equipe Drop</TitDesk>: 1 ano e 9 meses 
    </div>
</div>
</div>                              <!-- # # # # # DESTAQUES # # # # #  -->  

<br><br>

<div id="r_TituloAmarelo"><TITULO_COLA>Rank Equipe</TITULO_COLA>
  <div id="r_BonusPoints">
  {Bônus} Gold: +2k / Super Gold: +5k / Ultra Gold: +12k / Platinum: +27k  
  </div>
</div>

<script>
getPoints();
</script>

<!-- --teste1-- <div id="T201"></div> -->
<!-- --teste-success-- <div id="T202"></div> -->

<table><tbody><tr><td>

<div id="c_TEAM_GOD"><!-- # # # # # BLOCO # # # # #  -->  
    <div id="r_TEAM_box1"><!-- # # # # # -->    
    
    <div id="r_TEAM_box1_line1">
      <div id="c_Team_Pos"></div>
      <div id="c_Team_pts"></div>
      <div id="c_Team_nick"></div>
    </div> 
    <div id="r_TEAM_box1_line2">
      <div id="c_Team_lut_T">LUTAS</div>
      <div id="c_Team_vit_T">VITÓRIAS</div>
      <div id="c_Team_der_T">DERROTAS</div>
      <div id="c_Team_apr_T">APROV.</div>
    </div> 
    <div id="r_TEAM_box1_line3">
      <div id="c_Team_lut"></div>
      <div id="c_Team_vit"></div>
      <div id="c_Team_der"></div>
      <div id="c_Team_apr"></div>
    </div> 
    
    </div><!-- # # # # # -->     
    
    <div id="r_TEAM_box2"><!-- # # # # # -->   
    
    <div id="r_TEAM_box1_line1">
      <div id="c_Team_Pos2"></div>
      <div id="c_Team_pts2"></div>
      <div id="c_Team_nick2"></div>
    </div> 
    <div id="r_TEAM_box1_line2">
      <div id="c_Team_lut_T">LUTAS</div>
      <div id="c_Team_vit_T">VITÓRIAS</div>
      <div id="c_Team_der_T">DERROTAS</div>
      <div id="c_Team_apr_T">APROV.</div>
    </div> 
    <div id="r_TEAM_box1_line3">
      <div id="c_Team_lut2"></div>
      <div id="c_Team_vit2"></div>
      <div id="c_Team_der2"></div>
      <div id="c_Team_apr2"></div>
    </div> 
    
    </div><!-- # # # # # -->    


<div><!-- # # # # # BLOCO # # # # #  -->  

</td></tr></tbody></table>

<br><br>

<div id="r_TituloAmarelo"><TITULO_COLA>Rank Individual</TITULO_COLA>
  <div id="r_BonusPoints_Solo">
    <div id="TESTE201"></div> 
    <input type="password" class="c_r_unlock" id="r_unlock" maxlength="5">
    <button class="c_r_btn_unlock" id="r_btn_unlock" onclick="unlockBtn()">unlock</button>
    <button class="c_r_btn_hide" id="r_btn_hide" disabled>HIDE</button>
    <button class="c_r_btn_add" id="r_btn_add" disabled>ADICIONAR REGISTRO</button>  
  </div>
</div>

<div id="r_showRank"></div>  

<br><br>

</td>               <!--         A A A A A             A A A A A           -->

<td id='Tab_Col_B'> <!--         B B B B B             B B B B B           -->



<!-- AQUI -->
<table class="Tab_Coluna_B"><tbody><tr>
    <td id='Linha_1'>
    

<div id="COLB_GOD">
  <div id="r_TituloYellow"><TITULO_COLB>Comic</TITULO_COLB></div>
  
  <div id="img_col_B_div"> 
    <a href="/rank/img/comic_out20/" target="_blank">
    <img src="/rank/img/comic_col_B.jpg" width="270" height="363">
    </a>
  </div>
</div>


<?php
/*

<div id="img_comic">
  <a href="/rank/img/comic_out20/" target="_blank"><img src="/rank/img/comic_col_B.jpg" width="270" height="363"></a>
</div>

*/
?>

<br>

<!-- ABAIXO IMAGEM COMIC -->



  </td>
  </tr>
  <tr>
    <td id='Linha_2'>
<!-- AQUI -->


<br>

<div id="img_Form"><!-- CENTRALIZA FORM -->
<div id="THE_GOD_FORM">             <!--        THE GOD FORM _ START        -->

<div id="c_BLOCO_Father">           <!--        c_BLOCO_Father _ START      -->

<div id="c_BLOCO">                  <!--        c_BLOCO _ START             -->

<div class="c_r_nick_box" id="r_nick_box">	
  <span>Nick:</span>
  <input type="text" class="c_r_nick" id="r_nick" maxlength="16">
</div>

<div class="c_r_pontos_box">
  <span>Pontos:</span>
  <input type="text" class="calcNIVEL c_r_pontos" id="r_pontos" maxlength="5" max="13999" required>
</div>

<div class="c_r_rankcfn_box">	
  <span>Rank CFN:</span>
	<input type="text" class="c_r_rankcfn" id="r_rankcfn" maxlength="7" required>
</div>

<div class="c_r_lutas_box">
  <span>Lutas:</span>
	<input type="text" class="calc2020 c_r_lutas" id="r_lutas" maxlength="4" required>
</div>

<div class="c_r_vitorias_box">
  <span>Vitorias:</span>
	<input type="text" class="calc2020 c_r_vitorias" id="r_vitorias" maxlength="4" required>
</div>

<div class="c_r_derrotas_box">	
  <span>Derrotas:</span>
	<input type="text" class="calc2020  c_r_derrotas" id="r_derrotas" disabled>
</div>

<div class="c_r_aprov_box">	
  <span>Aprov.:</span>
	<input type="text" class="c_r_aprov" name="r_aprov" id="r_aprov" disabled>
</div>

<div class="c_r_list_player" id="r_player">
  <select id="r_player_sel">
  	<option value="1">PLAYER</option>
    <option value="donovan">donovan</option>
    <option value="drop">drop</option>
  </select>
</div>

<div class="c_r_list_boneco" id="r_boneco">
  <select id="r_boneco_sel">
  	<option value="1">BONECO</option>
    
  </select>
</div>

<div class="c_r_list_nivel" id="r_nivel">
  <select id="r_nivel_sel" disabled>
    <option value="1"				 			  >NIVEL</option>
    
    <option value="Rookie"				 		  >Rookie ( 0-499 PL )</option>
    
    <option class="bronze" value="Bronze"		  >Bronze ( 500-999 PL )</option>
    <option class="bronze" value="Super Bronze"	  >Super Bronze ( 1,000-1,499 PL )</option>
    <option class="bronze" value="Ultra Bronze"	  >Ultra Bronze ( 1,500-1,999 PL )</option>
    
    <option class="prata" value="Silver"		  >Silver ( 2,000-2,999 PL )</option>
    <option class="prata" value="Super Silver"	  >Super Silver ( 3,000-3,499 PL )</option>
    <option class="prata" value="Ultra Silver" 	  >Ultra Silver ( 3,500-3,999 PL )</option>
    
    <option class="ouro" value="Gold"			  >Gold ( 4,000-5,499 PL )</option>
    <option class="ouro" value="Super Gold"  	  >Super Gold ( 5,500-6,499 PL )</option>
    <option class="ouro" value="Ultra Gold"  	  >Ultra Gold ( 6,500-7,499 PL )</option>
    
    <option class="platina" value="Platinum"      >Platinum ( 7,500-9999 PL )</option>
    <option class="platina" value="Super Platinum">Super Platinum ( 10,000-11,999 PL )</option>
    <option class="platina" value="Ultra Platinum">Ultra Platinum ( 12,000-13,999 PL )</option>
    
    <option disabled value="Diamond"			  >Diamond ( 14,000-19,999 PL )</option>
    <option disabled value="Super Diamond"		  >Super Diamond ( 20,000-24,999 PL )</option>
    <option disabled value="Ultra Diamond"		  >Ultra Diamond ( 25,000-29,999 PL )</option>
    
    <option disabled value="Master"				  >Master ( 30,000-34,999 PL )</option>
    <option disabled value="Grand Master"		  >Grand Master ( 35,000-99,999 PL )</option>
    <option disabled value="Ultimate Grand Master">Ultimate Grand Master ( 100,000-299,999 PL )</option>
    <option disabled value="Warlord"			  >Warlord ( 300,000+ PL )</option>
  </select>
</div>

</div>                              <!--         c_BLOCO _ END        -->
</div>                              <!--         c_BLOCO_Father _ END -->

<div class="c_r_rankHidden_box">	
	<input type="hidden" class="c_r_rankcfn" id="r_rankHidden">
</div>

<div class="c_r_pontosA_box">	
	<input type="hidden" class="c_r_pontosA" id="r_pontosA">
</div>

<br>

<div id="c_BLOCO_buttons">          <!--         c_BLOCO_buttons _ START     -->

<button class="c_r_btn_save" id="r_btn_save" onclick="saveRank()">Salvar</button>
<button class="c_r_btn_update" id="r_btn_update" onclick="updateRecord()" disabled>Atualizar</button>
<button class="c_r_btn_clean" id="r_btn_clean" onclick="cleanForm()" disabled>Limpar</button>

</div>                              <!--         c_BLOCO_buttons _ START     -->

<br>

<div id="c_BLOCO_msg">          <!--             c_BLOCO_msg _ START     -->

<div class="c_r_Resposta" id="r_Resposta"></div>

<div class="c_r_Messages" id="r_Messages"></div>  

</div>                              <!--         c_BLOCO_msg _ END     -->

</div>                              <!--         THE GOD FORM _ END        -->
</div><!-- CENTRALIZA FORM -->


<div id="img_footer">
  <img src="/rank/img/img_bottom.jpg" width="300" height="666">
</div>


</td></tr></tbody></table>
<!-- AQUI -->


</td>               <!--         B B B B B             B B B B B           -->

</tr>
</tbody>
</table>



<div class="FOOTER_push"></div>
</div>                              <!-- # # # # # WRAPPER # # # # #  -->
<div class="FOOTER_footer">
<TEXTOFOOTER>{ RANK } Marcio (marcbrcx @ gmail.com) | Criado: 10/09/2020 | Ativo: ##/##/2020 | Última atualização: 11/10/2020</TEXTOFOOTER>
</div>




</body>
</html>

<?php
/*

<div class="zzc_r_showRank" id="r_showRank"></div>  

<script>
//$(document).ready(function(){ 
//	$("#r_boneco").load("r_getbonecos.php");
  
//});
</script>

--------------------------------

Boneco:<br>
<div class="c_r_list_boneco" id="r_boneco">
  <select>
    <option value="urien">urien</option>
    <option value="blanka">blanka</option>
    <option value="karin">karin</option>
  </select>
</div>

--------------------------------

<script>
$(document).ready(function(){ 
  //$("#sub").click(function() {
    //var city_name=$("#city").val();
    //var country_name=$("#country").val();
    $.ajax({
      url:'r_getbonecos.php',
      data:{city:city_name, country:country_name},
      type:'POST',
      success:function(data) {
        $("#result").html(data);
      }
    });
    
  });
  
});
</script>

--------------------------------

<script>
//function upData(name,job) {
function zzupData(cod) {
  //document.getElementById("demo").innerHTML = "Welcome " + name + ", the " + job + ".";
  document.getElementById("resHOJEp").innerHTML = cod;
}
</script>


// TESTAR JSON

<div id="TESTE201"></div> <br>
<div id="TESTE202"></div> <br>
<div id="TESTE203"></div> <br>
<div id="TESTE204"></div> <br>

<script>
$(document).ready(function(){ 
	$.get('r_getbonecos.php', function (data) {
  		$("#TESTE201").html('HTML: ' + data);
      $("#TESTE201").val('VAL: ' + data);
      $("#TESTE201").text('TEXT: ' + data);  
  })
});
</script>

//$("#r_showPoints1").html('HTML: ' + data[i].pts_don);
//$("#r_showPoints2").val('VAL: ' + data[i].pts_don);
//$("#r_showPoints3").text('TEXT: ' + data[i].pts_don);         
//alert(data);


*/
?>