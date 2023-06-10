<?php
$x=$_REQUEST['x'];
$y=$_REQUEST['y'];
switch ($_REQUEST['cal']){
    case '+':
        echo $x+$y;
        break;
        case '-':
            echo $x-$y;
            break;
            case '*':
                echo $x*$y;
                break;
                case '/':
                    echo $x/$y;
                    break;
        
}
?>