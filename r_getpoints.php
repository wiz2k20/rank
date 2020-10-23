<?php
// = = = = = CONECTA BANCO = = = = =
include 'db1.php';
// = = = = = = = = = = = = = = = = =

$sql = "SELECT player, pontos, nivel, lutas, vitorias, derrotas FROM sfv_rank";

$res = $cone->query($sql);

$SUM_pts_don = 0;
$SUM_lut_don = 0;
$SUM_vit_don = 0;
$SUM_der_don = 0;

$SUM_pts_drop = 0;
$SUM_lut_drop = 0;
$SUM_vit_drop = 0;
$SUM_der_drop = 0;

$bonus_gold = 2000;
$bonus_sgold = 5000;
$bonus_ugold = 12000;
$bonus_plat = 27000;

while($row = $res->fetch_assoc()) :

if ($row['player'] == "donovan") 
  { 
    $SUM_pts_don = $SUM_pts_don + $row['pontos'];
    $SUM_lut_don = $SUM_lut_don + $row['lutas'];
    $SUM_vit_don = $SUM_vit_don + $row['vitorias'];
    $SUM_der_don = $SUM_der_don + $row['derrotas'];

    switch ($row['nivel']) {
    case "Gold":
        $SUM_pts_don = $SUM_pts_don + $bonus_gold;
        break; 
    case "Super Gold":
        $SUM_pts_don = $SUM_pts_don + ($bonus_sgold + $bonus_gold);
        break; 
    case "Ultra Gold":
        $SUM_pts_don = $SUM_pts_don + ($bonus_ugold + $bonus_sgold + $bonus_gold);
        break;
    case "Platinum":
        $SUM_pts_don = $SUM_pts_don + ($bonus_plat + $bonus_ugold + $bonus_sgold + $bonus_gold);
        break; 
}

  }
if ($row['player'] == "drop") 
  {  
    $SUM_pts_drop = $SUM_pts_drop + $row['pontos'];
    $SUM_lut_drop = $SUM_lut_drop + $row['lutas'];
    $SUM_vit_drop = $SUM_vit_drop + $row['vitorias'];
    $SUM_der_drop = $SUM_der_drop + $row['derrotas'];

    switch ($row['nivel']) {
    case "Gold":
        $SUM_pts_drop = $SUM_pts_drop + $bonus_gold;
        break; 
    case "Super Gold":
        $SUM_pts_drop = $SUM_pts_drop + ($bonus_sgold + $bonus_gold);
        break; 
    case "Ultra Gold":
        $SUM_pts_drop = $SUM_pts_drop + ($bonus_ugold + $bonus_sgold + $bonus_gold);
        break;
    case "Platinum":
        $SUM_pts_drop = $SUM_pts_drop + ($bonus_plat + $bonus_ugold + $bonus_sgold + $bonus_gold);
        break; 
}

  } 


endwhile;
$cone->close();

$json_DATA_points[] = array(

"pts_don" => $SUM_pts_don,
"lut_don" => $SUM_lut_don,
"vit_don" => $SUM_vit_don,
"der_don" => $SUM_der_don,

"pts_drop" => $SUM_pts_drop,
"lut_drop" => $SUM_lut_drop,
"vit_drop" => $SUM_vit_drop,
"der_drop" => $SUM_der_drop,
                           );

echo json_encode($json_DATA_points);



?>

<?php
/*        

gold +2k
super gold +5k
ultra gold +12k
platinum +27k

switch ($i_nivel) {
    case "Gold":
        $i_nivel_img = "/rank/nivel/n8_g.png";
        break;    
    case "Super Gold":
        $i_nivel_img = "/rank/nivel/n9_sg.png";
        break;     
    case "Ultra Gold":
        $i_nivel_img = "/rank/nivel/n10_ug.png";
        break;
    
    case "Platinum":
        $i_nivel_img = "/rank/nivel/n11_p.png";
        break;
    case "Super Platinum":
        $i_nivel_img = "/rank/nivel/n12_sp.png";
        break;
    case "Ultra Platinum":
        $i_nivel_img = "/rank/nivel/n13_up.png";
        break;
}



*/
?>