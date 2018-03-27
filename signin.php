<?php
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $email = filter_input(INPUT_GET, 'idemail');
    $password = filter_input(INPUT_GET, 'idpassword');

//    if (!$email) {
//        echo '<div class="alert alert-danger" role="alert">';
//        echo 'Email can not be epty!';
//        echo '</div>';
//        //die();
//    } else if (!$password) {
//        echo '<div class="alert alert-danger" role="alert">';
//        echo 'Password can not be epty!';
//        echo '</div>';
//        //die();
//    }

    if (!empty($email) && !empty($password)) {
        echo "Reading file registered_users.json";
        //Get json string from file
        $string = file_get_contents("registered_users.json");
        echo $string . "<br/>";
        $users = json_decode($string, true);

        foreach ($users as $user) {
            if ($user['email'] == $email) {
                $_SESSION['user'] = $user['name'];
                break;
            }
        }

        header('Location: index.php');
    }
    //echo var_dump($users);
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <form action="signin.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="idemail" name="idemail" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="idpassword" name="idpassword" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </body>
</html>
