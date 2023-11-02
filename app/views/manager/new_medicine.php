<!DOCTYPE html>
<html lang="en">
<head> <title> New Mediine </title>
</head>


  <?php require APPROOT . '/views/inc/header.php'; ?>

  <?php require APPROOT . '/views/inc/manager_sidebar.php'; ?>

  <!-- content -->
  <div class="content">
    <div class="anim">
      <h2> Register a new medicine </h2>
    </div>
    <div class="smallspace"></div>

    <div class="anim">
      <div class="container-fluid">
        <div class="d-flex">
          <form action="" method="POST" class="orderform">

            <table>


              <tr>
                <td colspan="2">
                  <h3> <br> <br> New Medicine Details </h3>
                </td>
              </tr>
              <tr>
                <td class="verticleCentered">
                  <span> Medicine Name : 
                </td>
                <td class="verticleCentered"> <input type="text" name="Mname" class="orderdetails" required> </td>

                <td class="verticleCentered">
                  <span> Batch Number : 
                </td>
                <td class="verticleCentered"><input type="text" name="Bnum" class="smallForm" required> </td>

                <td class="verticleCentered">
                  <span> Category : 
                </td>
                <td class="verticleCentered"> <input type="text" name="quantity" class="smallForm" required min="100"> </td>
              </tr>

              <tr>
                <td class="verticleCentered">
                  <span> Volume : 
                </td>
                <td class="verticleCentered"> <input type="text" class="orderdetails" placeholder="(mg / ml / tablets)"> </td>
              </tr>

              <tr>
                <td class="verticleCentered">
                  <span> Description : 
                </td>
                <td class="verticleCentered" colspan="3"> <input type="text" class="orderdetails2" placeholder="Type Description..."> </td>
              </tr>



              <tr>
                <td class="verticleCentered"> <button class="addBtn"> Done </button>
          </form>

          <a href="<?php echo URLROOT ?>/manager/medicines" class="link">
            <div class="publicbtn"> Cancel </div>
          </a> </td>
          </tr>
          

          </table>
          <div class="smallspace"></div>
        </div>
      </div>






    </div>

  </div>
  </div>

  <?php require APPROOT . '/views/inc/footer.php'; ?>


</body>

</html>