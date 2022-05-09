<?php
$first = $_POST['firstName'];
//services
$service = $_POST['service'];

$file = file_get_contents("productinfo.txt");
$product = explode("\n", $file);
//$productinfo = explode("\n", file_get_contents('productinfo.txt'));
$location = $_POST['state'];
 ?>
<!DOCTYPE html>
<html>
    <head>
      <title>Thank You</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- stylesheets -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- javascript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:#f5fcf6;">
      <div class="col-md-5 p-2 text-center" style="">
        <?php
        //assign value to array
        $charProduct = array("01" => $product[0], "02" => $product[1], "03" => $product[2], "04" => $product[3], "05" => $product[4]);
        //Print out name and a welcome message

        echo '<h3 class="text-center">Welcome ' .$first. '. Thank you for your order.</h3>';

// see if service is in proper location
        $serviceAreas = explode("\n", file_get_contents('text/servicearea.txt'));

if (in_array($location, $serviceAreas)) {
    print("<h5>We service your location!</h5>");
} else {
    print("<h5>Unfortunately, we don't service your location.</h5>");
}

//change image and text based on choice
        switch($service){
          case "01":
          print("<img src='img/cookie3.jpg' width='500'>");
          print("<p>" . $product[0]. "</p>");
            break;
          case "02":
          print("<img src='img/product2.jpg' width='500'>");
          print("<p>" . $product[1]. "</p>");
            break;
          case "03":
          print("<img src='img/cookie2.jpg' width='500'>");
          print("<p>" . $product[2]. "</p>");
            break;
          case "04":
          print("<img src='img/product3.jpg' width='500'>");
          print("<p>" . $product[3]. "</p>");
            break;
          case "05":
          print("<img src='img/product4.jpg' width='500'>");
           print("<p>" . $product[4]. "</p>");
           break;
        }

        ?>
      </div>
    </body>
</html>
