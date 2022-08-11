<?php
$username ='';
$password = '';
?>
<form action="signin.php">
    <label for="username">username</label>
    <input type="text"  name = "username"  value = "<?php  echo $username  ?>">
    <label for="username">password</label>
    <input type="text"   name = "password"   value = "<?php  echo $password  ?>">
    <input type="submit" value = "submit" name = "submit ">
</form>
