<?php
if (isset($_POST['search'])) {
    include('db.php');
    //$word = mysqli_real_escape_string($_POST['search']);
    //$word = htmlentities($word);
    $word = $_POST['search'];

    $result = db_query("SELECT storageLocation_id FROM Part WHERE name RLIKE '" . $word . "'");

 if($result === false) {
     $error = db_error();
 } else {
    echo '<h1>Found in : ';

    while ($row = mysqli_fetch_array($result)){ 
    $item = db_query("SELECT name FROM StorageLocation WHERE ID = " . $row['storageLocation_id'] . "")->fetch_object()->name; 
    echo ' '. $item .'&emsp;';
} 
    echo '</h1>';

}
}
?>