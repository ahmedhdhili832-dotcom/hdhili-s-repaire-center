<?php

include 'config.php';

$fullname =
mysqli_real_escape_string(
$conn,
$_POST['fullname']
);

$email =
mysqli_real_escape_string(
$conn,
$_POST['email']
);

$phone =
mysqli_real_escape_string(
$conn,
$_POST['phone']
);

$password =
password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$check =
mysqli_query(
$conn,
"SELECT * FROM users
WHERE email='$email'"
);

if(mysqli_num_rows($check) > 0){

echo "Email déjà utilisé";

exit();

}

$sql =
"INSERT INTO users
(
fullname,
email,
phone,
password
)
VALUES
(
'$fullname',
'$email',
'$phone',
'$password'
)";

if(mysqli_query($conn,$sql)){

header("Location: login.html");

}else{

echo "Erreur d'inscription";

}

?>