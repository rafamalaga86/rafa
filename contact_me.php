<?php

// Check if its an ajax request, exit if not
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    http_response_code(404);
    // include('404.php');
    die();
}

$validLanguages = ['en', 'es'];
$defaultLanguage = 'en';

if ($_POST) {
    $language = isset($_POST['userLanguage']) && in_array($_POST['userLanguage'], $validLanguages)
                ? $_POST['userLanguage']
                : $defaultLanguage;

    require __DIR__ . '/templates/' . $language . '_language.php';
    $to_Email = "rafael@thesoftwarefactory0.com";

    // Check $_POST vars are set, exit if any missing
    if (!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userSubject"]) || !isset($_POST["userMessage"])) {
        $output = json_encode(['type' => 'error', 'text' => $formEmpty]);
        die($output);
    }

    // Additional php validation
    if (empty($_POST["userName"])) {
        $output = json_encode(['type' => 'error', 'text' => $formEmpty]);
        die($output);
    }
    if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
        $output = json_encode(['type' => 'error', 'text' => $formInvalidEmail]);
        die($output);
    }

    // Proceed with PHP email.
    $headers = 'From: ' . $_POST["userEmail"] . '' . "\r\n" .
    'Reply-To: ' . $_POST["userEmail"] . '' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

        // send mail
    $sentMail = @mail($to_Email, $_POST["userSubject"], $_POST["userMessage"] . '  -' . $_POST["userName"], $headers);

    $output = json_encode([
        'type' => 'message',
        'text' => sprintf($formThanks, $_POST["userName"]),
    ]);

    if (!$sentMail) {
        $output = json_encode([
            'type' => 'error',
            'text' => $formError,
        ]);
    }

    die($output);
}
