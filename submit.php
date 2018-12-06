<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1, shrink-to-fit=no">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="css/style.css" type="text/css" rel="stylesheet">

        <title>Input submitted!</title>
    </head>

    <body>
        <div class="main">
            <div class="bg"></div>
            <?php

                use PHPMailer\PHPMailer\PHPMailer;

                require 'vendor/autoload.php';

                $mail = new PHPMailer;

                $mail->IsSMTP();

                $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;

                $mail->SMTPAuth = true;
                $mail->Username = 'blizzardwizard67@gmail.com';
                $mail->Password = 'basketballfan11';

                $mail->SMTPSecure = 'tls';

                $mail->Subject = "You've got mail!";

                $mail->addAddress('blizzardwizard67@gmail.com');

                $sender = $_POST["email"];
                $name = $_POST["name"];
                $comment = $_POST['comments'];
                $comment = wordwrap($comment, 70);

                $mail->From = $sender;
                $mail->FromName = $name;
                $mail->Body = $comment;

                if (!$mail->send()) {
                    echo 'Message not sent.' . $mail->ErrorInfo;
                }
        
                echo '<h1>Thank you for your input, ' . $_POST["name"] . '!';
                echo '<p>Your comments have been submitted.';
            ?>
        </div> <!-- /main -->

        <!-- JavaScript includes -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
    </body>

</html>