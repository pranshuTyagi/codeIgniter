<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Example</title>
</head>
<body>
    <form method="" action="">
        <?php
        echo form_open('Stud_controller/update_student');
        echo form_hidden('old_roll_no',$old_roll_no);
        echo form_label('Roll no.');
        echo form_input(array('id'=>'roll_no','name'=>'roll_no','value'=>$records[0]->roll_no));
        echo "<br>";

        echo form_label('Name');
        echo form_input(array('id'=>'name','name'=>'name','value'=>$records[0]->name));
        echo "<br>";

        echo form_submit(array('id'=>'submit','value'=>'Edit'));
        echo form_close();
        
        ?>
    
    </form>
    
</body>
</html>