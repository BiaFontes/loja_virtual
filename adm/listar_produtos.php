<?php

try {

    include 'C:\xampp\htdocs\loja_virtual\adm\ProdutosDAO.php';

    $produtos_dao = new ProdutosDAO();

    $lista_produtos = $produtos_dao->getAllRows();

    $total_produtos = count($lista_produtos);


} catch(Exception $e) {

    echo $e->getMessage();
}
?>

<html>
    <head>
        <title>Sistema</title>
    </head>
    <body>
        <a href="./index.php"><button type="button" class="btn btn-block btn-primary">Página inicial</button></a>
        <a href="./cadastrar_produtos.php"><button type="button" class="btn btn-block btn-primary">Cadastrar produtos</button></a>
       
        <?php include 'C:\xampp\htdocs\loja_virtual\adm\header.php' ?>

        <main>
            <table>
                <thead>
                    <tr>
                        <th style="font-family: Arial;"><b>Ações</b></th>
                        <th style="font-family: Arial;"><b>Id</b></th>
                        <td style="font-family: Arial;"><b>Nome:</b></th>
                        <td style="font-family: Arial;"><b>Valor:</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $i<$total_produtos; $i++): ?>
                    <tr>
                        <td> 
                            <a href="cadastrar_produtos.php?id_prod=<?= $lista_produtos[$i]->id_prod ?>">
                                Abrir
                            </a> 
                        </td>
                        <td> <?= $lista_produtos[$i]->id_prod ?> </td>
                        <td> <?= $lista_produtos[$i]->nome  ?> </td>
                        <td> <?= $lista_produtos[$i]->valor  ?> </td>
                    </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </main>

        <?php include 'C:\xampp\htdocs\loja_virtual\adm\footer.php' ?>

    </body>
</html>