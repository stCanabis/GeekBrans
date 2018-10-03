<?php
//echo "Hello, World!";
//
////
//$a = 7;
//
//
//switch ($a){
//    case 7:
//        echo 7;
//    case 8:
//        echo 8;
//    case 9:
//        echo 9;
//    case 10:
//        echo 10;
//    case 11:
//        echo 11;
//    case 12:
//        echo 12;
//    case 13:
//        echo 13;
//    case 14:
//        echo 14;
//    case 15:
//        echo 15;
//        break;
//}


function power($arg1, $arg2){
    if ($arg2 == 0){
        return 1;
    } elseif ($arg2 == 1){
        return "$arg1";
    } elseif ($arg2 > 1){
        return ($arg1 * power($arg1, $arg2-1));
    }

}

echo power(2,4);




//
//
//$plus = plus(15,12);
//$minus = minus(100,5);
//$proizv = proizv(10,5000);
//$delenie = delenie(25,5);
//
//
//function mathOper ($arg1, $arg2, $operation){
//    switch ($operation){
//        case "деление" :
//            return delenie($arg1,$arg2);
//
//        case "умножение" :
//            return proizv($arg1,$arg2);
//
//        case "сложение" :
//            return plus($arg1,$arg2);
//
//        case "вычетание" :
//            return minus($arg1,$arg2);
//
//        default :
//            echo "Неправильная операция";
//            break;
//    }
//
//
//
//}
//
//echo mathOper(30,20,"сложение");

//
//power(2, 3);
//
//
//
//
//
//function power($arg1, $arg2){
//    if ($arg2 > 0){
//        $arg1 = $arg1 * $arg1;
//        echo $arg1;
//        $arg2--;
//        echo $arg2;
////        power(arg1,$arg2);
//
//    }
//}















//
//function plus ($a, $b){
//    return $a + $b;
//}
//
//function minus ($a, $b){
//    return $a - $b;
//}
//
//function proizv ($prA, $prB){
//    return $prA * $prB;
//}
//
//function delenie($delA, $delB){
//    return $delA / $delB;
//}


//echo "<br> $plus <br> $minus <br> $proizv <br> $delenie <br>";








//$a = 5;
//$b = 10;
//
//if ($a > 0 && $b > 0){
//    echo $a - $b;
//} elseif ($a < 0 && $b < 0){
//    echo $a * $b;
//} elseif ($a < 0 && $b > 0 || $a > 0 && $b < 0){
//    echo $a + $b;
//}




?>