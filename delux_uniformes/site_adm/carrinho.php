<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Documentation -->
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- W3schools -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FavIcon -->
    <link rel="shortcut icon" href="./conteudos/imagens/icons/atual/carrinho.ico" type="image/x-icon">

    <title>Envie aqui sua compra</title>

    <style>
        * {
            font-family: 'sans-serif';
            /* Tahoma, Geneva, Verdana, sans-serif, Segoe UI */
        }


        .position-carrinho {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }



    .form_carrinho {
      background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);     
      padding: 20px;
      border-radius: 8px;
      width: 450px;
    }
  
    </style>
</head>

<?php include("./includes/heade-adm.php");?>

<body>
    <div class="position-carrinho">
        <h1>Carrinho de Compras</h1>

       <?php if (!empty($_SESSION['carrinho'])) : ?>
            <form class="form_carrinho" method="post">
                <?php foreach ($_SESSION['carrinho'] as $produto) : ?>
                    <div class="mb-3">
                        <label for="produto" class="form-label">Nome do Produto:</label>
                        <input type="text" class="form-control" id="produto" name="descricao[]" value="<?= $produto['descricao'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade:</label>
                        <input type="number" class="form-control" id="quantidade" name="quantidade[]" value="<?= $produto['quantidade'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço:</label>
                        <input type="number" class="form-control" id="preco" name="preco[]" value="<?= $produto['preco'] ?>" step="0.01" readonly>
                    </div>
                <?php endforeach; ?>

                <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
            </form>

            <a href="?action=fazer_pedido" class="btn btn-success">Fazer Pedido</a>
        <?php else : ?>
            <p>O carrinho está vazio.</p>
        <?php endif; ?>
    </div>

    <?php include("../site/includes/footer.php");?>
</body>

</html>
