
<?php
session_start();
if (isset($_GET['nuevatarjeta'])) {
    $_SESSION['tarjeta'] = $_GET['nuevatarjeta'];
    header('Location: pagosesion.php');
    exit;
}
$tarjeta = isset($_SESSION['tarjeta']) ? $_SESSION['tarjeta'] : '';
?>
<html>
<head><meta charset="UTF-8"><title>Forma de pago</title></head>
<body><center>
<?php
if ($tarjeta == '') {
    echo "<h2>NO TIENE FORMA DE PAGO ASIGNADA</h2><br>";
    echo "<h2>SELECCIONE UNA TARJETA DE CREDITO</h2><br>";
} else {
    echo "<h2>SU FORMA DE PAGO ACTUAL ES</h2><br>";
    echo "<img src='imagenestarjetas/$tarjeta.gif'><br>";
    echo "<h2>SELECCIONE UNA NUEVA TARJETA DE CREDITO</h2><br>";
}
?>
<a href='?nuevatarjeta=cashu'><img src='imagenestarjetas/cashu.gif'></a>&ensp;
<a href='?nuevatarjeta=cirrus1'><img src='imagenestarjetas/cirrus1.gif'></a>&ensp;
<a href='?nuevatarjeta=dinersclub'><img src='imagenestarjetas/dinersclub.gif'></a>&ensp;
<a href='?nuevatarjeta=mastercard1'><img src='imagenestarjetas/mastercard1.gif'></a>&ensp;
<a href='?nuevatarjeta=paypal'><img src='imagenestarjetas/paypal.gif'></a>&ensp;
<a href='?nuevatarjeta=visa1'><img src='imagenestarjetas/visa1.gif'></a>&ensp;
<a href='?nuevatarjeta=visa_electron'><img src='imagenestarjetas/visa_electron.gif'></a>
</center></body></html>
