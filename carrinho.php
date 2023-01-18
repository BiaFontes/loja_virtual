<?php
if (isset($_GET["a"])) {
    if ($_COOKIE["carrinho"]) {
        if (strpos($_COOKIE["carrinho"], "'" . $_GET["a"] . "'") === false) {
            setcookie(
                "carrinho",
                $_COOKIE["carrinho"] . ",'" . $_GET["a"] . "'",
                time() + 60 * 60 * 24 * 30
            );
        }
    } else {
        setcookie("carrinho", "'" . $_GET["a"] . "'", time() + 60 * 60 * 24 * 30);
    }
    header("Location: ./carrinho.php");
    exit;
} elseif (isset($_GET["r"])) {
    if ($_COOKIE["carrinho"]) {
        if (strpos($_COOKIE["carrinho"], "'" . $_GET["r"] . "'") !== false) {
            $carrinho = $_COOKIE["carrinho"];
            $carrinho = str_replace(",'" . $_GET["r"] . "',", ",", $carrinho);
            $carrinho = str_replace("'" . $_GET["r"] . "',", "", $carrinho);
            $carrinho = str_replace(",'" . $_GET["r"] . "'", "", $carrinho);
            $carrinho = str_replace("'" . $_GET["r"] . "'", "", $carrinho);
            setcookie("carrinho", $carrinho, time() + 60 * 60 * 24 * 30);
        }
    }
    header("Location: ./carrinho.php");
    exit;
}
?>

<html>

<head>
    <title>Carrinho de compra</title
</head>

<body>
    <a href="./pag_inicial.php"><button type="button" class="btn btn-block btn-primary">Pagina inicial</button></a>
    <a href="./produtos.php"><button type="button" class="btn btn-block btn-primary">Produtos</button></a><br>
    <h2 style="font-family: Arial; color: #20B2AA">Carrinho de compras</h2>
    <?php
    if (isset($_COOKIE["carrinho"])) {
        $link = mysqli_connect("localhost", "root", "", "loja_virtual");
        $sql = "SELECT * FROM produtos WHERE id_prod IN (" . $_COOKIE["carrinho"] . ") ORDER BY nome";
        $result = mysqli_query($link, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo 'Nome: '. $row["nome"] . "<br>" . 'Valor: ' . $row["valor"] . "<br>" . " <a href=\"./carrinho.php?r=" . $row["id_prod"] . "\"> REMOVA </a><br><br>";
            }
        }
    } else {
        echo "Sem produtos no carrinho carrinho.<br>";
    }

     
    ?>
   

   

    
</body>

</html>

   