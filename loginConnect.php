<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','wt') or die("Connection Failed");

        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];


            $sql = "INSERT INTO `login` ( `username` , `password`)  VALUES ('$username','$password')";
            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successful";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>