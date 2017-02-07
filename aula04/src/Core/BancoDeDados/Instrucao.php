<?php

    namespace Core\BancoDeDados;


    abstract class Instrucao{
        protected $sql,$filtros,$entidade;

        public function setaEntidade($entidade){
            if(is_string($entidade)){
                $this->entidade = $entidade;
                return $this;
            }else{
                throw new \Exception('A entidade deve ser uma String');
            }
        }
        public function setaFiltros($filtros){

        }
        abstract public function retornaSql();


        abstract public function setaValores(Array $valores);


    }