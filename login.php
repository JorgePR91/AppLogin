
<?php 
$nomUsuari = $_POST['nom'];
$congnomsusuari = $_POST['cognoms'];
$contrasenya = $_POST['password'];
$correu = $_POST['email'];
echo "Formulari enviat!";
echo "Nom de l'usuari: " . htmlspecialchars($nomUsuari) . " " . htmlspecialchars($congnomsusuari) . "<br>";
echo "Contrasenya triada: " . htmlspecialchars($contrasenya); 
