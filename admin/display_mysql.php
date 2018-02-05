<?php
$conn   = mysqli_connect("localhost", "root", "familia131303", "angularjs");
$output = array();
$query  = "SELECT id, acao, comando, sgdb FROM tab_angularjs WHERE sgdb = 'Mysql'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    echo json_encode($data);


}
?> 