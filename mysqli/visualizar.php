<?php 
include("includes/header.php"); 
include("class/ClassCrud.php"); 
?>
    <div class="Content">
        <?php 
            $Crud= new ClassCrud();
            $IdUsuario = filter_input (INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
            $BFetch = $Crud->selectDB(
                "*",
                "cadastro",
                "where Id=?",
                "i", // ID = tipo integer
                array ($IdUsuario)
            );
            $Fetch=$BFetch->fetch_assoc();
        ?>
        <h1> Dados do Usuário </h1>
        <hr/>
        <strong>Nome:</strong>  <?=$Fetch['Nome']  ?><br/>
        <strong>Senha:</strong> <?=$Fetch['Senha'] ?><br/>
        <strong>Nivel:</strong> <?=$Fetch['Nivel'] ?><br/>
    </div>
<?php include("includes/footer.php"); ?>