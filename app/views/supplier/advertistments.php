

  <!DOCTYPE html>
<html lang="en">
<head>
<title> Advetistment </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/css/style.css">
</head>
<body>


<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/supplier_sidebar.php'; ?>


<!-- content -->
  <div class="content">

 <div class="anim"> <h2> Advertistments </h2> </div>


  <div class="anim"> 
  <p class="text_centered"> Add nice description about the medicine that you need to advertise </p>
  </div>

<div class="anim">  
<section class="contact-form">
        <div class="form-container2">
            <h2>Your Details</h2>
            <form action="#" method="POST">
 
                <label for="name"> Heading : </label>
                <input type="text" id="name" name="name" required>
 
                <label for="message"> Description: </label>
                <textarea id="message" name="message" rows="4" required></textarea>
 
                <button type="submit" class="submit-button"> Post </button>
            </form>
        </div>
    </section>
    </div>

    <div class="anim">  <h2> Previous Posts </h2> </div>

</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>


</body>
</html>

