<?php

session_start();

include 'config.php';

$email =
mysqli_real_escape_string(
$conn,
$_POST['email']
);

$password =
$_POST['password'];

$sql =
mysqli_query(
$conn,
"SELECT * FROM users
WHERE email='$email'"
);

if(mysqli_num_rows($sql) == 1){

$user =
mysqli_fetch_assoc($sql);

if(
password_verify(
$password,
$user['password']
)
){

$_SESSION['id']
=
$user['id'];

$_SESSION['name']
=
$user['fullname'];

$_SESSION['role']
=
$user['role'];

header(
"Location: dashboard.php"
);

}else{

echo "Mot de passe incorrect";

}

}else{

echo "Utilisateur introuvable";

}

?>