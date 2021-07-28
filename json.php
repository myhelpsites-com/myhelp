<?php

include "conexao.php";

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$sql = "SELECT * FROM `teste`";
    $result = $conn->query($sql);
    $encode = array();
    while ($row = $result->fetch_assoc()) {
        $encode[] = $row;
    }
    echo json_encode($encode);
    // $response = array();
    // $response[0] = array(
    //     'id' => '1',
    //     'value1'=> 'value1',
    //     'value2'=> 'value2'
    // );

// echo json_encode($response); 
?>

