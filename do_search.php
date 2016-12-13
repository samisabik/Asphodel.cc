<?php
if (isset($_POST['search'])) {
    include('db.php');
    $word = mysqli_real_escape_string($_POST['search']);
    $word = htmlentities($word);
        echo $word;

    $result = db_query("SELECT name FROM Part WHERE content LIKE '%" . $word . "%' ORDER BY title LIMIT 10");

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