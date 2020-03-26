<?php
##A sessão se inicia.
	session_start(); 

	##A pagina de login retornara se não ouver sessão.
	if(!isset($_SESSION['password']) == true){
        header("Location:index.php");
		unset($_SESSION['password']);
        
    }    
        echo "O usuario: ".$_SESSION['username']."<br/>";
        echo "Foi logado!"
?>