<?php 
    include("../class/ClassCrud.php"); 
    $Crud= new ClassCrud();
    $IdUsuario = filter_input (INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
    $Crud->deleteDB(
        "cadastro",
        "Id=?",
        "i",
        array ($IdUsuario)    
    );
    echo "Usuário apagado com sucesso!";
?>
