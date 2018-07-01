<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codeigniter Temp data</title>
</head>
<body>
Temp data example 
<h2><?php echo $this->session->tempdata('item')?></h2>

<a href="tempdata/add">Click here to add the temp data</a>
</body>
</html>