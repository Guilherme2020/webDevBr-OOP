<?php

    namespace Core\BancoDeDados\Instrucoes;


    use Core\BancoDeDados\Instrucao;

    class Insert extends Instrucao
    {

        private $valores;

        public function retornaSql()
        {
            // TODO: Implement retornaSql() method.
            $sql = 'INSERT INTO '.$this->entidade.' '.$this->valores.';';
            return $sql;
        }

        public function setaValores(Array $valores=[])
        {
            // TODO: Implement setaValores() method.
            $chaves  = array_keys($valores);
            $colunas = implode(', ',$chaves);
            $valores = implode(', :',$chaves);
            $this->valores =  '('.$colunas.')VALUES(:'.$valores.')';
            return $this;
        }


    }