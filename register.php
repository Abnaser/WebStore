<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crafts and Arts :: Online Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style-header-footer.css">
  <link rel="stylesheet" href="style-index.css">
</head>
<body>
  <div class="container-fluid top-line">
    <span class="lead">As a project for HS172 course, CSED21</div>
    </div>
    <div class="container-fluid">
      <div class="row vertical-align">
        <div class="col-sm-4 ">

          <form class="form-inline">
            <div class="input-group search">
              <input type="text" class="form-control" size="30" placeholder="Search.." required>
              <span class="input-group-btn btn-search">
                <button class="btn btn-secondary" type="submit">
                  <i class="material-icons" style="color: grey;">search</i></button>
              </span>
            </div>
          </form>

        </div>
        <div class="col-sm-4 logo">
          <a href="index.html"><img class="img-fluid" src="pictures\logo.png" alt="Logo: CRAFTS AND ARTS"></a>
        </div>


        <div class="col-sm-4 d-flex justify-content-end" >
          <a href="account.html"><i class="material-icons md-48" style="color:#1467b6">account_circle</i></a>
        </div>
      </div>
    </div> <!-- end of logo with search and login&signup  -->
    <!-- start of navbar -->

<nav class="navbar navbar-expand-sm navbar-light border justify-content-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
     <span class="navbar-toggler-icon"></span>
   </button>

  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar" >
     <ul class="navbar-nav">
       <li class="nav-item">
         <a class="nav-link" href="index.php"><i class="material-icons md-24">home</i></a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown" href="#">Categories</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="Products.html">Accessories</a>
      <a class="dropdown-item" href="Food.html">Food</a>
      <a class="dropdown-item" href="Crochet.html">Crochet</a>
      <a class="dropdown-item" href="Arts.html">Arts</a>
    </div>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Sell</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="contactus.html">Contact us</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="index.php">About us</a>
       </li>
     </ul>
   </div>
</nav>

<div class="container" style="width: 500px; margin-top: 50px">
  <form method="post"  action="register.php">
      <?php include('errors.php'); ?>
      <div class="form-group">
        <div class="form-group">
     <div class="form-group">
        <label for="firstName">First Name *</label>
        <input type="firstName" class="form-control" name="firstName"  id = "firstName" placeholder="first name">
      <span id="error_name" class="text-danger"></span>
    </div>
    <div class="form-group">
      <label for="lastName">Last Name *</label>
        <input type="lastName" class="form-control" name="lastName"  id = "lastName" placeholder="last name">
      <span id="error_lastname" class="text-danger"></span>
    </div>
         <label for="email">Email address *</label>
          <input type="email" class="form-control" name="email" id = "email" placeholder="peter@gmail.com">
           <span id="error_name" class="text-danger"></span>
        </div>
        <div class="form-group">
          <label for="pwd">Password *</label>
          <input type="password"  class="form-control" name="password_1" id = "pwd" placeholder="No more than 20 characters">
           <span id="error_name" class="text-danger"></span>
      </div>
        <div class="form-group">
          <label for="pwd2">Confirm Password *</label>
          <input type="password" class="form-control" name="password_2" id = "pwd2" placeholder="No more than 20 characters">
          <span id="error_name" class="text-danger"></span>
        </div>
      </div>

    <div class="form-group">
      <label for="birth">Date Of Birth *</label>
      <input type="birth" class="form-control" name="birth"  id = "birth" placeholder="DD/MM/YYYY">
      <span id="error_dob" class="text-danger"></span>
    </div>
    <div class="form-group">
      <label for="gender">Gender *</label>
      <select name="gender" id="gender" class="form-control">
        <option selected>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
      <span id="error_gender" class="text-danger"></span>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number *</label>
          <input type="phone" class="form-control" name="phone" id = "phone" placeholder="(555) 555-5555">
      <span id="error_phone" class="text-danger"></span>
    </div>
        <button type="submit" class="btn btn-primary" style="border-radius:0" name="reg_user">Signup</button>

  </form>

</div>




 <!-- footer -->
   <div class="container-fluid footer" style="margin-top:120px">
     <div class="d-flex justify-content-center">
       <i class="material-icons md-48" style="color: #d35ca3"><br>email</i>
     </div>
     <div class="d-flex justify-content-center" style="margin-top:30px">
       <h1> Want inspiration straight to your inbox?</h1>
     </div>
     <div class="d-flex justify-content-center"style="margin-top:30px">
       <form class="form-inline">
         <div class="input-group">
           <input type="text" class="form-control  mr-sm-2" size="50" placeholder="Your email" required>
           <span class="input-group-btn">
             <button class="btn btn-secondary" style="background-color: #1467b6" type="submit">Subscribe</button>
           </span>
         </div>
       </form>
     </div>
     <div class="row" style="margin-top:60px">
       <div class="col-sm-3 text-center">
         <h6 class="text-capitalize "> what is CRAFTS AND ARTS?</h6>
         <a href="index.php" class=""> About Us</a>
       </div>
       <div class="col-sm-3 text-center">
         <h6 class="text-capitalize "> WHAT'S IN STORE</h6>
   <a href="Products.html" class=""> Accessories</a><br>
        <a href="Food.html" class=""> Food</a><br>
        <a href="Crochet.html" class=""> Crochet</a><br>
        <a href="Arts.html" class=""> Arts</a><br>
       </div>
       <div class="col-sm-3 text-center">
         <h6 class="text-capitalize "> customer service</h6>
         <a href="contactus.html" class=""> Contanct Us</a><br>
       </div>
       <div class="col-sm-3 text-center">
         <h6 class="text-capitalize "> follow us</h6>
         <a href="#" class=""><img class="img-fluid" src="pictures\facebook_50x50.png" alt="facebook logo" ></a><br>
         <a href="#" class=""><img class="img-fluid" src="pictures\instagram_50x50.png" alt="instagram logo" ></a><br>

       </div>



     </div>



   </div>






 <script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
 </html>
