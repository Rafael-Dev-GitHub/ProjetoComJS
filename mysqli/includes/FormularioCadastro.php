<?php
    include("class/ClassCrud.php");
    /* Tem ID = Editar */
    if(isset($_GET['id']))
    {
        $Id=$_GET['id'];
        $Acao="Editar";
        $Crud=new ClassCrud();
        $BFetch = $Crud->selectDB(
                        "*",
                        "cadastro",
                        "WHERE Id=?",
                        "i",
                        array($Id)
                    );
        $Fetch =$BFetch->fetch_assoc();
        $Nome=$Fetch['Nome'];
        $Senha=$Fetch['Senha'];
        $Nivel=$Fetch['Nivel'];
    } else
    {
        $Acao="Cadastrar";
        $Id=0;
        $Nome="";
        $Senha="";
        $Nivel="";    
    }
?>
<div class="Resultado">

</div>

<div class="Formulario">
    <h1 class="Center"> <?=$Acao; ?> </h1>  
    <form name="FormCadastro" id="FormCadastro" method="POST" action="/controller/ControllerCadastro.php"> 
        <input type="hidden" id="Acao" name="Acao" value="<?=$Acao; ?>" />
        <input type="hidden" id="Id" name="Id" value="<?=$Id; ?>" />
        <div class="FormularioInput">
            Nome: <br/>
            <input type="text" id="Nome" name="Nome" value="<?=$Nome; ?>" />
        </div> 
        <div class="FormularioInput">
            Senha: <br/>
            <input type="text" id="Senha" name="Senha" value="<?=$Senha ?>" />
        </div> 
        <div class="FormularioInput">
            Nivel: <br/>
            <select name="Nivel" id="Nivel">
                <option value="<?=$Nivel?>" > <?=$Nivel; ?> </option>
                <option value="ADM">Administrador</option>
                <option value="GER">Gerente</option>
                <option value="ATD">Atendente</option>
            </select>
        </div> 
        <div class="FormularioInput FormularioInput100 Center">
            <input type="submit" value="<?=$Acao; ?>" />
        </div> 
    </form>
</div>