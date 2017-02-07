<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 24/01/17
 * Time: 11:38
 */

    namespace Core\BancoDeDados;

    class BancoDeDados{


        private $config,$pdo;


        public function __construct(Array $config){
            $this->config = $config;
            $this->validaConexao();
        }

        /**
         * @return PDO
         */
        public function conecta()
        {
            try{
                $this->pdo = new \PDO('mysql:host=' . $this->config['servidor'] . ';
                    dbname=' . $this->config['banco'],

                    $this->config['usuario'],
                    $this->config['senha'],
                    $this->config['opcoes']
                );
            }catch (\PDOException $e){
                throw  new \Exception("Erro ao conectar. Código".$e->getCode()."!Mensagem: ".$e->getMessage());
            }
             return $this->pdo;
        }
        private function validaConexao(){
            if(is_array($this->config)){
              if(empty($this->config['servidor']))
                 throw new \Exception('Você não informou o servidor !');

              if(empty($this->config['banco']))
                 throw new \Exception('Você não informou o banco de dados!');

              if(empty($this->config['usuario']))
                 throw  new \Exception('Você não informou o usuario!');

              if(!isset($this->config['senha']))
                 throw new \Exception('Você nao informou a senha!');

              if(empty($this->config['opcoes']) and !is_array($this->config['opcoes']))
                 throw  new \Exception('Você não informou as opções ou não é um array ');

              return true;
            }
            throw new \Exception('Esta não é uma configuração válida');
        }

        public function execute(){
            $select = $this->pdo->prepare('SELECT * FROM usuarios WHERE nome = :nome;');
            $select->bindValue(":nome",$_GET['nome']);
            $select->execute();
            return $select->fetchAll(\PDO::FETCH_ASSOC);

        }

    }


