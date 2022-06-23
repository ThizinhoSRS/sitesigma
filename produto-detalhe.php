<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
$id = $_GET['id'];
$tipo = $_GET['tipo'];
?>
<div class="container">
    <div class="row">
        <div class="col">
    <h1>Produto Detalhe</h1>
</div>
            <div id="detalhe" class="container">
                <div id="produto-detalhe">
            <h1><?php echo $produtos[$id]['nome'];?>
            <img id="img-animal" src="./content/<?php echo $produtos[$id]['imagem'];?>" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text"><?php echo $produtos[$id]['descricao'];?></p>
            <h4>R$ <?php echo $produtos[$id]['preco'];?></h4></div>
        </div>
    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>