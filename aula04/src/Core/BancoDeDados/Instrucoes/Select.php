<?php

    namespace Core\BancoDeDados\Instrucoes;
    use Core\BancoDeDados\Instrucao;

    class Select extends Instrucao{

        private $campos;
        public function setaCampos(Array $campos){
            $this->campos = implode(', ',$campos);
            return $this;
        }
        public function retornaSql(){
            $this->campos = (empty($this->campos))? "*": $this->campos;
            if(empty($this->entidade))
                throw new \Exception("Você não declarou a entidade");
            $sql = 'SELECT '.$this->campos.' FROM'.$this->entidade;
            return $sql;
        }

        public function setaValores()
        {
            // TODO: Implement setaValores() method.
            throw new \Exception("Voce nao pode chamar o metodo seta valores em um Select");
        }

    }