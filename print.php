<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>

<body>
    <p><?php
        echo "Instruction using echo";
        ?></p>
    <p><?php
        print "Instruction using print";
        ?></p>
    <p><?php
        $a = array('a' => 'Using print_r', 'b' => array('x', 'y', 'z'));
        print_r($a);
        ?></p>
</body>

</html>