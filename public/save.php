<?php
/*
$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage) . "\n";

header('Location: admin.php');
*/

echo "Nom: " . $_POST["name"] . "<br>";
echo "Prénom: " . $_POST["firstName"] . "<br>";
echo "Age: " . $_POST["age"] . "<br>";
echo "Email: " . $_POST["email"] . "<br>";
echo "Mot de passe: " . $_POST["password"] . "<br>";
echo "Confirmer mot de passe: " . $_POST["password-repeat"] . "<br>";

header('location: admin.php?success=1');


