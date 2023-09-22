<?php
session_start();
include('class/db.php');
if(isset($_POST['abc']))
{
    $f101 = $_POST['abc'];
    $f102 = $_POST['f102'];
    $f103 = $_POST['f103'];
    $f104 = $_POST['f104'];
    $f105 = $_POST['f105'];
    $f106 = $_POST['f106'];
    $f107 = $_POST['f107'];
    $f108 = $_POST['f108'];

    
   //$abcc=$connect->prepare("insert into tek_matri values('','$f101','$f102','$f103','$f104','$f105','$f106','$f107','$f108')");

   $abcc=$connect->prepare("UPDATE client SET marital_status='$f101',no_of_children='$f102',children_live_with='$f103',height='$f104',family_status='$f105',family_type='$f106',family_values='$f107', any_disability='$f108' where identity='$_SESSION[aaa]'");
   $abcc->execute();

    echo "Data received successfully!";
} else {
    echo "Data not received.";
}
?>
