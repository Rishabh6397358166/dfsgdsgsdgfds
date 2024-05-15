<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payload";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $amount = isset($_POST['amount']) ? $_POST['amount'] : "";
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";
    $orderId = isset($_POST['orderId']) ? $_POST['orderId'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $consumerName = isset($_POST['consumerName']) ? $_POST['consumerName'] : "";
    $returnUrl = isset($_POST['returnUrl']) ? $_POST['returnUrl'] : "";
    $webhookUrl = isset($_POST['webhookUrl']) ? $_POST['webhookUrl'] : "";

    // Data to send to the API
    $requestData = array(
        "secretKey" => "h48Ivw+fmWyDU1qL299rXlRVb5XULVvdi35IUGgLGn8=",
        "ivKey" => "dOjsjPo+lGRQ7aUVcgYj1g==",
        "payload" => json_encode(array(
            "amount" => $amount,
            "mobile" => $mobile,
            "orderId" => $orderId,
            "email" => $email,
            "consumerName" => $consumerName,
            "returnUrl" => $returnUrl,
            "webhookUrl" => $webhookUrl
        )),
        "type" => "encrypt"
    );

    // Set up cURL
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-out.shop-se.in/merchant/secure/api/v1/encryptAndDecrypt',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($requestData),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic MDE1NzI6ZTkxZWFmN2YtYTkwNC00NDlkLWEzMmItOTA4ZWYyMjJmYTgx',
            'x-api-key: MY2uUdJrdyLLcpvKmdjaj0MYFFnRvhgMmYDAbFY6',
            'Content-Type: application/json'
        ),
    ));

    // Execute cURL request
    $response = curl_exec($curl);

    // Check for errors
    if ($response === false) {
        $error = curl_error($curl);
        echo "cURL Error: " . $error;
    } else {
        // Decode JSON response
        $responseData = json_decode($response, true);

        // Display decoded response
        echo "<pre>";
        print_r($responseData);
        echo "</pre>";

        // // Insert data into database
        // $sql = "INSERT INTO payloads (amount, mobile, orderId, email, consumerName, returnUrl, webhookUrl)
        //         VALUES ('$amount', '$mobile', '$orderId', '$email', '$consumerName', '$returnUrl', '$webhookUrl')";

        // if ($conn->query($sql) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
    }

    // Close cURL session
    curl_close($curl);
}

// Fetch data from database
$sql = "SELECT * FROM payloads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "Amount: " . $row["amount"]. " - Mobile: " . $row["mobile"]. " - Order ID: " . $row["orderId"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
<form method="post" action="">
    Amount: <input type="text" name="amount"><br>
    Mobile: <input type="text" name="mobile"><br>
    Order ID: <input type="text" name="orderId"><br>
    Email: <input type="text" name="email"><br>
    Consumer Name: <input type="text" name="consumerName"><br>
    Return URL: <input type="text" name="returnUrl"><br>
    Webhook URL: <input type="text" name="webhookUrl"><br>
    <input type="submit" value="Submit">
</form>
