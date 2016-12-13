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
    print $row['storageLocation_id'];
    $item = db_query("SELECT name FROM StorageLocation WHERE ID = 15")->fetch_object()->name; 
    echo "<br><h1>";
    print $item;
    echo "</h1><br>";
} 
}
}
?>