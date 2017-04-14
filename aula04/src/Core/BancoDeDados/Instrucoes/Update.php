<?php
    namespace Core\BancoDeDados\Instrucoes;

    use Core\BancoDeDados\Instrucao;

    final class Update extends Instrucao{
        private $valores;
        public function retornaSql()
        {
            // TODO: Implement retornaSql() method.
            if(empty($this->entidade))
                throw new \Exception('Voce nao declarou a entidade');
            $sql = 'UPDATE '.$this->entidade.'SET'.$this->valores;
            if(!empty($this->filtros))
                $sql .= $this->filtros->retornaSql();

            return $sql. ";";
        }

        public function setaValores(Array $valores=[])
        {
            // TODO: Implement setaValores() method.
            $chaves = array_keys($valores);

            $sql = [];
            foreach ($chaves as &$chave){
                $sql[] =  $chave.'=:'.$chave;
            }

            $this->valores = implode(', ',$sql);

            return $this;
        }
    }