<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin pannel</title>
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
include("nav.php");
?>
<?php
include("slidebar.php");
?>
<section class="px-5" style="padding:0 200px;">

<div class="px-5">
    <div class="pt-2">
        <h2>Add Product</h2>
    </div>
    <div>
    <form class="p-5">
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Book Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
    
  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Athor Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-2">
    <label for="quantity" class="form-label">Product Quantity</label>
    <input type="tel" class="form-control" id="quantity">
  </div>
  <div class="mb-2">
    <label for="price" class="form-label">Price</label>
    <input type="tel" class="form-control" id="price">
  </div>
  <div class="mb-2 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <div class="d-flex justify-content-end">
  <button type="submit" class="btn btn-primary">Add Product</button>
  </div>
</form>
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