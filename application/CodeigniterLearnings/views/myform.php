<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <?php
    echo validation_errors();
    ?>
    <?php  
    echo form_open('form');
    ?>
    <input type="text" name="name" value="" size="50">
    <div>
        <input type="submit" value="submit">
    </div>
</body>
</html>