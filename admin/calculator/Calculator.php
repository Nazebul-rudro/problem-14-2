<?php

require_once("../../vendor/autoload.php");
use pondit\calculator\Calculatorfun;


$newcalculate = new Calculatorfun(10, 20);
echo $newcalculate -> get_sum();





?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <!-- link css -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="../../../public/assets/admin/css/header.css">
  <link rel="stylesheet" href="../../../public/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../public/assets/bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../public/assets/admin/css/sidebar.css">
  <link rel="stylesheet" href="../../../public/assets/bootstrap/css/boxicons.min.css">
</head>
<body >
<?php
include("../inc/nav.php");
?>
<?php
include("../inc/slidebar.php");
?>




<section class="col-md-4 offset-md-4 mt-5">
    
    <div class="card">
    <div class="card-body">
    <form action="" method="post">
    <h2 class="pt-4">Calculator</h2>
    <hr>
        <div class="mt-4">
            <label for="num1" class="form-label">Number 1</label>
            <input type="number" name="num1" id="num1" class="form-control">
        </div>
        <div class="my-4">
        <label for="op" class="form-label">Operator</label>
            <select name="op" id="" class="form-control" id="op">
                <option selected>Open this select menu</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <div class="my-3">
            <label for="num2" class="form-label">Number 2</label>
            <input type="number" name="num2" id="num2" class="form-control">
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Calculate" class="btn btn-success">
        </div>
    </form>
    <div class="d-flex mt-2">
        <p class="text-dark ">Result : </p>
    </div>
    </div>
    </div>
  </section>






  
<footer id="sticky-footer" class="py-4 text-dark-50 fixed-bottom " style="background-color: #f2f4fb;">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>

<!-- js -->

 <script src="../../../public/assets/admin/js/sidebar.js"></script>
  <script src="../../../public/assets/bootstrap/js/jquery.min.js"></script>
  <script src="../../../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>