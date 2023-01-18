<?php

if(isset($_GET['salvar']))
    {
        include 'ProdutosDAO.php';

        $produtos_dao = new ProdutosDAO();

        $dados_para_salvar= array(
            'nome' => $_POST["nome"],
            'valor' => $_POST["valor"],
        );

        if(isset($_POST['id_prod'])) {

            $dados_para_salvar['id_prod'] = $_POST["id_prod"];

            $produtos_dao->update($dados_para_salvar);

            echo "Atualizado.";

        } else {

            $produtos_dao->insert($dados_para_salvar);

            echo "Inserido.";
        }    
    }


    if(isset($_GET['excluir']))
    {
        include 'ProdutosDAO.php';

        $produtos_dao = new ProdutosDAO();

        $produtos_dao->delete($_GET['id_prod']);

        header("Location: listar_produtos.php");
    }



    if(isset($_GET['id_prod']))
    {
        include 'ProdutosDAO.php';

        $produtos_dao = new ProdutosDAO();

        $dados_produtos = $produtos_dao->getById_prod($_GET['id_prod']);
    }

?>
<html lang="pt-br">
    <head>
        <title>CADASTRAR PRODUTOS</title>
        <meta charset="utf8" />
            <a href="./index.php"><button type="button" class="btn btn-block btn-primary">Página inicial</button></a>
            <a href="./listar_produtos.php"><button type="button" class="btn btn-block btn-primary">Lista de produtos</button></a>
    </head>
    <body>
        <div id_prod="global">
            
            <?php include 'C:\xampp\htdocs\loja_virtual\adm\header.php' ?>

            <main>
                

                <form method="post" action="cadastrar_produtos.php?salvar=true">
                    
                    <label>Nome da produto:
                        <input name="nome" value="<?= isset($dados_produtos) ? $dados_produtos->nome : "" ?>" type="text" />
                    </label>
                    <br><br>
                    <label>Valor do produto:
                        <input name="valor" value="<?= isset($dados_produtos) ? $dados_produtos->valor : "" ?>" type="text" />
                    </label>

                    <?php if(isset($dados_produtos)): ?>
                        <input name="id_prod" type="hidden" value="<?= $dados_produtos->id_prod ?>" />

                        <a href="cadastrar_produtos.php?excluir=true&id_prod=<?= $dados_produtos->id_prod ?>">
                            EXCLUIR
                        </a>

                    <?php endif ?>
                    <br><br>
                    <button type="submit">Salvar</button>
                </form>
            </main>

             <?php include 'C:\xampp\htdocs\loja_virtual\adm\footer.php' ?>
             
        </div>
    </body>
</html>