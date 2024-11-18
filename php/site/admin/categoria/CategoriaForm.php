<?php
include "../db.class.php";

    $db = new db();

    if(!empty($_POST)){
        $db->insert($_POST);
        echo "<br>Registro inserido com sucesso<br>";
        header("location: CategoriaList.php");
    }
?>

<form action="CategoriaForm.php" method="post">
    <h4>Formúlario Categoria</h4>

    <label for="">Nome</label> <br>
    <input type ="text" name="nome"> <br>

    <button type="submit">Salvar</button>

</form>