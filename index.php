<!DOCTYPE html>
<html lang="el">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>cookie</title>

</head>
<body>
<form action="" method="POST">

     <input type="text" method="POST" name="campo">  
     <button type="submit">Entrar</button>

</form>
    <?php
    
    $nome = $_POST['campo'];
    
    if(isset($nome)){
       header("location:cookies.php");   
       setcookie('luci',$_POST['campo'],time() + 3600);   
   }
   ?>
    
</body>
</html>