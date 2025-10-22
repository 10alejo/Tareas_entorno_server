// adivina.php
<?php
session_start();
if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = rand(1, 20);
    $_SESSION['intentos'] = 5;
}
if (isset($_POST['nuevo'])) {
    session_destroy();
    header('Location: adivina.php');
    exit;
}
$mensaje = '';
if (isset($_POST['valor']) && $_SESSION['intentos'] > 0) {
    $_SESSION['intentos']--;
    if ($_POST['valor'] == $_SESSION['numero']) {
        $mensaje = "¡Has acertado!";
        $_SESSION['intentos'] = 0;
    } elseif ($_POST['valor'] < $_SESSION['numero']) {
        $mensaje = "El número es mayor.";
    } else {
        $mensaje = "El número es menor.";
    }
}
?>
<html>
<head><meta charset="UTF-8"><title>Adivina</title></head>
<body><center>
<h2>Adivina un número entre 1 y 20</h2>
<p>Intentos restantes: <?php echo $_SESSION['intentos']; ?></p>
<p><?php echo $mensaje; ?></p>
<?php if ($_SESSION['intentos'] > 0): ?>
<form method="post">
<input type="number" name="valor" min="1" max="20" required>
<button type="submit">Probar</button>
</form>
<?php endif; ?>
<form method="post"><button name="nuevo">Nueva partida</button></form>
</center></body></html>
