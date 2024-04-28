<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Choosing us for an academic bookstore comes with several benefits. Firstly, we offer a wide selection of textbooks and academic resources from various publishers, ensuring that students can find the materials they need for their courses. Secondly, we strive to provide competitive pricing, ensuring that students can access the resources they need at an affordable price point.Thirdly, we offer various services such as online ordering and delivery options, making it convenient for students to purchase their textbooks and academic resources from us. Lastly, we prioritize customer service, ensuring that students have a positive shopping experience and receive the support they need to succeed in their academic pursuits.</p>
      </div>

   </div>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>