<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Message sent successfully";
}else{

    echo "No connection";
}

mysqli_select_db($con,'dynamic');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "insert into website (name, email, subject, message)
values ('$name','$email', '$subject','$message') ";

mysqli_query($con,$query );



?> 