<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: login.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<link rel="stylesheet"
href="css/style.css">

</head>

<body>

<header>

<div class="logo">

<h2>AH Repair Center</h2>

</div>

<nav>

<ul>

<li>
<a href="request.html">
Nouvelle Demande
</a>
</li>

<li>
<a href="logout.php">
Déconnexion
</a>
</li>

</ul>

</nav>

</header>

<section class="dashboard">

<h1>

Bienvenue

<?php

echo $_SESSION['name'];

?>

</h1>

<p>

Vous pouvez créer une nouvelle
demande de réparation.

</p>

<a
href="request.html"
class="btn">

Nouvelle Demande

</a>

</section>

</body>

</html>