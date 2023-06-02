<?php
<!DOCTYPE html>
<html>
<head>
    <title>SAAS</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\navbar.css">

    <style>
    <style>
      body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;

      }
      .container {
        display: flex;
        width: 700px;
        padding: 16px;
        background-color: white;
        border: 1px solid black;
        border-radius: 5px;
        margin-top: 70px;
        margin-bottom: 70px;

      }
      .form-container {
        flex: 1;
        padding: 20px;
      }
      .image-container1 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 1;
        margin-top: 200px;
        width: 100px;
      }
      input[type=text], input[type=email], input[type=password], input[type=tel], input[type=date], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      button {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      button:hover {
        background-color: #45a049;
      }
 </style>

</head>
<body>
  <div class="logo">
  <img src="images\newlogo.png" alt="Logo">
</div>
<nav class="navbar navbar-expand-lg navbar-dark  sticky-top  custom-navi">
<div class="container-fluid justify-content-center">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Application Forms
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="membership.html">Apply for Membership</a></li>
        <li><a class="dropdown-item" href="membership.html">Apply for any Activity </a></li>
        <li><a class="dropdown-item" href="webinar.html">Apply for Scholarships</a></li>
    </ul>
    </ul>
  </div>
</div>
</nav>
<div class="container">
  <div class="form-container">
    <h2>Membership Form</h2>
    <form action="/submit_membership_form" method="post">
      <label for="fname">First Name:</label><br>
      <input type="text" id="fname" name="fname" required><br>
      <label for="lname">Last Name:</label><br>
      <input type="text" id="lname" name="lname" required><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br>
      <label for="semester">Degree/Semester:</label><br>
      <input type="text" id="sem" name="sem" placeholder="BSCS8th, BSIT5th..."><br>
      <label for="fname">Where to Apply:</label><br>
      <input type="text" id="fname" name="fname" required><br>
      <label for="phone">Phone Number:</label><br>
      <input type="tel" id="phone" name="phone" required><br>
      <label for="dob">Date of Birth:</label><br>
      <input type="date" id="dob" name="dob" ><br>
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
<footer class="footer">
   <div class="footer-content">
     <div class="footer-section">
       <h3>About Us</h3>
       <p>univrsi.</p>
     </div>
     <div class="footer-section">
       <h3>Quick Links</h3>
       <ul>
         <li><a href="#">Home</a></li>
         <li><a href="#">Courses</a></li>
         <li><a href="#">Teachers</a></li>
         <li><a href="#">Events</a></li>
       </ul>
     </div>
     <div class="footer-section">
       <h3>Contact Us</h3>
       <p>7km</p>
       <p>Email: sami</p>
       <p>Phone: +7890</p>
     </div>
   </div>
 </footer>

</body>
</html>
 ?>
