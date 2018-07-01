<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codeigniter Email Example</title>
</head>
<body>
    <?php
        $this->session->flashdata('email_sent');
        
        form_open('/Email_controller/send_email');
    ?>
    <input type="email" name="email" required>
    <input type="submit" value="Send Email">

    <?php
    echo form_close();
    ?>
</body>
</html>