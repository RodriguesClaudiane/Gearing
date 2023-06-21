<?php 
require('../accept.php');

require('../establishingConnection.php');

require('../functions.php');

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$id = $data['id'];
$title = $data['title'];
$commentId = $data['commentId'];
$commentUpdate = $data['commentUpdate'];

alterSession($id);

$email = $_SESSION['email'];

$response = [];

try{
    $sql = "UPDATE GEA_COMMENTS SET com_message = '$commentUpdate' WHERE com_top_title = '$title' 
    AND com_user_email = '$email' AND com_id = '$commentId';";
    $result = $conn->exec($sql);
    $response['success'] = true;
}catch (PDOException $e) {
    $response['success'] = false;
    $response['error'] = $e->getMessage();
}
echo json_encode($response);