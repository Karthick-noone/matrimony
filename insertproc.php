<?php
session_start();

  require(__DIR__.'/class/db.php');
  if(isset($_POST['prf1']))
  {
          $nwww1=$_POST['prf1'];
          $nwww2=$_POST['gen1'];
          $nwww3=$_POST['nm1'];
          $nwww4=$_POST['reg1'];

          $randstr=substr(str_shuffle('123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0,6);
          $_SESSION['aaa']=$randstr;
 
         /*  $aa2=$connect->prepare("select * from client where name='$nwww3'");
          $aa2->execute();
          $aa3=$aa2->rowCount();
          if($aa3>0){
              ?>
              <script>
                  alert("Invalid name please enter fullname!");
              </script>
              <?php
              } */
   
          $newww=$connect->prepare("INSERT INTO client VALUES ('','$nwww1','$nwww2','$nwww3','$nwww4','2013-08-05','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','$randstr')");
          $newww->execute();
        
 
  }
  ?>