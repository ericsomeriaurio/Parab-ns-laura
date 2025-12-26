<?php
if(isset($_POST['enviar'])){
    file_put_contents("comando.txt", $_POST['mensagem']);
    echo "<p>Comando enviado para o Bot Zin!</p>";
}
?>
<form method="post">
    <input type="text" name="mensagem" placeholder="O que o bot deve dizer?">
    <button type="submit" name="enviar">Mandar para o Facebook</button>
</form>
