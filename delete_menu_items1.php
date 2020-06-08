<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "DELETE FROM MENU WHERE M_ID in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error());

header('Location: delete_menu_items.php');
$conn->close();


?>