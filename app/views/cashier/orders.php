<!DOCTYPE html>
<html lang="en">
<head>
<title> Requset an Order </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
</head>
<body>


<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/cashier_sidebar.php'; ?>

<!-- content -->
  <div class="content">
<div class="anim">  <h2> Request an Order </h2> </div>
<div class="smallspace"></div>

<div class="anim">
<div class="container-fluid">
<div class="d-flex">
  <form action="" method="" class="orderform">
    
    <table> 
    <tr> <td class="verticleCentered"> 
      <span class="fname"> Customer Name  </td>
      <td> : </td> 
         <td class="verticleCentered"> <input type="text" name="fname" class="orderdetails">   </td> </tr>



      <tr> <td class="verticleCentered">
      <span class="lname">Medicine Name  </td>
      <td> : </td> 
      <td class="verticleCentered"><input type="text" name="lname" class="orderdetails"> </td> 

      <td class="verticleCentered"> 
      <span class="lname"> Batch Number </td> 
      <td> : </td>
      <td class="verticleCentered"><input type="text" name="lname" class="smallForm"> </td> 

      <td class="verticleCentered"> 
      <span class="lname"> Quantity  </td>
      <td> : </td> 
      <td class="verticleCentered"> <input type="number" name="lname" class="smallForm"> </td> 

      <td> <button class="addBtn"> More </button> </td> </tr>

      <tr> <td class="verticleCentered"> <button class="addBtn"> Done </button> <input type="reset" name="reset" class="addBtn">  </td> 
     </tr>

    </table>
    </form>
    </div>
    </div>
  
    




</div>

</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>


</body>
</html>

