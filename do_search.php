<?php
if (isset($_POST['search'])) {
    include('db.php');
    $word = mysqli_real_escape_string($_POST['search']);
    $word = htmlentities($word);
}


//     $sql = "SELECT name FROM Part WHERE content LIKE '%" . $word . "%' ORDER BY title LIMIT 10";
//     // get results
//     $row = $connection->select_list($sql);
//     if(count($row)) {
//         $end_result = '';
//         foreach($row as $r) {
//             $result         = $r['storageLocation_id'];
//             // we will use this to bold the search word in result
//             $bold           = '<span class="found">' . $word . '</span>';    
//             $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';            
//         }
//         echo $end_result;
//     } else {
//         echo '<li>No results found</li>';
//     }
// }
?>