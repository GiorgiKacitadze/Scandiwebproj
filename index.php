<?php
session_start();

require_once  'connect.php';

$sql = "SELECT * FROM cards";

$resuls = mysqli_query($conn, $sql);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
   <style>
  <?php include "css/style.css" ?>
</style>

</head>
<body>


    


    <section class="cards">
    <div class="container">
        
            
            
        
        <form  id="deleteForm" method="POST" action="delete-card.php">
        <div class="cards_btns_del_add">
            <div class="pr_text">
                <h2>Product List</h2>
            </div>
            <div class="pr_btn">
            <a class="btn" href="http://localhost/web/cards.php">Add</a>
            <button class="btn" type="submit" name="delete_card">Mass Delete</button>
           </div> 
            </div>

        <div class="row">
             
                <?php
                foreach ($resuls as $key => $card) {
                    echo '
                    <div class="col-lg-3 m_t">
                        <div class="line">
                            <div class="chek-box">
                                <input type="checkbox" name="cardIds[]" value="' . $card['id'] . '">
                            </div>
                            <div class="about-card">
                                <p>' . $card['sku'] . '</p>
                                <p>' . $card['name'] . '</p>
                                <p>' . $card['price'] . ' $</p>
                                <p class="valid">' . $card['val'] . '</p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            
        </div>
    </form>
    </div>
</section>


    <div class="row d-none">
          <div class="col-md-12">
    <form action="cards_add.php" method="POST">
    <label for="sku">SKU:</label>
    <input type="text" id="sku" name="sku" required>
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="price">Price ($):</label>
    <input type="number" id="price" name="price" step="0.01" required>
    
    <label for="attribute">Attribute:</label>
    <select id="attribute" name="attribute">
      <option>type</option>
      <option  value="Mb">DVD-disc</option>
      <option  value="Kg">Weight (Kg) for Book</option>
      <option  value="dimensions">Dimensions (HxWxL) for Furniture</option>
    </select>
    
    <label id="valuename" for="value">Value:</label>
    <input  type="text" id="val" name="value" required>
    
    <input type="submit" value="Submit">
  </form>
</div>
</div>
</div>



    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/mine.js"></script>
</body>
</html>




   
 

 



    

    

    



