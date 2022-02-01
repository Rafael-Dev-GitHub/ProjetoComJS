<?php 
include("includes/header.php"); 
include("class/ClassCrud.php"); 
?>
    <div class="Content">
        <table class="TabelaCrud">
            <tr>
                <td>Nome</td>
                <td>Senha</td>
                <td>Nivel</td>
                <td>Ações</td>
            </tr>
            <!-- Looping da Tabela -->
            <?php
                $Crud = new ClassCrud();
                $BFetch=$Crud->selectDB(
                    "*",
                    "cadastro",
                    "",
                    "",
                    array()
                );
               while ($Fetch=$BFetch->fetch_assoc()){
            ?>
            <tr>
                <td> <?php echo $Fetch['Nome'] ?>  </td>
                <td> <?php echo $Fetch['Senha'] ?> </td>
                <td> <?php echo $Fetch['Nivel'] ?> </td>
                <td>
                    <a href="<?php echo "visualizar.php?id={$Fetch['Id']}" ?>"><img src="image/visualizar.png" alt="Visualizar" /></a>
                    <a href="<?php echo "cadastrar.php?id={$Fetch['Id']}" ?>"><img src="image/editar.png" alt="Editar" /></a>
                    <a class="apagar" href="<?php echo "controller/ControllerApagar.php?id={$Fetch['Id']}" ?>"><img src="image/apagar.png" alt="Apagar"/ ></a>
                </td>
            </tr>
            <?php    
               } 
            ?>
        </table>
    </div>
<?php include("includes/footer.php"); ?>