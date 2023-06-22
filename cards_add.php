 <?php



require_once 'connect.php';


function validdata($value) {
$value = htmlentities($value);
$value = trim($value);
$value = strip_tags($value);

return $value;



}


$sku = validdata($_POST['sku']);
$name = validdata($_POST['name']);
$price = validdata($_POST['price']);
$value = validdata($_POST['value']);






session_start();













$sql = "INSERT INTO cards (sku, name, price, val) VALUES ('$sku', '$name', '$price', '$value')";

$result = mysqli_query($conn, $sql);


if ($result) {

   
  
   header('location: http://localhost/web/index.php');
} else {

    
    header('location: http://localhost/web/cards.php');
}





?> 




