<html>
    <head>
        <title> </title>
    </head>
    <body>
        <link rel="stylesheet" href="index.css">


        <h1>CADASTRO</h1>

        <?php
session_start();
if(isset($_SESSION['logado'])){
    header("location: processa.php");
    die();
}








$_SESSION['logado'] = true;


        ?>

        <form action="processa.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="nome" required>
          
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          
            <label for="password">Senha:</label>
            <input type="password" id="password" name="senha" required>
          
            <label for="password_confirmation">Confirme sua senha:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
          
            <input type="submit" name="cadastro" value="Cadastrar">
          </form>


          

    </body>
</html>