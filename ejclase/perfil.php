<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['orden'] == 'Confirmar') {
        setcookie('edad', $_POST['edad'], time() + 604800);
        setcookie('genero', $_POST['genero'] ?? '', time() + 604800);
        setcookie('deportes', serialize($_POST['deportes'] ?? []), time() + 604800);
    } elseif ($_POST['orden'] == 'Eliminar') {
        setcookie('edad', '', time() - 3600);
        setcookie('genero', '', time() - 3600);
        setcookie('deportes', '', time() - 3600);
    }
    header('Location: perfil.php');
    exit;
}
$edad = $_COOKIE['edad'] ?? '';
$genero = $_COOKIE['genero'] ?? '';
$deportes = isset($_COOKIE['deportes']) ? unserialize($_COOKIE['deportes']) : [];
?>
<html>
<head><meta charset="UTF-8"><link href="default.css" rel="stylesheet" type="text/css" /></head>
<body>
<div id="container" style="width: 380px;">
<div id="header"><h1>SUS DATOS ALMACENADOS</h1></div>
<div id="content">
<fieldset>
<form method="post">
<label>Edad</label> <input type="number" name="edad" value="<?php echo $edad; ?>"><br>
Género:<br>
<label>Mujer</label> <input type="radio" name="genero" value="Mujer" <?php if($genero=="Mujer") echo "checked"; ?>>
<label>Hombre</label> <input type="radio" name="genero" value="Hombre" <?php if($genero=="Hombre") echo "checked"; ?>><br>
<label>Deportes</label><br>
<select name="deportes[]" multiple="multiple" size="3">
<?php foreach(["Futbol","Tenis","Ciclismo","Otro"] as $d): ?>
<option value="<?php echo $d; ?>" <?php if(in_array($d,$deportes)) echo "selected"; ?>><?php echo $d; ?></option>
<?php endforeach; ?>
</select><br>
<button name="orden" value="Confirmar">Almacenar valores</button>
<button name="orden" value="Eliminar">Eliminar valores</button>
</form>
</fieldset>
</div></div>
</body></html>
