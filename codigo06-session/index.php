<?php
    session_start();

    if (isset($_POST['nome'])){
        $_SESSION['nome'] = $_POST['nome'];
    }
?>

<form method="POST">
    <label>Digite seu nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<?php
    if (isset($_SESSION['nome'])){
        echo "<p>Olá " . $_SESSION['nome'] . "! Seja bem-vindo de volta.</p>";
    }
?>