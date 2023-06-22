<?php




require_once  'connect.php';







if(isset($_POST['delete_card'])){
    $allid = $_POST['cardIds'];
    $extract_id = implode(',' , $allid);
    

    $sql = "DELETE FROM cards WHERE id IN($extract_id)";
    $resuls = mysqli_query($conn, $sql);
    header('location: http://localhost/web/index.php');
}
?>


