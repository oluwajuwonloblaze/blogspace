<?php
$username = '';
$password = '';
$email= '';
$priv = '';
?>
<form action="form.php" method = "POST">
    <label for="username">username</label>
    <input type="text" name = "username" value ="<?php echo $username ?>" ><br><br>  
    <label for="password">password</label>
    <input type="text" name = "password" value = "<?php echo $password ?>"><br><br>
    <label for="priv">priviledge</label>
    <input type="text" name = "priv" value = "<?php echo $priv ?>" ><br><br>
    <label for="priv">email</label>
    <input type="text" name = "email" value =  "<?php echo $email ?>"><br><br>
    <input type="submit" name = "submit">
    <input type="submit" name = "read" value = "read">
</form>
<?php
include 'database.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $priv = $_POST['priv'];

    $a = new db;
    $sqlquery = "INSERT INTO users_table(username, password,email,priv) VALUES('$username', '$password','$email','$priv')";
    $a->insert($con, $sqlquery);
}
   ?>

   <?php
'include database.php';
if (isset($_POST['read'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $priv = $_POST['priv'];

    $a = new db;
 $sqlquery = "SELECT * FROM users_table";
 $read =mysqli_query($con,$sqlquery);
 if (mysqli_num_rows($read) > 0) {
 ?>
<?php while ($row = mysqli_fetch_array($read))  {   
    ?>
    <table>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>priviledge</th>
        <th>action</th>
    <tr>
    </tr>
    <tr>
    <td><?php  echo $row['id'];?></td>
    <td><?php  echo $row['username'];?></td>
    <td><?php  echo $row['password'];?></td>
    <td><?php  echo $row['priv'];?></td>
    <td> <a href="delete.php"  <?php echo $row['id']; ?>>edit
    </a>  
  <a href="delete.php"  <?php echo $row['id']; ?>> delete</a> 
  </td>
 </tr>
    </table>
    <?php }}} ?>
    