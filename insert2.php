<?php
session_start();
include('class/db.php');
if(isset($_POST['f109']))
{
    $f109 = $_POST['f109'];
    $f110 = $_POST['f110'];
    $f111 = $_POST['f111'];
    $f112 = $_POST['f112'];
    $f113 = $_POST['f113'];
    $f114 = $_POST['f114'];
    $f115 = $_POST['f115'];
    $f116 = $_POST['f116'];

    
    $abcc=$connect->prepare("UPDATE client SET highest_education='$f109',education_detail='$f110',empoyed_in='$f111',occupation='$f112',salary_currency_type='$f113',salary_amount='$f114', work_location='$f115', state='$f116' where identity='$_SESSION[aaa]'");
    $abcc->execute();

    echo "Data received successfully!";
} else {
    echo "Data not received.";
}
?>