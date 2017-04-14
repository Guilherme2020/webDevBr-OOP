<?php

    namespace Core\BancoDeDados\Instrucoes;


    use Core\BancoDeDados\Instrucao;

    final  class Insert extends Instrucao
    {

        private $valores;

        public function retornaSql()
        {
            // TODO: Implement retornaSql() method.
            if(empty($this->entidade))
                throw new \Exception('Voce nao declarou a entidade');
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