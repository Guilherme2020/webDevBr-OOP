<?php
    namespace Core\BancoDeDados\Instrucoes;

    use  Core\BancoDeDados\Instrucao;
    final  class  Delete extends Instrucao{

        public function retornaSql()
        {
            // TODO: Implement retornaSql() method.
            if(empty($this->entidade))
                throw new \Exception('Voce nao declarou a entidade');

            $sql = 'DELETE FROM '.$this->entidade;

            if(!empty($this->filtros))
                $sql .= $this->filtros->retornaSql();

            return $sql.";";
        }

        public function setaValores(Array $valores=[])
        {
            // TODO: Implement setaValores() method.
            throw new \Exception('Voce nao pode chamar o seta valores em um Delete! .. ');
        }
    }