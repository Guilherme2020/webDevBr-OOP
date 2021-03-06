<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 01/03/17
 * Time: 13:25
 */
    namespace Core\BancoDeDados;
    final class Filtros{
        private $sql;

        public function where($coluna,$op,$valor){
            $this->sql['where'][] = $coluna.$op.':'.$coluna;
            return $this;
        }
        public function whereOperador($op){
            $this->sql['where'][] = $op;
            return $this;
        }
        public function limit($limit){
            $this->sql['limit'] = $limit;
            return $this;
        }
        public function orderBy($order){
            $this->sql['order'] =$order;
            return $this;
        }

        public function retornaSql(){
            $sql = [];
            if(!empty($this->sql['where'])){
                $sql_string = 'WHERE ';
                $sql_string .= implode(' ',$this->sql['where']);

                $sql[] = $sql_string;
            }
            if(!empty($this->sql['order'])){
                $sql_string = 'ORDER BY '.$this->sql['order'];
                $sql[] = $sql_string;
            }
            if(!empty($this->sql['limit'])){
                $sql_string = 'LIMIT '.$this->sql['limit'];
                $sql[] = $sql_string;
            }
            return implode(' ',$sql);
        }

    }