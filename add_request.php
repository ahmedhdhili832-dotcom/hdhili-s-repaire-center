<?php

session_start();

include 'config.php';

if(!isset($_SESSION['id'])){
    header("Location: login.html");
    exit();
}

$user_id =
$_SESSION['id'];

$device_type =
mysqli_real_escape_string(
$conn,
$_POST['device_type']
);

$device_model =
mysqli_real_escape_string(
$conn,
$_POST['device_model']
);

$problem =
mysqli_real_escape_string(
$conn,
$_POST['problem']
);

$sql =
"INSERT INTO repair_requests
(
user_id,
device_type,
device_model,
problem
)
VALUES
(
'$user_id',
'$device_type',
'$device_model',
'$problem'
)";

if(mysqli_query($conn,$sql)){

header(
"Location: my_requests.php"
);

}else{

echo "Erreur";

}

?>