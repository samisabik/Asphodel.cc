<?php
if (isset($_POST['search'])) {
    include('db.php');
    //$word = mysqli_real_escape_string($_POST['search']);
    //$word = htmlentities($word);
    $word = $_POST['search'];

    $result = db_query("SELECT * FROM Part WHERE name LIKE '%" . $word . "");

if($result === false) {
    $error = db_error();
} else {

    echo $result;

    while ($row = mysql_fetch_array($result)){ 
    echo "<h1>";
    echo $row['storageLocation_id'];
    echo "</h1><br>";
} 
}
 }
?>