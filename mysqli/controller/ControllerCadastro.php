<?php

include("../includes/variaveis.php");
include("../class/ClassCrud.php");

$Crud = new ClassCrud;
if ($Acao=='Cadastrar')
{
    $Crud->insertDB(
        "cadastro",
        "?,?,?,?",
        "isss", #tipos integer,string,string,string
        array ($Id, $Nome, $Senha, $Nivel)    
    );
} else
{
    $Crud->updateDB(
        "cadastro",
        "Nome=?,Senha=?,Nivel=?",
        "Id=?",
        "sssi",
        array ($Nome, $Senha, $Nivel, $Id)         
    );
}
echo "$Acao realizado com sucesso";

