<DOCTYPE html>
<html lang="en">   
<head> 
<title> Inventory </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/css/style.css">
</head>
<body>


<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/pharmacy_sidebar.php'; ?>


<!-- content -->
  <div class="content">
  <h2>
  <div class="anim">
    Inventory 
  </div>
  </h2>

<div class="anim">    
<table class="customers">
  <tr>
    <th> Medicine ID </th>
    <th> Meidicine Name </th>
    <th> Batch No </th>
    <th> Category No </th>
    <th> Quantity </th>
    <th> Manufacture Date </th>
    <th> Expire Date </th>
    
    
  </tr>
<tr> 
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>

  
  <td> <!-- <button class="smallOpen-button" onclick="openForm()"> Update </button> --> </td>
</tr>


<tr> 
  <td>111 </td>
  <td> Aspirine</td>
  <td> 21123V </td>
  <td> 122</td>
  <td>1500 </td>
  <td> 2023/07/10 </td>
  <td> 2023/09/10</td>
  
 
</tr>

</table>
</div>
</div>
</div>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    

    <label for="text"><b> Number of Item </b></label>
    <input class="bar" type="text" placeholder="Enter Your Price for the order" name="price" required>
    <br> <br>

    <button type="submit" class="btn"> Update </button>
    <button type="button" class="btn cancel" onclick="closeForm()"> Close </button>
  </form>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


</body>
</html>

