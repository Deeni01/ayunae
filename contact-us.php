<?php session_start();
include_once('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<style>
    
.text{

    font-family: serif;

}  
.social-icons {
    list-style: none;
    text-align: center;
    margin: 25px 0px;
}
.social-icons li {
    display: inline-block;
}
.social-icons li i {
    background: #F44770;
    color: #fff;
    padding: 35px;
    font-size: 40px;
    border-radius: 55%;
    margin: 0px 5px;
    cursor: pointer;
    transition: all .5s;
}
.social-icons li i:hover {
    background: #fff;
    color: #000000;
}

</style>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shopping Portal | Contact us</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom icons-->
        <link href="css/custom-icons.css" rel="stylesheet" />
        <!-- Core theme CSS -->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    </head>
    <body>
<?php include_once('includes/header.php');?>
        <!-- Header-->
        <header class="py-1" style="background: #cf8d88;">
            <div class="container px-4 px-lg-5 my-5">

                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Contact Us</h1>
                       <h5 class="display-10 fw-bolder">ayunae.co</h5>
        
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-6">
            <div class="container px-4 px-lg-5 mt-5">
               <!-- <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> -->
<!-- <div style="width:100%">
<table class="table">
    <tr>
        <th width="200">Address</th>
        <td width="500">4665 Abc Buliding,<br />
        XYZ Areab,<br />
New Delhi, Delhi 110097,<br />
India
    </td>
    </tr>
        <tr>
        <th>Contact no</th>
        <td>123457890,01122334455</td>
    </tr>
        <tr>
        <th>Email</th>
        <td>info@yourdomain.com</td>
    </tr>
</table>
</div> -->

            
              <div class="text">
                <ul class="social-icons">
                    <li><a href="https://wa.me/0162166057?text=id%20like%20to%20%20make%20a%20purchase"><i class="fab fa-whatsapp"></i></a><p>WhatsApp</p></li>
                    <li><a href="https://www.facebook.com/ayunae.co"><i class="fab fa-facebook"></i></a><p>Facebook</p></li>
                    <li><a href="https://www.instagram.com/ayunae.co/"><i class="fab fa-instagram"></i></a><p>Instagram</p></li>
                    <li><a href="mailto:ayunae@gmail.com"><i class="far fa-envelope email"></i></a><p>Email</p></li>
                </ul>
            </div>


 
<!--</div>--> 
        </section>
        <!-- Footer-->
   <?php include_once('includes/footer.php'); ?>
        <!-- Custom core JS-->
        <script src="js/custom.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
