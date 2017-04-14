<?php

    namespace Core\BancoDeDados;


    abstract class Instrucao{
        protected $sql,$filtros,$entidade;

        final public function setaEntidade($entidade){
            if(is_string($entidade)){
                $this->entidade = $entidade;
                return $this;
            }else{
                throw new \Exception('A entidade deve ser uma String');
            }
        }
        final public function setaFiltros(){
            $this->filtros = new Filtros();
            return $this->filtros;
        }
        abstract public function retornaSql();


        abstract public function setaValores(Array $valores);


    }