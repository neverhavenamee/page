<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Flag</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Changed to green */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="submit"]:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <h1>Type something to get the flag</h1>
            <input type="text" name="auth-login" placeholder="Type something..." />
            <input type="submit" value="Get Flag" name="authbutton" disabled />
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['authbutton'])) {
            // Obfuscated flag (replace with your actual flag)
            $flag = "SRCTF{h4ml_e4sy_inj3ction}";
            echo "<script>alert('Flag: $flag');</script>";
        } else {
            exit(); // Exit if button is not submitted
        }
        ?>
    </div>
</body>

</html>
