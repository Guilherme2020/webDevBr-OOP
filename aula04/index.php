<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 18/01/17
 * Time: 17:14
 */

    header('Content-type: text/html; charset=UTF-8');

    define('ROOT',dirname(__FILE__));
    define('DS',DIRECTORY_SEPARATOR);

    include ROOT.DS.'vendor'.DS.'autoload.php';

    try{
//          $filtro = new Core\BancoDeDados\Filtros();
//          $filtro_sql = $filtro->where('nome','=','Gui')
//                ->whereOperador('AND')
//                ->where('id','>',1)
//                ->limit(1)
//                ->orderBy('id DESC')
//                ->retornaSql();

          $sql = new Core\BancoDeDados\Instrucoes\Update();

          $sql->setaEntidade('usuarios')
              ->setaValores([
                  'nome'=>"gui",
                  'sobrenome'=>'rodrigues',
                  'email'=>'grodrigues@gmail.com',
                  'senha'=>'123313'
              ])
              ->setaFiltros()
                ->where('nome', "=",'Gii')
                ->whereOperador('AND')
                ->where('id','>',1)
                ->limit(1)
                ->orderBy('id DESC');


//        $banco_config = new Application\Config\BancoDeDados();
//        $banco_dados = new Core\BancoDeDados\BancoDeDados($BancoConfig->db);



//        $pdo = $banco_dados->conecta();
//        $data = $banco_dados->execute();


//        echo '<pre>';
//
//            print_r($data);
//        echo '</pre>';
//        $sql = new Core\BancoDeDados\Instrucoes\Insert();
//        $sql->setaEntidade('usuarios')
//                ->setaValores([
//                    'nome'=> 'Gui',
//                    'sobrenome'=> 'Rodrigues',
//                    'email'=> 'grodrigues.simeao@gmail.com',
//                    'senha'=> '3131'
//
//
//                ]);
//
        var_dump($sql->retornaSql()) ;



    }catch(\Exception $e){
        $e->getMessage();
    }

?>


