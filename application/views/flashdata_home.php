<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Flash data example 

    <h2><?php 
    echo $this->session->flashdata('item');
     ?></h2>
     <a href="flashdata/add">Click here to add flash data</a>
</body>
</html>