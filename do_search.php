<?php
if (isset($_POST['search'])) {
    include('db.php');
    //$word = mysqli_real_escape_string($_POST['search']);
    //$word = htmlentities($word);
    $word = $_POST['search'];

    $result = db_query("SELECT storageLocation_id FROM Part WHERE name LIKE '%" . $word . "%'");

 if($result === false) {
     $error = db_error();
 } else {

    while ($row = mysqli_fetch_array($result)){ 
    //$result_2 = db_query("SELECT name FROM StorageLocation WHERE ID = %" . $row['storageLocation_id'] . "%");
    //$result_2 = db_query("SELECT name FROM StorageLocation WHERE ID = 15");
    
    //$id = mysqli_result(db_query("SELECT name FROM StorageLocation WHERE ID = 15"),0);

    $product_name = db_query("SELECT name FROM StorageLocation WHERE ID = 15")->fetch_object()->name; 
    print $product_name; //output value
    echo "<h1>";
    echo "</h1><br>";
} 
}
 }
?>