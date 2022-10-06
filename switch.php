<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statment Example</title>
</head>
<body>

<h1> Switch statement Example</h1>


<?php 
$date=date('y-m-d');
// echo $date;

switch($date)
{
    case '22-07-21':{
        $data=10;
        $data2=20;
        echo $data+$data2."&nbsp you are right mother fucker";
        break;

    }
    case '22-07-21':{
        echo "you are wrong my bro";
        break;

    }
    default : {
        echo "waj gai hai apki bro";
        break;
    }
}



?>
    
</body>
</html>