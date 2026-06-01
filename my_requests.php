<?php

session_start();

include 'config.php';

if(!isset($_SESSION['id'])){
    header("Location: login.html");
    exit();
}

$user_id =
$_SESSION['id'];

$result =
mysqli_query(
$conn,
"SELECT * FROM repair_requests
WHERE user_id='$user_id'
ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Mes Demandes</title>

<link rel="stylesheet"
href="css/style.css">

</head>

<body>

<div class="container">

<h1>
Mes Demandes
</h1>

<table>

<tr>

<th>ID</th>

<th>Type</th>

<th>Modèle</th>

<th>Statut</th>

<th>Date</th>

</tr>

<?php

while(
$row =
mysqli_fetch_assoc($result)
){

?>

<tr>

<td>
<?php echo $row['id']; ?>
</td>

<td>
<?php echo $row['device_type']; ?>
</td>

<td>
<?php echo $row['device_model']; ?>
</td>

<td>
<?php echo $row['status']; ?>
</td>

<td>
<?php echo $row['created_at']; ?>
</td>

</tr>

<?php

}

?>

</table>

<br>

<a
href="dashboard.php"
class="btn">

Retour

</a>

</div>

</body>

</html>