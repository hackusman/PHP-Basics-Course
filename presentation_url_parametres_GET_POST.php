<!DOCTYPE html>
<html>
<head>
  <title>Page HTML</title>
</head>
<body>

<h1>Bienvenue</h1>

<?php
if (isset($_GET['nom']) && isset($_GET['prenom'])) {
        echo "Je m'appelle " . $_GET['nom'] . ' ' . $_GET['prenom'];
}
else {
        echo "Il faut renseigner le nom et le prénom";
}
?>

</body>
</html>
