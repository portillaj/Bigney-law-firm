<?php
$nav = [
  'Areas of Practice',
  'Case Results',
  'News & Media',
  'Contact'
  ];

$newsImages = [
  'fox.png',
  'nbc.png',
  'pbs.png',
  'cbs.png',
  'espn.png',
  'abc.png',
  'news13.jpeg'
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

      <div class="top-info fixed-top">
      <div class="container">
        <div class="d-flex justify-content-end">
  <div class="mr-auto p-2">
    <a href="mailto:bigneylawfirm@gmail.com" class="text-light">bigneylawfirm@gmail.com</a></div>
  <div class="p-2 d-flex mr-auto">
    <span><i class="fa fa-phone-square fa-2x text-light" aria-hidden="true"></i></span>
     <p class="text-light align-self-center pl-3 pt-1">
       (407).425.6068
     </p>
   </div>
  <div class="p-2">
     <i class="fa fa-facebook-square fa-2x text-light" aria-hidden="true"></i>
   </div>
  <div class="p-2"><i class="fa fa-twitter-square fa-2x text-light" aria-hidden="true"></i></div>
  <div class="p-2"><i class="fa fa-linkedin-square fa-2x text-light" aria-hidden="true"></i></div>
</div>
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

 <div class="main-info">
 <div class="container">
 <div class="row header-content">
   <div class="col-lg-7 col-md-6">
     <h1 class="display-5 pt-5 header">Defending Your Rights,<br> Is Our #1 Priority</h1>
     <p class="text-light home-para">Your Defense In Criminal Charges & Personal Injury Cases<br /> in Florida. No case is too large or too small for The Bigney Law Firm.</p>
     <div class="d-flex flex-row call-to-action">
       <button class="btn btn-light btn-lg call-btn">Learn More</button>
        <button class="btn btn-light btn-lg ml-5 call-btn">Contact Us</button>
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
                     rows="4"></textarea>
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
