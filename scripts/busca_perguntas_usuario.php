<?php
    //Conecta ao servidor MySQL
    $conecta = mysql_connect("localhost","root","") or print 'Sem conexão';    
    
    //Seleciona a Base de Dados
    mysql_select_db("forum") or die("Não foi possível selecionar o Banco de Dados");
     
    //Retorna toda a tabela usuário
    $consulta = "SELECT * FROM pergunta p inner join usuario u where p.id_usuario = u.id_usuario";
    $resultado = mysql_query($consulta) or die ("Erro na consulta aos dados");
?>