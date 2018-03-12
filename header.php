<?php
session_start();
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container-fluid" style="margin-bottom: 15px">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">MyStore</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="electronics.php">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clothes.php">Clothes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shoes.php">Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Other</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="signin.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 10px;">Sign In</a>
                        <a href="signout.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="margin-right: 10px;">Sign Out</a>
                        <button type="button" class="btn btn-link"><?php if (isset($_SESSION['user'])) echo "Welcome " . $_SESSION['user']; ?></button>
                </div>


        </div>

    </body>
</html>
