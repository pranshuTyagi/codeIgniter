<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codeigniter Session Example</title>
</head>
<body>
    Welcome <?php echo 
    $this->session->userdata('name');
     ?>
    
</body>
</html>