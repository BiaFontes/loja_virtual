<a href="./produtos.php"><button type="button" class="btn btn-block btn-primary">Produtos</button></a>
<a href="./carrinho.php"><button type="button" class="btn btn-block btn-primary">Carrinho</button></a>
<a href="./logout.php"><button type="button" class="btn btn-block btn-primary">Logout</button></a>

<?php
include("./function.php");

validaSessao();

include("./header.php");

echo "Conta logada!<br>Conta: ".$_SESSION["CONTA_ID_USU"];

include("./footer.php");

?>