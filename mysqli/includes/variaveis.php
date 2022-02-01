<?php

if (isset($_POST['Acao'])){
    $Acao = filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Acao'])){
    $Acao = filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS);
} else{
    $Acao="";
}

if (isset($_POST['Id'])){
    $Id = filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Id'])){
    $Id = filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS);
} else{
    $Id=0;
}

if (isset($_POST['Nome'])){
    $Nome = filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Nome'])){
    $Nome = filter_input(INPUT_GET,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
} else{
    $Nome="";
}

if (isset($_POST['Senha'])){
    $Senha = filter_input(INPUT_POST,'Senha',FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Senha'])){
    $Senha = filter_input(INPUT_GET,'Senha',FILTER_SANITIZE_SPECIAL_CHARS);
} else{
    $Senha="";
}

if (isset($_POST['Nivel'])){
    $Nivel = filter_input(INPUT_POST,'Nivel',FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Nivel'])){
    $Nivel = filter_input(INPUT_GET,'Nivel',FILTER_SANITIZE_SPECIAL_CHARS);
} else{
    $Nivel="";
}