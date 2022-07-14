<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$validado = FALSE;
if( isset( $_POST['txtNome'])){
    $txtnome = strtoupper( $_POST['txtNome']);
    $validado = TRUE;
}
if( isset( $_POST['txtEmail'])){
    $email = strtoupper( $_POST['txtEmail']);
    $validado = TRUE;
}
if( isset( $_POST['txtTelefone'])){
    $telefone = strtoupper( $_POST['txtTelefone']);
    $validado = TRUE;
}
if( isset( $_POST['txtMensagem'])){
    $mensagem = strtoupper( $_POST['txtMensagem']);
    $validado = TRUE;
}
if( $validado === TRUE){
    echo $txtnome.'<br>';
    echo $email.'<br>';
    echo $telefone.'<br>';
    echo $mensagem.'<br>';
}
?>

<h1>Contato</h1>



<form action="./contato.php" method="post">
    <ul>
        <li>
        <label for="txtNome">Nome Completo</label>
        <input type="text" name="txtNome" id="txtNome">
        </li>

        <li>
        <label for="txtEmail">Email</label>
        <input type="text" name="txtEmail" id="txtEmail">
        </li>
        
        <li>
        <label for="txtTelefone">Telefone</label>
        <input type="text" name="txtTelefone" id="txtTelefone">
        </li>

        <li>
        <label for="txtMensagem">Mensagem</label> <br>
        <input id="mensagem" type="text" name="txtMensagem" id="txtMensagem">
        </li>

    </ul>
    <input type="submit" value="Cadastrar">
</form>

<?php
// include do footer
include_once './includes/_footer.php';
?>