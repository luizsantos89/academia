<?php 
    if(!isset($_SESSION)) { 
        session_start(); 
        
    } 
    
    echo 'Usuário logado: '.$_SESSION["nome"];