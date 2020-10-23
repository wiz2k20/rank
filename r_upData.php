<?php
// = = = = = CONECTA BANCO = = = = =
include 'db1.php'; // COPY db1.php from SEND folder
// = = = = = = = = = = = = = = = = =

$i_rank = $_POST['p_cod_rank'];
//$i_rank = 26;

$sql = "SELECT rank, nick, player, pontos, pontosA, boneco, boneco_img, nivel, nivel_img, lutas, vitorias, derrotas, aprov, rankcfn
FROM sfv_rank 
WHERE rank = $i_rank";
$res = $cone->query($sql);


$row = $res->fetch_assoc();

$json_DATA[] = $row;
	
echo json_encode($json_DATA);






$cone->close();
?>


<?php
/*        

$json_nick = $row['nick'];
$json_player = $row['player'];
$json_pontos = $row['pontos'];
$json_DATA[] = array(
$json_nick" => $json_nick,
"json_player" => $json_player,
"json_pontos" => $json_pontos
							
						);

$row = $res->fetch_assoc();
echo $row;
echo "<br><br>";
echo $row['nick'];
echo "<br><br>";
echo $res;
$cone->close();

*/
?>