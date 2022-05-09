<!DOCTYPE html>
<html>
    <head>
        <title>Check Us Out</title>
        <!-- meta tags -->
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
      <h1 class="text-center m-2">Place an Order</h1>

                              <!-- form -->
      <div class="p-4">
      <form action="response.php" method="post">
          <label for="firstName" class="form-label">First Name</label>
        <input type="text" name="firstName" class="form-control" placeholder="" id="firstName"><br>
          <label for="lastName" class="form-label">Username</label>
        <input type="text" class="form-control" placeholder="" id="lastName"><br>
          <label for="service" class="form-label">What would you like?</label>

          <!-- services -->
        <select class="form-control form-select" name="service" id="service">
          <option style="display:none;">--------------Select--------------</option>
          <option value="01">Cookies and Brownies Box</option>
          <option value="02">Breads and Pastries Box</option>
          <option value="03">Cakes and Pies Box</option>
          <option value="04">Birthday Cake</option>
          <option value="05">Party Box</option>
        </select>
        <br>
          <label for="state" class="form-label">What location do you want to pick up from?</label>

          <!-- generate dropdown menu with options from txt file -->
          <?php
          $file = "text/states.txt";
          $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
          $nrl = count($lines);
          ?>

        <select class="form-control form-select" placeholder="" id="state">
            <option style="display:none;">SELECT STATE</option>
            <?php
            foreach($lines as $line){
              echo "<option value='".$line."'>$line</option>";
            }
            ?>
        </select>

<br>
<div class="btn-group" role="group">
        <input class="btn btn-outline-success" type="reset">
        <input class="btn btn-outline-success" type="submit">
      </form>
</div>
    </div>

    </body>
</html>
