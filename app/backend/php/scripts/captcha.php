<?php

define('SMARTCAPTCHA_SERVER_KEY', 'ysc2_BfIZiCNyd0IxmNXXd25JhBOvSHOBd7aXdYQPA6sW3ea6ca35');

function check_captcha($token) {
    $ch = curl_init();
    $args = http_build_query([
        "secret" => SMARTCAPTCHA_SERVER_KEY,
        "token" => $token,
        "ip" => $_SERVER['REMOTE_ADDR'], // Нужно передать IP-адрес пользователя.
        // Способ получения IP-адреса пользователя зависит от вашего прокси.
    ]);
    curl_setopt($ch, CURLOPT_URL, "https://smartcaptcha.yandexcloud.net/validate?$args");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 1);

    $server_output = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpcode !== 200) {
        echo "Allow access due to an error: code=$httpcode; message=$server_output\n";
        return true;
    }
    $resp = json_decode($server_output);
    return $resp->status === "ok";
}

$token = $_POST['smart-token'];
if (check_captcha($token)) {
    echo "Passed\n";
} else {
    echo "Robot\n";
}
