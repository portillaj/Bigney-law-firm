<?php
$nav = [
  'Areas of Practice',
  'Case Results',
  'News & Media',
  'Contact'
  ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>David Bigney Law Firm - Trusted Defense. Rights Protected</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


  <div class="home-header">
    <div class="dark-overlay"></div>

      <div class="d-flex flex-row top-info">
        <div class="container mt-2">
        <a href="mailto:bigneylawfirm@gmail.com">bigneylawfirm@gmail.com</a>
      </div>
    </div>
  <nav class="mt-5 navbar navbar-expand-md navbar-light bg-light fixed-top">
   <div class="container">
     <div class="navbar-brand">
       <div class="text-center logo">
      <h3 class="mt-2 logo-title">
      <span>
        <i class="fa fa-balance-scale" aria-hidden="true"></i></span>
        Bigney Law Firm
       </h3>
       <h5 class="logo-sub">Trusted Defense. Rights Protected</h5>
     </div>
     </div>
     <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
       <span class="navbar-toggler-icon text-light"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
             <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
             <li class="nav-item">
                   <div class="dropdown show">
           <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             About Our Firm
           </a>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
             <a class="dropdown-item" href="#">Attorney Profiles</a>
             <a class="dropdown-item" href="#">Case Results</a>
           </div>
         </div>
   </li>
         </li>
         <?php foreach ($nav as $navLink) : ?>
           <li class="nav-item active">
             <a class="nav-link" href="#"><?= $navLink; ?></a>
           </li>
       <?php endforeach; ?>
       </ul>
     </div>
   </div>
 </nav>

 <div>
 <div class="container">
 <div class="row header-content">
   <div class="col-lg-7 col-md-6">
     <h1 class="display-5 pt-5 text-light">Defending Your Rights,<br> Is Our #1 Priority</h1>
     <p class="text-light home-para">Your Defense In Criminal Charges & Personal Injury Cases<br /> in Florida. No case is too large or too small for The Bigney Law Firm.</p>
     <div class="d-flex flex-row call-to-action">
       <button class="btn btn-outline-light">Learn More</button>
       <h4 class="ml-4 pt-2 learn">Learn More</h4>
     </div>
   </div>

   <div class="col-lg-5 col-md-6">
     <div class="card text-center card-form form-section">
                 <div class="card-body">
                   <h3 class="form-title">FREE CONSULTATION</h3>
                   <p class="text-light">Please fill out this form to schedule</p>
                   <form>
                     <div class="form-group">
                       <input type="text" class="form-control form-control-lg" placeholder="Name">
                     </div>
                     <div class="form-group">
                       <input type="email" class="form-control form-control-lg" placeholder="Email">
                     </div>
                     <div class="form-group">
                       <input type="text" class="form-control form-control-lg" placeholder="Phone">
                     </div>
                     <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Message"
                     rows="5"></textarea>
                     </div>
                     <input type="submit" class="btn btn-outline-light btn-block" value="SUBMIT FORM">
                   </form>
                 </div>
               </div>

   </div>
 </div>
</div>
</div>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
