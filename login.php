<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>...:::: SGA - Sistema de Gestão de Academias ::::...</title>
        <link rel="stylesheet" type="text/css" href="estilo/estilo.css" />
        <link rel="stylesheet" type="text/css" href="estilo/menus.css" />
    </head>
    <body>
            <center>
            <div id="pagina">
                <div id="banner">
                    <!-- Implementação§Ã£o do Logotipo -->
                    <div id="logotipo">
                            <a href="index.php"><img src="imagens/logo2.png"  /></a>
                    </div>

                    <!-- Implementação do algoritmo de busca -->
                    <div id="busca">
                           
                    </div>

                    <!-- Implementação da Área do usuário graficamente-->
                    <div id="area_usuario">                        
                        <center>
                            <table>
                            <form action='controlers/processaLogin.php' method='get'>
                                <tr><td>Usuário:</td><td> <input type='text' name='usuario' size='16' /></td></tr>
                                <tr><td>Senha: </td><td><input type='password' name='senha' size='16' /></td></tr>
                                <tr><td align='center'><input type='submit' value='Entrar' /></td>
                            </form>
                            <form action='cadastro.php' method='post'>
                                <td align='center'><a href="">Recuperar senha</a></td></tr>
                            </form>
                            </table>
                        </center>
                    </div>
                </div>
            <div id="menus">
                <ul>
                    <li><a href="index.php">Principal</a></li>
                </ul>

                <ul>
                    <li><a href="index.php">Minha Conta</a></li>
                </ul>

                <ul><li><a href=" ">Alunos</a>
                    <ul>
                        <li><a href=" ">Cadastrar</a></li>
                        <li><a href=" ">Consultar</a></li>
                        <li><a href=" ">Editar</a></li>
                    </ul>
                </li></ul>

                <ul><li><a href=" ">Atividades</a>
                    <ul>
                        <li><a href=" ">Cadastrar</a></li>
                        <li><a href=" ">Editar</a></li>
                        <li><a href=" ">Consultar</a></li>
                    </ul>
                </li></ul>

                <ul><li><a href=" ">Pagamentos</a>
                    <ul>
                        <li><a href=" ">Registrar</a></li>
                        <li><a href=" ">Consultar</a></li>
                    </ul>
                </li></ul>
            </div>

            <!-- Conteudo da Página -->
            <div id="conteudo">
                <div id="barra_lateral">
                </div>
                <div id="conteudo_pagina">
                    
                </div>
            </div>

            <!-- RodapÃ© da Página -->
            <div id="rodape">
                Produzido por: <a href="mailto:luiz.santos89@yahoo.com.br">Luiz Santos</a> &copy; 2018<br />
            </div>
        </div>
        </center>
    </body>
</html>