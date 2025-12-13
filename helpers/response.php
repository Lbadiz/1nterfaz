<?php
function jsonResponse($status, $data = null, $message = null, $httpCode = 200) {
    http_response_code($httpCode);
    header('Content-Type: application/json; charset=utf-8');

    $response = ["status" => $status];

    if ($data !== null) {
        $response["data"] = $data;
    }

    if ($message !== null) {
        $response["message"] = $message;
    }

    echo json_encode($response);
    exit;
}
?>