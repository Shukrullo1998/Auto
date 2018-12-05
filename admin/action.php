<?php
include "../db/db.php";
// admin qoshish
if(isset($_POST['create_admin'])){
    $name=$_POST['name'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $password_hash=sha1($password);
    $sql="insert into admin(name,login,password) values('".$name."','".$login."','".$password_hash."')";
    $query=mysqli_query($con,$sql);
    if($query){
        header("location:admin.php");
    }
}