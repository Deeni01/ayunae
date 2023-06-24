<?php session_start();
include_once('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>


<style>
     .left-text,
    .right-text {
      flex: 1;
          }

 .container-1{
   
    display: flex; 
    align-items: center;
    padding: 5%;
    font-family: serif;
}


</style>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shopping Portal | Category wise Shop </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom icons-->
        <link href="css/custom-icons.css" rel="stylesheet" />
        <!-- Core theme CSS -->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
<?php include_once('includes/header.php');?>
        <!-- Header-->
        <!-- <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">

                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">About Us</h1>
        
                </div>
            </div>
        </header> -->
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5" style="background: #F6E8E5;">
                <!-- <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> -->

                <div class="container-1">
                 <div class="left-text">
                    <h1>About Us</h1>
                    <br>
                    <h5> Enchanting Elegance <br> 
                     for Eid and Beyond. </h5>
                </div>
                <div class="image">
                     <img src="assets\black.jpg"  width="330" height="500">
                </div>

                 <div class="right-text">
                 <p>Ayunae translates to ‘prettiness’ or ‘cantiknya’ in Malay. Our brand values the aesthetics showcasing minimalism and versatility in our designs. We start this journey as a mother and daughter duo bonded through a passion for fashion & it brings us great joy to welcome you to our vision..</p>
                  </div>
          </div>

                <!-- </div> -->
            </div>

 
</div>
        </section>
        <!-- Footer-->
   <?php include_once('includes/footer.php'); ?>
        <!-- Custom core JS-->
        <script src="js/custom.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
