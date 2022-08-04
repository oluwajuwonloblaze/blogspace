<?php
$username ='';
$password = '';
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

$a = new db;
$sqlquery = "SELECT * FROM users_table  WHERE username = '$username'";
$read = mysqli_query($con, $sqlquery);
if ((mysqli_num_rows($read) > 0)) {
echo 'exists';
}
else {
  echo 'errors';
}
}
?>

<form action="signin.php">
    <label for="username">username</label>
    <input type="text"  name = "username"  value = "<?php  echo $username  ?>">
    <label for="username">password</label>
    <input type="text"   name = "password"   value = "<?php  echo $password  ?>">
    <input type="submit" value = "submit" name = "submit ">
</form>