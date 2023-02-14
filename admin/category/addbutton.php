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
    <div class="pt-3">
        <a href="add.php" class="btn btn-success">Add Product</a>
    </div>
<table id="example" class="table table-striped mt-4" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Book Name</th>
                <th>Athor Name</th>
                <th>Product Quantity</th>
                <th>Price</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Good person</td>
                <td>Mohiuddin khan alongir</td>
                <td>20</td> 
                <td>100</td>
                <td class="d-flex justify-content-center">
                    <form action="update.php" method="post" class="mx-2">
                        <input type="submit" value="Update" class="btn btn-warning">
                    </form>
                    <form action="" method="post" class="mx-2">
                        <input type="submit" value="Deleted" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Book Name</th>
                <th>Athor Name</th>
                <th>Product Quantity</th>               
                <th>Price</th>
                <th class="text-center">Action</th>
            </tr>
        </tfoot>
    </table>
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