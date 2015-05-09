<!-- VALIDADOR DO FORMULARIO -->

<?php
$nome = $_POST ["nome"];
$senha = $_POST ["senha"];

echo $nome;
echo $senha . "<br />";

if ( $nome == "Thiago" && $senha == "12345678" )
{
echo "Usuario logado com sucesso";
}
else { header ("Location:aula9a.html");}
?>