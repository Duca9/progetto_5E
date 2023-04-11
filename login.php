<?php
    require './db_connect.php';

    $uname=$_POST['username'];
    $psw=$_POST['password'];

    $query = "SELECT id,username,password FROM users";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($uname == $row["username"] && $psw == $row["password"]) {
                header('Location:'  .'http://ec2-54-90-239-18.compute-1.amazonaws.com/progetto/risultati.html');
            }
        }
    }else{
        header('Location:'  .'http://ec2-54-90-239-18.compute-1.amazonaws.com/progetto/login.html');
    }
    $conn->close();
?>