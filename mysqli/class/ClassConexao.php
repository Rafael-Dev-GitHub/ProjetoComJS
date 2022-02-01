<?php

// Não instancia, apenas extend
abstract class ClassConexao{
    protected function conectaDB(){
        try{
            $con = new mysqli("localhost","root","","crud");
            return $con;
        } catch (Exception $Erro){
            return $Erro->getMessage();
        }
    }

}

?>