<?php
session_start();
if(!isset($_SESSION['logado'])){
    header("index.php");
    session_destroy();
}



//abrindoconexao com banco
$identifica = mysql_connect("localhost", "root", "");
$cnx = mysql_select_db("cadastros", $identifica);

//DECLARAÇÃO DE VARIÁVEIS
$nome =  $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$csenha = $_POST['password_confirmation'];



$identifica = mysql_connect("localhost", "root", "");
$cnx = mysql_select_db("cadastros", $identifica);


$sql = "INSERT into cadastros(nome, email, senha, confirma_senha)
 values ('$nome' , '$email' , '$senha' , '$csenha')";

 mysql_query($sql);
 mysql_close($identifica);

//teste do banco de dados

header ("index.php"); 


echo "<center><h1><p>Logado</h1></center>";
echo  "<h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus totam sunt, illum et ipsum reiciendis soluta nam, eum iste ipsa ducimus doloremque assumenda at! Nam nostrum maxime id recusandae?</h2>"



?>