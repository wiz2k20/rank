<?php
// = = = = = CONECTA BANCO = = = = =
include 'db1.php';
// = = = = = = = = = = = = = = = = =

$sql = "SELECT rank, nick, player, pontos, pontosA, boneco, boneco_img, nivel, nivel_img, lutas, vitorias, derrotas, aprov, rankcfn
FROM sfv_rank 
ORDER BY pontos DESC";
$res = $cone->query($sql);

$i_count = 1;

echo '<div id="c_RANK_update_GOD">';

/* 
echo '<div id="c_RANK_update">';
*/

while($row = $res->fetch_assoc()) :
?>  
<div id="c_RANK_update">

<div id="r_RANK_pos">
  <div id="id_pos"><?php echo $i_count; ?></div>
  <div id="id_pos_up">
    <button class="c_r_upData" id="<?php echo $row['rank']; ?>" onclick="upData(this.id)" disabled>Editar</button>
  </div>
</div>

<div id="r_RANK_pts">	
  <div id="c_RANK_col2"> 
    <div id="id_nick"><?php echo $row['nick']; ?></div>
  
    <div id="id_pontos">  
      <div id="id_pontos_New"><?php echo $row['pontos']; ?> PL</div>
    
      <div id="id_pontos_Old">[ <?php echo $row['pontosA']; ?> PL ]</div> 
    </div>
  
    <div id="id_boneco"><?php echo $row['boneco']; ?></div>
  
    <div id="id_rankcfn">Rank CFN: <?php echo $row['rankcfn']; ?></div>
  </div>
</div>

<div id="r_RANK_img">	
  <div id="id_img" style="background-image: url('<?php echo $row['nivel_img']; ?>'), url('<?php echo $row['boneco_img']; ?>');">
    <div id="id_img_player"><?php echo $row['player']; ?></div>
  </div>
</div>

<div id="r_RANK_lut">	
  <div id="c_RANK_col4">   
    <div id="id_lut_tit">Lutas:</div>
    <div id="id_lut_pts"><?php echo $row['lutas']; ?></div>

    <div id="id_vit_tit">Vitorias:</div>
    <div id="id_vit_pts"><?php echo $row['vitorias']; ?></div>

    <div id="id_der_tit">Derrotas:</div>
    <div id="id_der_pts"><?php echo $row['derrotas']; ?></div>

    <div id="id_apr_tit">Aprov.:</div>
    <div id="id_apr_pts"><?php echo $row['aprov']; ?></div>
  </div>
</div>

</div>
     
<?php 
$i_count++;
endwhile;

$cone->close();
?>

</div>

<?php
/*        

<button class='send1' id=" . $row["cod"] . " onclick='reqpass2(this.id)'>del</button>

<?php echo "<br><br>"; ?>

<?php echo $row['rank']; ?>

echo $iY;
echo "<br>";
echo $iM;
echo "<br>";
echo $iD;
echo "<br><br>";

*/
?>