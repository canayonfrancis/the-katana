
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katana</title>
    <link rel="icon" type="images/x-icon" href="assets\katana-logo-no-text.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body class="overflow-hidden thankyou blog1">
    <div class="container">
        <div class="message text-center">
            <div class="logo-mobile text-center">
                <img width="300px" src="assets/Logo (2).png" alt="two katana">
            </div>
            <h1 class="title Alternate_Gothic">Thank you <?php echo $_POST["name"]; ?>!
            </h1>
            <h1 class="subtitle Alternate_Gothic">We appreciate you giving us feedback.<br> We value your opinions and appreciate your feedback.
            </h1>
            <a href="index.html" class="mb-0 submit redbutton">Go back</a>
            <p></p>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="all.js"></script>
</body>
</html>