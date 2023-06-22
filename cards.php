<?php
session_start();

require_once  'connect.php';

$sql = "SELECT * FROM cards";

$resuls = mysqli_query($conn, $sql)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
  <?php include "css/style.css" ?>
</style>
</head>
<body>


    <header>
      <div class="container">

     <div class="row">

    
    

     </div>

        <div class="row">
          <div class="col-md-12">

    <form  action="cards_add.php" method="POST" id="productForm">
      <div class="addproduct">
        <div class="addproduct_text">
          <h2>Product Add</h2>
        </div>
        <div class="btn_sec">
        <button class="btn btn-success">Save</button>
        <a class="btn" href="http://localhost/web/index.php">Cancel</a>
  </div>
    </div>

    <div class="form_f">
    
    <label for="sku">SKU:</label>
    <input class="inp" type="text" id="sku" name="sku" required>
    
    <label for="name">Name:</label>
    <input class="inp" type="text" id="name" name="name" required>
    
    <label for="price">Price ($):</label>
    <input class="inp" type="number" id="price" name="price" step="0.01" required>
    
    <label for="attribute">Attribute:</label>
    <select class="inp" id="attribute" name="attribute">
      <option>type</option>
      <option  value="Mb">DVD-disc</option>
      <option  value="Kg">Weight (Kg) for Book</option>
      <option  value="dimensions">Dimensions (HxWxL) for Furniture</option>
    </select>
    
    <label id="valuename" for="value">Value:</label>
    <input class="inp"  type="text" id="val" name="value" required>
  </div>
   
  </form>
  
</div>
</div>
</div>
    </header>

   
 

 



    

    

    




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/mine.js"></script>
</body>
</html>