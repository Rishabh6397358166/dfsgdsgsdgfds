<?php

$amount = $_POST['amount'];
$mobile = $_POST['mobile'];
$orderId = $_POST['orderId'];
$email = $_POST['email'];
$consumerName = $_POST['consumerName'];
$returnUrl = $_POST['returnUrl'];
$webhookUrl = $_POST['webhookUrl'];

$sql = "INSERT INTO payload (amount, mobile, orderId, email, consumerName, returnUrl, webhookUrl) 
        VALUES ('$amount', '$mobile', '$orderId', '$email', '$consumerName', '$returnUrl', '$webhookUrl')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect to another page or display a message
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insert Data Form</title>
</head>
<body>

<h2>Insert Data Form</h2>

<form action="" method="post">
  <label for="amount">Amount:</label><br>
  <input type="text" id="amount" name="amount"><br>
  <label for="mobile">Mobile:</label><br>
  <input type="text" id="mobile" name="mobile"><br>
  <label for="orderId">Order ID:</label><br>
  <input type="text" id="orderId" name="orderId"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="consumerName">Consumer Name:</label><br>
  <input type="text" id="consumerName" name="consumerName"><br>
  <label for="returnUrl">Return URL:</label><br>
  <input type="text" id="returnUrl" name="returnUrl"><br>
  <label for="webhookUrl">Webhook URL:</label><br>
  <input type="text" id="webhookUrl" name="webhookUrl"><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
