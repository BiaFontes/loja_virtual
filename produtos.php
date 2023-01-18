<html>

<head>
    <title>Bem-vindo ao Bimi Donuts!!!</title>
</head>

<body>
    <a href="./pag_inicial.php"><button type="button" class="btn btn-block btn-primary">Página inicial</button></a>
    <a href="./carrinho.php"><button type="button" class="btn btn-block btn-primary">Carrinho</button></a><br>
    <h2 style="font-family: Arial; color: #20B2AA">Produtos</h2>
    <?php
    $link = mysqli_connect("localhost", "root", "", "loja_virtual");
    $sql = "SELECT * FROM produtos ORDER BY nome";
    $result = mysqli_query($link, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo 'Nome: '. $row["nome"] . "<br>" . 'Valor: ' . $row["valor"] . "<br>" ." <a href=\"./carrinho.php?a=" . $row["id_prod"] . "\"> ADICIONE </a><br><br>";
        }
    }
    ?>
</body>

</html>