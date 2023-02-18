<?php
// Import config file:
$config = require("./utils/config.php");
// Import and declare database:
$db = new Database($config["database"]["online"]);
dump_die($_POST);
// Check for the image that are being added
if (isset($_POST) && !empty($_POST)) {
    $dates = $_POST['dateTime'];
    // Clean Input Values:
    $info = sanitizeVlues([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        // 'imageTmpLocation' => $img,
        'venueName' => $_POST['venueName'],
        'address' => $_POST['address'],
        'price' => $_POST['price'],
        'id' => $_SESSION['activeUser']['id'],
        'ticketId' => $_POST['ticketId'],
    ]);
    // Execute the ticket creation:
    $ticket = updateTicket($db, $info['ticketId'], $info);
    updateSchedule($db, $info['ticketId'], $_POST['dateTime']);
    header("Location: /dashboard");
}
