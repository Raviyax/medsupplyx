<!DOCTYPE html>
<html lang="en">
<head>
<title> Your Profile </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/css/style.css">
</head>
<body>


<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/manager_sidebar.php'; ?>
<div class="content">
<div class="anim">
<h2> Profile </h2>
</div>
<div class="anim"> 
    <div class="profilebox">
        
        <div class="profilecard">
            <div class="card-body">
                <table>
                        <tr>
                        <div class="anim"> <td> <p class="profdetails"> Manager Name </p> </td> </div>
                            <td>:</td>
                            <td>Dr. Abeykoon </td>           
                        </tr>
                      
                        <tr>
                            <td> <p class="profdetails"> Manager Address </p> </td>
                            <td>:</td>
                            <td> 23/4 , Colombo 07 </td>
                        </tr>
                        <tr>
                            <td> <p class="profdetails"> Contact No </p> </td>
                            <td>:</td>
                            <td>  0714717211</td>
                          
                        </tr>
                        <tr>
                            <td> <p class="profdetails"> Email </p> </td>
                            <td>:</td>
                            <td> abeykoon@gmail.com </td>
                            <td> <button class="addBtn"> Change </button> </td>
                        </tr>
                        <tr>
                            <td> <p class="profdetails"> Password </p> </td>
                            <td> : </td>
                            <td> ******************</td>
                            <td> <button class="addBtn"> Change </button> </td>
                        </tr>
                       
                </table>
            </div>
        </div>
</div>

</div>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>

</body>
</html>

