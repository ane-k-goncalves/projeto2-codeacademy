<?php
    $users = [];


    function login($users){
        $user = readline("nome: ");
        $password = readline("senha: ");

        global $users;

        //arrumar -> não verifica se 
            foreach ($users as $userData ) {
            if ($userData['user'] === $user && $userData['password'] === $password) {
                return "Bem-vindo!";
            }else {
                return "Usuário não encontrado.";
            }
        }
        return;
    }
        
    
    function cadastrar(){
        $user = readline("nome: ");
        $password = readline("senha: ");
    
        global $users;
    
        $users[] = ["user" => $user, "password" => $password];
    
        echo "Usuário cadastrado.\n";
    
        }
    

    
    $x = 0;

    while($x == 0) {   //usar um looping
        echo "Digite \n1.Entrar \n2.Cadastrar \n";

        $a  = readline("Escolha: ");

        if($a == 1){
            echo "Digite \n1.Logar \n2.Sair \n";

            $a  = readline("Escolha: ");

            switch($a){
                case 1:
                    login($users);
                    break;
                case 2:
                    die();
                    break;
            }

            if($a == 1) {

                echo "Digite \n1.Vender \n2.Cadastro Novo usuário \n3.Verificar log \n4.Sair \n";

                $acao = readline("Escolha: ");

                switch($acao){
                    case 1:
                        vender();
                        break;
                    case 2:
                        cadastrar();
                        break;
                    case 3:
                        verificarLog();
                        break;
                    case 4:
                        die();
                        break;
                            //arrumar para esseeeeeeeeee ser while
                }
            }

        }else if($a == 2){

            echo "Digite \n1.Cadastrar \n2.Sair \n";

            $a  = readline("Escolha: ");

            switch($a){
                case 1:
                    cadastrar();
                    break;
                case 2:
                    die();
                    break;
            }
        }
    }  


