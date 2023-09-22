<?php  
session_start();
?>
<?php
if(!isset($_SESSION['use'])){
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Special offer</title>
</head>
<link rel="stylesheet" href="css/style_offer.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
<body>

    <div class="header">
    <center><a href="#default" class="logo">Special Offer</a></center>
    </div><br>
    <center>
    <section>
    <div>
        <h2><b>Pay now to contact matches</b</h2>
    </div><br>
    </section>
    <section>
    <div id="aaa">
        <p><span style="color: orange;">&#x2713;</span>Send <b>unlimited messages</b> & <b> chat </b> view <b> 40 verified mobile numbers </b></p>
        <p><span style="color: orange;">&#x2713;</span>check <b>compatibility </b> with matches by viewing <b> unlimited horoscope </b></p>
        <p class="text-muted">&#10006; <del> View and contact ID verified matches with photos from exclusive Prime section</del></p>
        <p class="text-muted">&#10006; <del> Priority customer service helpline</del></p>
    </div>
    </section><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
            <div class="card border-warning" style="width: 18rem;">
                <div class="card-header">
                    <b>GOLD</b>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">3 months</li>
                  <li class="list-group-item text-success"><b>SAVE 8%</b></li>
                  <li class="list-group-item text-muted"><del>Rs.5300</del> <b> Rs.4900</b></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card" style="width: 18rem;">
                <div class="card-header bg-success">
                    <b>BEST SELLING</b>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">PRIME GOLD</li>
                  <li class="list-group-item">3 Months</li>
                  <li class="list-group-item text-success"><b>SAVE 8%</b></li>
                  <li class="list-group-item text-muted"><del>Rs.5300</del><b> Rs.4900</b></li>
                </ul>
              </div>
            </div>
        </div>
        <h6 class="ccc"><b>Offer Valid only today!</b></h6><br>
        <button type="button" class="btn btn-warning">Pay Now Rs.4900</button>&nbsp;&nbsp;
        <a href="index2.php"><button type="button" class="btn btn-info">Skip</button><br></a>
        <small class="mmm">View all packages</small>
        </div>
        </section>
        </center>
</body>
</html>