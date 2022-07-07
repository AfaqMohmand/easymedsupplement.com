<?php include "base.html"; ?>
<!doctype html>
<html lang="en">
  <head>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-ML6BLWT');</script>
<!-- End Google Tag Manager -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Thank You!!!</title>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    h1, h2, h3, h4{
      font-family: 'Poppins', sans-serif;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');

    p{

      font-family: 'Poppins', sans-serif;
    }
    
    </style>
    
    
  </head>
  <body class="bg-white" >
  <?php 
    include "base.html";
    include "db.php";
    if (isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $zip_code = $_POST['zip_code'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $email_address = $_POST['email_address'];
        $phone_number = $_POST['phone_number'];
        $lead_id = $_POST['universal_leadid'];

        $sql = "INSERT INTO quotes (zip_code, first_name, last_name, dob, address, gender, email_address, phone_number, leadiD) VALUES ('$zip_code', '$first_name', '$last_name', '$dob', '$address', '$gender', '$email_address', '$phone_number', '$lead_id')";

        if (mysqli_query($conn, $sql)){
            header("Location:thank-you.php");
        }
        else {
            echo "<script> alert('Error Processing Your Request'); </script>";
        }
        
    }

?>
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML6BLWT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
  <div class="container-fluid mb-5">
    <div class="row "  style="height: 400px;">
      <div class="col-4"></div>
      <div class="col-md-4 col-sm-12 " style=" background-color: #47A81D; margin-top: 150px; ">
          <h2 class="text-center  pt-4"  style="color: #fff; font-weight: 1000;" >Thank You</h2>
          <p class="text-center" style="color:#fff; font-size: x-large;"> Soon! We will get  in touch with you</p>
      <i class="d-flex justify-content-center align-content-center align-items-center bi bi-bookmark-check-fill"  style="margin-top: 30px; color: #fff; font-size: 70px;"  ></i>
      </div>
      <div class="col-4"></div>
    </div>
  </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML6BLWT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<?php include "footer.html"; ?>