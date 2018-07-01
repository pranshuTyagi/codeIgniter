<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Example</title>
</head>
<body>
    <?php 
        echo form_open('Stud_controller/add_student');
        echo form_label('Roll No.');
        echo form_input(array('id'=>'roll_no','name'=>'roll_no'));
        echo "<br>";
        
        echo form_label('Name');
        echo form_input(array('id'=>'name','name'=>'name'));
        echo "<br>";

        echo form_submit(array('id'=>'submit','value'=>'Add'));
        echo form_close();
    ?>
</body>
</html>