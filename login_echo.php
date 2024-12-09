
<?php 
$nomUsuari = $_POST['nom'];
$congnomsusuari = $_POST['cognoms'];
$contrasenya = $_POST['password'];
$correu = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Alta usuari</title>
</head>

<body>
    <h1>Formulari enviat!</h1><br>
<p>Nom de l'usuari: <?php echo $nomUsuari." ". $congnomsusuari; ?><br></p>
<p> Contrasenya triada: <?php echo  $contrasenya; ?> <br></p>
</body>
</html>