<?php

include ("ClassConexao.php");

class ClassCrud extends ClassConexao{
    #Atributos
    private $Crud;
    private $Contador;
    private $Resultado;

    #Preparação
    private function preparedStatements($Query, $Tipos, $Parametros)
    {
        $this->countParametros($Parametros);
        $con=$this->conectaDB();
        $this->Crud=$con->prepare($Query);
        if ($this->Contador > 0){
            $CallParametros = array();
            foreach ($Parametros as $Key => $Parametro){
                $CallParametros[$Key] = &$Parametros[$Key];
            }
            array_unshift($CallParametros,$Tipos);
            call_user_func_array(array($this->Crud,'bind_param'),$CallParametros);
        }
        $this->Crud->execute();
        $this->Resultado=$this->Crud->get_result();
    }
    #Contador de Parâmetros
    private function countParametros($Parametros)
    {
       $this->Contador = count ($Parametros);
    }

    #Método de Inserção
    public function insertDB($Tabela, $Condicao, $Tipos, $Parametros){
        $this->preparedStatements("INSERT INTO {$Tabela} values ({$Condicao})", $Tipos, $Parametros);
        return $this->Crud;
    }

    #Seleção no Banco de Dados
    public function selectDB ($Campos, $Tabela, $Condicao, $Tipos, $Parametros){
        $this->preparedStatements("SELECT {$Campos} from {$Tabela} {$Condicao}", $Tipos, $Parametros);
        return $this->Resultado;
    }

    #Apagar usuário no Banco de Dados
    public function deleteDB ($Tabela, $Condicao, $Tipos, $Parametros){
        $this->preparedStatements("DELETE FROm {$Tabela}  WHERE {$Condicao}", $Tipos, $Parametros);
        return $this->Crud;
    } 

    #Atualiza o cadastro
    public function updateDB ($Tabela, $Set, $Condicao, $Tipos, $Parametros){
        $this->preparedStatements("UPDATE {$Tabela} SET {$Set} WHERE {$Condicao}", $Tipos, $Parametros);
        return $this->Crud;
    }  
}

?>