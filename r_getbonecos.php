<?php
// = = = = = CONECTA BANCO = = = = =
include 'db1.php';
// = = = = = = = = = = = = = = = = =

$sql = "SELECT nome
FROM sfv_bonecos 
ORDER BY nome ASC";
$res = $cone->query($sql);

while($row = $res->fetch_assoc()) {

    $nome = $row['nome'];
    $ret_nome[] = array("nome" => $nome);
        
}

echo json_encode($ret_nome);



$cone->close();
?>



<?php
/*        

###

<option value="<?php echo $row['nome']; ?>"><?php echo $row['nome']; ?></option>

<?php 
endwhile;
?>

###

echo "<option>" . $row{'dd_val'} . "</option>";

echo "<table class='rank'>";

</table>

<?php echo $i_count; ?>

<?php echo $row['nivel']; ?>

*/
?>