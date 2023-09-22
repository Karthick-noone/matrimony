<?php  
session_start();
?>
<?php
if(!isset($_SESSION['ddd'])){
?>
<script>
  window.location.href="index.php";
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
      td{
        border:1px solid;
      }
      th{
        border:1px solid;
      }
      
      
    </style>
</head>
<body>
<?php
if(!isset($_SESSION['ddd']))
?>
<nav class="navbar navbar-expand-lg bg-primary" style="width:295%">
  <div class="container-fluid ">
    <img src="image/img_2/teklogo.png" style="height:70px" alt="error">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
      <a href="index.php?id=lgt"><button type=button style="margin-left:3600px" class="btn btn-md btn-danger text-light ml-3">Logout</button></a>
    </div>
  </div>
</nav><br>
<table class="table table-border-dark">
<thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">fore </th> 
                    <th scope="col">gender</th>
                    <th scope="col">name</th>
                    <th scope="col">number</th>
                    <th scope="col">dob</th>
                    <th scope="col">religion</th>
                    <th scope="col">mt</th>
                    <th scope="col">email </th>
                    <th scope="col">pass</th>
                    <th scope="col">caste</th>
                    <th scope="col">intercaste</th>
                    <th scope="col">Subcaste</th>
                    <th scope="col">Suddhajadhagam</th>
                    <th scope="col">Dosham</th>
                    <th scope="col">Doshams</th>
                    <th scope="col">marital_status</th>
                    <th scope="col">no_of_children</th>
                    <th scope="col">children_live_with</th>
                    <th scope="col">height</th>
                    <th scope="col">family_status</th>
                    <th scope="col">family_type</th>
                    <th scope="col">family_values	</th>
                    <th scope="col">any_disability</th>
                    <th scope="col">highest_education</th>
                    <th scope="col">education_detail</th>
                    <th scope="col">empoyed_in</th>
                    <th scope="col">occupation</th>
                    <th scope="col">salary_currency_type</th>
                    <th scope="col">salary_amount</th>
                    <th scope="col">work_location</th>
                    <th scope="col">state</th>
                    <th scope="col">city</th>
                    <th scope="col">about</th>
                    <th scope="col">image</th>
                    <th scope="col">admin_mail</th>
                    <th scope="col">admin_pass</th>
                    <th scope="col">identity</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
require(__DIR__."/class/db.php");
$ddd=$connect->prepare("select * from client ");
$ddd->execute();
$fff=$ddd->fetchAll();
$sl=0;
foreach($fff as $data)
{
    $sl++;
?>
<tr>
<td><?php print $sl;?></td>
<td><?php print $data['fore'];?></td>
<td><?php print $data['gender'];?></td>
<td><?php print $data['name'];?></td>
<td><?php print $data['number'];?></td>
<td><?php print $data['dob'];?></td>
<td><?php print $data['religion'];?></td>
<td><?php print $data['mt'];?></td>
<td><?php print $data['email'];?></td>
<td><?php print $data['pass'];?></td>
<td><?php print $data['caste'];?></td>
<td><?php print $data['intercaste'];?></td>
<td><?php print $data['Subcaste'];?></td>
<td><?php print $data['Suddhajadhagam'];?></td>
<td><?php print $data['Dosham'];?></td>
<td><?php print $data['Doshams'];?></td>
<td><?php print $data['marital_status'];?></td>
<td><?php print $data['no_of_children'];?></td>
<td><?php print $data['children_live_with'];?></td>
<td><?php print $data['height'];?></td>
<td><?php print $data['family_status'];?></td>
<td><?php print $data['family_type'];?></td>
<td><?php print $data['family_values'];?></td>
<td><?php print $data['any_disability'];?></td>
<td><?php print $data['highest_education'];?></td>
<td><?php print $data['education_detail'];?></td>
<td><?php print $data['empoyed_in'];?></td>
<td><?php print $data['occupation'];?></td>
<td><?php print $data['salary_currency_type'];?></td>
<td><?php print $data['salary_amount'];?></td>
<td><?php print $data['work_location'];?></td>
<td><?php print $data['state'];?></td>
<td><?php print $data['city'];?></td>
<td><?php print $data['about'];?></td>
<td><?php print $data['image'];?></td>
<td><?php print $data['admin_mail'];?></td>
<td><?php print $data['admin_pass'];?></td>
<td><?php print $data['identity'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>