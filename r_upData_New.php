<?php
// = = = = = CONECTA BANCO = = = = =
include 'db1.php'; // COPY db1.php from SEND folder
// = = = = = = = = = = = = = = = = =

$i_rankCod     = $_POST['out_rankCod'];

//$i_player   = $_POST['out_player'];
//$i_boneco   = $_POST['out_boneco'];
//$i_nick     = $_POST['out_nick'];

$i_pontos   = $_POST['out_pontos'];
$i_pontosA   = $_POST['out_pontosA'];

$i_rankcfn  = $_POST['out_rankcfn'];
$i_nivel    = $_POST['out_nivel'];
$i_lutas    = $_POST['out_lutas'];
$i_vitorias = $_POST['out_vitorias'];
$i_derrotas = $_POST['out_derrotas'];
$i_aprov    = $_POST['out_aprov'];


switch ($i_nivel) {
    case "Rookie":
        $i_nivel_img = "/rank/nivel/n1_r.png";
        break;
    
    case "Bronze":
        $i_nivel_img = "/rank/nivel/n2_b.png";
        break;   
    case "Super Bronze":
        $i_nivel_img = "/rank/nivel/n3_sb.png";
        break;  
    case "Ultra Bronze":
        $i_nivel_img = "/rank/nivel/n4_ub.png";
        break;
    
    case "Silver":
        $i_nivel_img = "/rank/nivel/n5_s.png";
        break;
    case "Super Silver":
        $i_nivel_img = "/rank/nivel/n6_ss.png";
        break;
    case "Ultra Silver":
        $i_nivel_img = "/rank/nivel/n7_us.png";
        break;
    
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

// SQL

$sql = "UPDATE `sfv_rank`
SET
`pontos` = '$i_pontos',
`pontosA` = '$i_pontosA',
`rankcfn` = '$i_rankcfn',
`nivel` = '$i_nivel',
`nivel_img` = '$i_nivel_img',
`lutas` = '$i_lutas',
`vitorias` = '$i_vitorias',
`derrotas` = '$i_derrotas',
`aprov` = '$i_aprov'
WHERE `rank` = '$i_rankCod'";



if ($cone->query($sql) === TRUE) {
    echo "Atualizado com sucesso !";
} else {
    echo "[ ERROR: " . $sql . " ]" . $cone->error;
}
$cone->close();

?>


<?php
/*        

nick = '$i_nick',
player = '$i_player',
pontos = '$i_pontos',
pontosA = '$i_pontosA',
boneco = '$i_boneco',
boneco_img = '$i_boneco_img',
nivel = '$i_nivel',
nivel_img = '$i_nivel_img',
lutas = '$i_lutas',
vitorias = '$i_vitorias',
derrotas = '$i_derrotas',
aprov = '$i_aprov',
rankcfn = '$i_rankcfn',


*/
?>