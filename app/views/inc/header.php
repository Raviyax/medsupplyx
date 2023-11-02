<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">

  <script src="https://kit.fontawesome.com/b01c051a0f.js" crossorigin="anonymous"></script>

  <title> </title>
</head>

<body>

  <header>
    <div class="navbar">
      <div class="leftarea">
        <table>
          <tr>
            <td> <img class="logo" src="<?php echo URLROOT ?>/public/img/logo3.png" alt="logo"> </td>
            <td>
              <div class="txt_green"> MedSupplyX </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="greeting">  
      <a href="#"><i class="fa-regular fa-bell"></i></a>  Hello , <?php 
      if(isset($_SESSION['user_id'])){
      echo $_SESSION['user_name'];}
      if(isset($_SESSION['cashier_id'])){
      echo $_SESSION['cashier_name'];}
      if(isset($_SESSION['admin_id'])){
      echo $_SESSION['admin_name'];}
      if(isset($_SESSION['manager_id'])){
      echo $_SESSION['manager_name'];}
      if(isset($_SESSION['supplier_id'])){
      echo $_SESSION['supplier_name'];} ?>
      
      <img class="profile" src="<?php echo URLROOT ?>/public/img/profile.jpg" alt="profile">
      </div>
    </div>


  </header>