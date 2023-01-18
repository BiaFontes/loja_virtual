<a href="./cadastrar_produtos.php"><button type="button" class="btn btn-block btn-primary">Cadastro de produtos</button></a>
<a href="./listar_produtos.php"><button type="button" class="btn btn-block btn-primary">Lista de produtos</button></a>
<a href="./logout.php"><button type="button" class="btn btn-block btn-primary">Logout</button></a>
<?php

include("./function.php");

validaSessao();

include("./header.php");

echo "Conta logada!<br>Conta: ".$_SESSION["CONTA_ID_ADM"];

include("./footer.php");

?>