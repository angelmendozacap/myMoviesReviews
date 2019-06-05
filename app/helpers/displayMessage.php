<?php

## Response Message
function displayResponse($data, $code, $status)
{
    $msg = [];
    if (!is_array($data)) {
        $msg['message'] = $data;
    } else {
        $msg['data'] = $data;
    }
    $msg['code'] = $code;

    header($_SERVER["SERVER_PROTOCOL"] ." {$code} {$status}");
    return json_encode($msg, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
}