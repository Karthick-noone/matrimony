<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/style_pic.css">

<style>
    .a1{
    height: 500px;  margin-top: 100px;
    background-image: url(image/img_9/marriage.jpg);
    background-color: hsla(0, 0%, 0%,.452);
                               
}

#uploadedImage{
    width: 170px; height: 170px;  margin-left: 80px ;background-image: url(image/img_9/upld_here.png);
    background-size: cover;background-color: rgb(149, 161, 149); 
    border-radius: 50%;box-shadow: 10px 10px 5px rgb(95, 104, 107);
}
</style>
</head>
<body>
    
    <?php
  require(__DIR__.'/class/db.php')
?>

<?php
$email=$_SESSION['user'];
$sss=$connect->prepare("select * from client where email='$email'");
$sss->execute();
$ppp=$sss->fetch();
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-12 bg-success a1">
                
                <div class="row">
                    <div class="col-lg-8 col-xl-8 bg-white a2">

                        <div class="row">
                            <div class="col-lg-12 col-xl-12  text-success a3"><h2><center>Add your photo and get much more responses!!</center></h2></div>
                            <div class="col-lg-6 col-xl-6 a4"><img  id="uploadedImage"></div>
                            <div class="col-lg-6 col-xl-6 a5">
                                <form  method="POST" enctype="multipart/form-data">
                                <input type="file" name="stud_pic" id="imageInput">
                                <input type="submit" id="a1" value="upload" name="submit">     
                                </form>

                               
                                <?php
                                if(isset($_POST['submit'])){

                                    if($_FILES['stud_pic']['error']>0)
                                    {
                                        $stud_pic="";
                                    }
                                    else
                                    {
                                        $stud_pic=$_FILES['stud_pic']['name'];
                                        move_uploaded_file($_FILES['stud_pic']['tmp_name'],'image/uploaded/'.$stud_pic);

                                        /* $aaa=$connect->prepare("insert into client values('','$stud_pic')"); 
                                        $aaa->execute(); */

                      $aaa=$connect->prepare("UPDATE client SET image='$stud_pic' where email='$_SESSION[user]'");
                                        $aaa->execute();
                                        ?>
                                        <script>
                                            alert ("successfully uploaded!!");
                                            window.location.href="index2.php";
                                        </script>
                                        <?php 
                                         
                                    }
                                }
                            
                                ?>                           
                                <w class="li_flex"><li >with in 15 MB of size</li><li>jpg / gif / png / bmp</li>  </w></div>
                            <div class="col-lg-6 col-xl-6 a6">
                                 <img src="image/img_9/whatsapp.png" height="30px" width="40px" alt="">
                                <p> Whatsapp your photos to 
                                    <b>+919878987865</b> & we will upload 
                                    them instantly.</p> </div>
                            <div class="col-lg-6 col-xl-6 a7">
                                <img src="image/img_9/facebook.png"height="30px" width="40px" alt="">
                        <p><b><span style="color: rgb(11, 114, 155); font-size: 11px;">Select Photos</span></b> from your Facebook account and upload.<span style="color: rgb(126, 118, 118);">(we'll naver post anythig on your wall)</span></p>
                            </div>
                        </div>
                    </div>
                 
                </div>
            
            </div>

           
        </div>
    </div>
    <script src="js/photoupld.js"></script>
</body>
</html>