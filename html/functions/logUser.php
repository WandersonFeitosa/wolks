<?php

include "./globalVars.php";

//Atribui o body da requisição que é um JSON para a variável $data
$data = json_decode(file_get_contents('php://input'), true);


$data = array(
    'username' => $data['username'],
    'password' =>  $data['password']
);

// Encode the data as JSON
$jsonData = json_encode($data);

// Create the HTTP headers
$headers = array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
);

// Create the stream context options
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => implode("\r\n", $headers),
        'content' => $jsonData
    )
);

// Create the stream context
$context = stream_context_create($options);

// Make the request to the "/logUser" route
$url = $api_url . '/logUser';  // Replace with your actual URL
$response = file_get_contents($url, false, $context);

// Process the response
if ($response === false) {
    // Request failed
    echo 'Error making the request';
} else {
    // Request successful
    $responseData = json_decode($response, true);

    if (isset($responseData['error'])) {
        // Display error message with the stattus code 400        
        http_response_code(400);
        echo json_encode($responseData);
    } else {
        // return the reponse data and with the proper http status code
        session_start();

        // Store data in the session
        $_SESSION['userInfo'] = $responseData['userInfo'];
        $_SESSION['token'] = $responseData['token'];

        http_response_code(200);
        echo json_encode($responseData);
    }
}
