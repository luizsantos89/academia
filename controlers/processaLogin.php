<?php
    session_start();

    //Conecta ao servidor MySQL
    $conecta = mysqli_connect("localhost","root","","academia") or print 'Sem conexão';
     

    if (isset($_GET["usuario"])){ 
        $usuario = $_GET["usuario"];
        $senha = $_GET["senha"];
        

        if($usuario!=null || $senha!=null) {
            //Retorna toda a tabela usuário
            $consulta = "SELECT * FROM funcionario";
            echo $consulta;
            //luizsantos89 lcaslcas
            $resultado = mysqli_query($conecta,$consulta) or die ("Erro na consulta aos dados");
            
            while ($funcionarios = mysqli_fetch_assoc($resultado)) {
                if ($funcionarios["usuario"] == $usuario){
                    $usuario_erro++;
                    if ($funcionarios["senha"] == $senha){
                        $_SESSION["usuario"] = $usuario;
                        $_SESSION["nome"] = $funcionarios["nome"];
                        if (isset($url)) {
                            Header("Location: $url");
                        } else {
                            header("Location: ../index.php");
                        }
                    }
                } 
            }
        }
    }
