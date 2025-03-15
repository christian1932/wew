<?php

session_start();

require '../../dbcon.php';

if(isset($_POST['adminLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE AdminId = '$username' and Password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header("Location: wew.php");
    }
    else{
        echo '<script>
            window.location.href = "login.php";
            alert("Login failed. Invalid Admin Id or Password")
            </script>';
    }
}


if(isset($_POST['staffLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM staffs WHERE StaffId = '$username' and Password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header("Location: wew.php");
    }
    else{
        echo '<script>
            window.location.href = "login.php";
            alert("Login failed. Invalid Staff Id or Password")
            </script>';
    }

}




$conn->close();

?>