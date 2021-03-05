<?php 
//Criando tabela e cabeçalho de dados:
echo "<center><table border=2></center>";
echo "<tr>";
echo "<th> boeder=4>ID</th>";
echo "<th>Nome</th>";
echo "<th>E-mail</th>";
echo"</tr>";

//Conectando ao Banco de Dados:
$strcon =mysqli_connect('localhost','root','','teste') or die('Erro ao conectar ao banco ');
$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($strcon,$sql) or die("Erro ao tentar cadastro");
//Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado))
{
    $id = $registro['id'];
    $nome = $registro['nome'];
    $email = $registro['email'];
    echo"<tr>";
    echo"<td>".$id."</td>";
    echo"td".$nome."</td>";
    echo"td".$email."</td>";
    echo"</tr>";
}
mysqli_close($strcon);
echo"</table>";
?>
