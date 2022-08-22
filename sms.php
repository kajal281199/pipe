<?php 

if(isset($_POST["submit"])){
    $receiver='91'.$_POST['receiver'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];

// Account details
$apiKey = urlencode('NTk1MDY5Nzc1NzU1NjQzNDc3MzY0ZjcwNzMzMjRiNjc=');
	
// Message details
$numbers = array($receiver);
$sender = urlencode('SMSphp2q');
$message = rawurlencode($msg);

$numbers = implode(',', $numbers);

// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

// Send the POST request with cURL
$ch = curl_init('https://api.txtlocal.com/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Process your response here
echo $response;

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatiable" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>SEND SMS</title>
    </head>
    <body>
        <div class="container py-5">
            <div class="row">
<div class="col-md-5 mx-auto bg-white shadow border p-4 rounded">
    <h2 class="text-center fw-bold mb-3">SMS SENDER</h2>
    <form action="" method="post">
        <div class="form-group mb-3">
            <lable for="receiver" class="form-label">Receiver</lable>
            <input type="text" class="form-control" name="receiver" id="receiver" placeholder="Enter Number" required>
        </div>
       
        
        <div class="form-group mb-3">
            <lable for="subject" class="form-label">Subject</lable>
            <input rows="5" class="form-control" name="subject" id="subject" placeholder="Enter subject" required>
        </div>
        <div class="form-group mb-3">
            <lable for="msg" class="form-label">Message</lable>
            <textarea rows="5" class="form-control" name="msg" id="msg" placeholder="Enter message" required></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" name="submit">Send SMS</button>
           
        </div>
    </form>
</div>
            </div>
            </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>