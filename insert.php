<?php
session_start();
  require(__DIR__.'/class/db.php');
  
  if(isset($_POST['username']) && isset($_POST['pasword']))
  {
    $uname=$_POST['username'];
    $psw=$_POST['pasword'];
    $aaa=$connect->prepare("SELECT * from client where email='$uname' and pass='$psw'");
    $aaa->execute();
    $bbb=$aaa->rowCount();
    if($bbb==1)
    {
      print "success";
    $_SESSION['use']="abcd";
    $_SESSION['user']=$uname; 
    }
    else
    {
     print "Invalid";
    }
  }
  


  if(isset($_POST['updateid']))
{
    $update=$_POST['updateid'];
    $newname=$_POST['newname'];
    $cont=$_POST['cont'];
    $reli=$_POST['reli'];
    $ste=$_POST['state'];
    $city=$_POST['city'];
    $employ=$_POST['employ'];
    $occu=$_POST['occu'];
    $slry=$_POST['slry'];
    /* $abt=$_POST['abt']; */
    $fmlysts=$_POST['fmlysts'];
    $fmlytyp=$_POST['fmlytyp'];
    $fmlyvlu=$_POST['fmlyvlu'];
    $cast=$_POST['caste'];
    $cd1=$connect->prepare("UPDATE client set name='$newname',height='$cont',religion='$reli',state='$ste',city='$city',empoyed_in='$employ',occupation='$occu',salary_amount='$slry',family_status='$fmlysts',family_type='$fmlytyp',family_values='$fmlyvlu',caste='$cast' where id='$update'");
    $cd1->execute();

    print "Updated Successfully";
}
?> 