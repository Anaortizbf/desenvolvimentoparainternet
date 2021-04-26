<?php
//exibir.php
include "conexao.php";
$resultado=mysqli_query($conecta, "SELECT * FROM cliente");
echo "<table>";
while ($linha=mysqli_fetch_assoc($resultado)){
  echo "<tr>";
  echo "<td>".$linha['codigo']."</td>";
  echo "<td>".$linha['nome']."</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conecta);
?>
