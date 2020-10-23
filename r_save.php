<?php
// = = = = = CONECTA BANCO = = = = =
include 'db1.php'; // COPY db1.php from SEND folder
// = = = = = = = = = = = = = = = = =

$i_nick     = $_POST['out_nick'];
$i_player   = $_POST['out_player'];
$i_pontos   = $_POST['out_pontos'];
$i_boneco   = $_POST['out_boneco'];
$i_nivel    = $_POST['out_nivel'];
$i_lutas    = $_POST['out_lutas'];
$i_vitorias = $_POST['out_vitorias'];
$i_derrotas = $_POST['out_derrotas'];
$i_aprov    = $_POST['out_aprov'];
$i_rankcfn  = $_POST['out_rankcfn'];

//$i_nivel_img = "imagem";

$i_pontosA = 0;


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

switch ($i_boneco) {
 
    case "Abigail":
        $i_boneco_img = "/rank/bonecos/abigail.png";
        break;    
    case "Akuma":
        $i_boneco_img = "/rank/bonecos/akuma.png";
        break;           
    case "Alex":
        $i_boneco_img = "/rank/bonecos/alex.png";
        break;       
    case "Balrog":
        $i_boneco_img = "/rank/bonecos/balrog.png";
        break;       
    case "Birdie":
        $i_boneco_img = "/rank/bonecos/birdie.png";
        break;
    case "Blanka":
        $i_boneco_img = "/rank/bonecos/blanka.png";
        break;       
    case "Cammy":
        $i_boneco_img = "/rank/bonecos/cammy.png";
        break;
    case "Chun-Li":
        $i_boneco_img = "/rank/bonecos/chunli.png";
        break;       
    case "Cody":
        $i_boneco_img = "/rank/bonecos/cody.png";
        break;        
    case "Dhalsim":
        $i_boneco_img = "/rank/bonecos/dhalsim.png";
        break;
    case "E. Honda":
        $i_boneco_img = "/rank/bonecos/ehonda.png";
        break;
    case "ED":
        $i_boneco_img = "/rank/bonecos/ed.png";
        break;
    case "F.A.N.G":
        $i_boneco_img = "/rank/bonecos/fang.png";
        break;
    case "Falke":
        $i_boneco_img = "/rank/bonecos/falke.png";
        break;        
    case "G":
        $i_boneco_img = "/rank/bonecos/g.png";
        break;
    case "Gill":
        $i_boneco_img = "/rank/bonecos/gill.png";
        break;
    case "Guile":
        $i_boneco_img = "/rank/bonecos/guile.png";
        break;
    case "Ibuki":
        $i_boneco_img = "/rank/bonecos/ibuki.png";
        break;
    case "Juri":
        $i_boneco_img = "/rank/bonecos/juri.png";
        break;
    case "Kage":
        $i_boneco_img = "/rank/bonecos/kage.png";
        break;
    case "Karin":
        $i_boneco_img = "/rank/bonecos/karin.png";
        break;
    case "Ken":
        $i_boneco_img = "/rank/bonecos/ken.png";
        break;
    case "Kolin":
        $i_boneco_img = "/rank/bonecos/kolin.png";
        break;
    case "Laura":
        $i_boneco_img = "/rank/bonecos/laura.png";
        break;      
    case "Lucia":
        $i_boneco_img = "/rank/bonecos/lucia.png";
        break;
    case "M. Bison":
        $i_boneco_img = "/rank/bonecos/mbison.png";
        break;
    case "Menat":
        $i_boneco_img = "/rank/bonecos/menat.png";
        break;
    case "Nash":
        $i_boneco_img = "/rank/bonecos/nash.png";
        break;
    case "Necali":
        $i_boneco_img = "/rank/bonecos/necali.png";
        break;       
    case "Poison":
        $i_boneco_img = "/rank/bonecos/poison.png";
        break;
    case "R. Mika":
        $i_boneco_img = "/rank/bonecos/rmika.png";
        break;      
    case "Rashid":
        $i_boneco_img = "/rank/bonecos/rashid.png";
        break;
    case "Ryu":
        $i_boneco_img = "/rank/bonecos/ryu.png";
        break;
    case "Sagat":
        $i_boneco_img = "/rank/bonecos/sagat.png";
        break;
    case "Sakura":
        $i_boneco_img = "/rank/bonecos/sakura.png";
        break;
    case "Seth":
        $i_boneco_img = "/rank/bonecos/seth.png";
        break;       
    case "Urien":
        $i_boneco_img = "/rank/bonecos/urien.png";   
        break;
    case "Vega":
        $i_boneco_img = "/rank/bonecos/vega.png";
        break;
    case "Zangief":
        $i_boneco_img = "/rank/bonecos/zangief.png";
        break;
    case "Zeku":
        $i_boneco_img = "/rank/bonecos/zeku.png";
        break;
}


// SQL

$sql = "INSERT INTO sfv_rank
(nick, player, pontos, pontosA, boneco, boneco_img, nivel, nivel_img, lutas, vitorias, derrotas, aprov, rankcfn)

VALUES
('$i_nick', '$i_player', '$i_pontos', '$i_pontosA', '$i_boneco', '$i_boneco_img', '$i_nivel', '$i_nivel_img', '$i_lutas', '$i_vitorias', '$i_derrotas', '$i_aprov', '$i_rankcfn')";


if ($cone->query($sql) === TRUE) {
    echo "Registro adicionado !";
} else {
    echo "[ ERROR: " . $sql . " ]" . $cone->error;
}
$cone->close();


?>


<?php
/*        

(nick, player, pontos, boneco, boneco_img, nivel, nivel_img, lutas, vitorias, derrotas, aprov, rankcfn)


('$i_nick', '$i_player', '$i_pontos', '$i_boneco', '$i_boneco_img', '$i_nivel', '$i_nivel_img', '$i_lutas', '$i_vitorias', '$i_derrotas', '$i_aprov', '$i_rankcfn')";

echo "i is apple";

*/
?>