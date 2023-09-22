<?php
session_start();
            require(__DIR__.'/class/db.php');
              if(isset($_POST['cast1']))
              {
              
                $maddx=$_POST['cast1'];
              
                $maddx1=$_POST['cast21'];
               
                $maddx2=$_POST['cast22'];
                
                $maddx3=$_POST['SUDDHAJADHAGAMON'];
                $maddx4=$_POST['regn23'];


                $aa2=$connect->prepare("select * from client where email='$maddx3'");
                $aa2->execute();
                $aa3=$aa2->rowCount();
                if($aa3>0)
                {
                    print "al";
                } 
                else{
                  $jjji=$connect->prepare("UPDATE client SET dob='$maddx',religion='$maddx1',mt='$maddx2',email='$maddx3',pass='$maddx4' where identity='$_SESSION[aaa]'");
                  $jjji->execute();
                  print "s";
                }
              }
              
              if(isset($_POST['cast11']))
              {
              
                $maddx11=$_POST['cast11'];
              
                $maddx111=$_POST['cast211'];
               
                $maddx21=$_POST['cast221'];
                
                $maddx31=$_POST['okok'];  

                $dosam=$_POST['dosa'];


                $naz=$connect->prepare("UPDATE client SET caste='$maddx11',intercaste='$maddx111',Subcaste='$maddx21',Suddhajadhagam='$maddx31',Dosham='$dosam',Doshams='' where identity='$_SESSION[aaa]'");
                  $naz->execute();
                /* $naz=$connect->prepare("INSERT INTO tekinfo1 values('','$maddx11','$maddx111','$maddx21','$maddx31','','')");
                  $naz->execute(); */
                  print "success";
              }            
?> 