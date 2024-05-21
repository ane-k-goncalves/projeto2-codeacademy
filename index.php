<?php

    $users = ['user' => 'admin', 'password' => 'password'];

    $vendas = 0;

    $logs = [];

    function logs($mensagem) {
        global $logs;

        $logs[] = "[" . date('s/m/Y H:i:s') . "]" . $mensagem;
    }


    function login($users){
        $username = readline("nome: ");
        $password = readline("senha: ");

        global $users;
        global $logs;

            if (isset ($users['user']) && $users['password'] == $password){
                logs("Bem-vindo $username! \n");
                echo "Bem-vindo $username! \n";
                return true;
            }
        
        echo "Usuário não encontrado. \n";
        return false;
        }
        
    
    function cadastrar($users){
        $username = readline("nome: ");
        $password = readline("senha: ");

        global $users;
        global $logs;
    
        $users[] = ["user" => $username, "password" => $password];
    
        logs("Usuário $username cadastrado. \n");
        echo "Usuário cadastrado.\n";
        return true;
    
    }
    
    function vender(){
        global $vendas;

        $item = readline("Qual o nome do item vendido: ");
        $valor = readline("Qual o valor do item: ");

        $vendas += $valor;

        logs("O usuário vendeu o item $item no valor de R$ $valor. ");

        return $vendas . "Venda realizada! \n";
    }

    function verificarLog($logs){
        global $logs;

        foreach($logs as $log){
            print_r($logs) . "\n";
        }
    
    }

    function menu(){
        while(true){

            global $users;
            global $logs;

            echo "Digite \n1.Vender \n2.Cadastro Novo usuário \n3.Verificar log \n4.Sair \n";

            $acao = readline("Escolha: ");

            switch($acao){
                case 1:
                    vender();
                    break;
                case 2:
                    cadastrar($users);
                    break;
                case 3:
                    verificarLog($logs);
                    break;
                case 4:
                    die();
                    break;
            
            }
        }
    }

   

    
    function loja(){
    
    global $users;

    while(true) {   //usar um looping
        echo "Digite \n1.Entrar \n2.Cadastrar \n";

        $a  = readline("Escolha: ");

        if($a == 1){
            echo "Digite \n1.Logar \n2.Sair \n";

            $a  = readline("Escolha: ");

                if($a == 1) {
                    login($users);
                    menu();
            
                } else if ($a == 2){

                die();
             }

             } else if ($a == 2){

                echo "Digite \n1.Cadastrar \n2.Sair \n";

                $a  = readline("Escolha: ");

                switch($a){
                    case 1:
                        cadastrar($users);
                        break;
                    case 2:
                        die();
                        break;
                }
            }
        }  
    }
    


loja();
