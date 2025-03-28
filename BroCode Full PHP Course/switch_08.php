<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$day = date("l");
switch($day) {
    case "Monday":
        echo "I don't care if monday's blue...";
        break;
    case "Tuesday":
        echo "Tuesday's gray...";
        break;
    case "Wednesday":
        echo "And wednesday's gray too...";
        break;
    case "Thursday":
        echo "Thursday I don't care about you...";
        break;
    case "Friday":
        echo "It's friday I'm in love...";
        break;
    case "Saturday":
        echo "Saturday wait...";
        break;   
    case "Sunday":
        echo "And sunday always comes too late...";
        break; 
}


// $grade = 'A';
// switch($grade){
//     case 'A':
//         echo "You did great";
//         break;
//     case 'B':
//         echo "You did good";
//         break;
//     case 'C':
//         echo "You did okay";
//         break;
//     case 'D':
//         echo "You did poorly";
//         break;  
//     case 'E':
//         echo "You did mehh";
//         break; 
//     case 'F':
//         echo "You failed";
//         break;      
//     default:
//         echo "{$grade} invalid grade";
//         break;
// }
?>