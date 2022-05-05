<?php
    /*
    *石を置くことができるかを判定する
    *できる場合：true
    *できない場合：false
    */
    function isPutOthelloStone($coordinate, $arr){
        $i = (int)($coordinate / 10);
        $j = (int)($coordinate % 10);

        //既に石が置かれていた場合、置くことができない
        if($arr[$i][$j] === '○' || $arr[$i][$j] === '●'){
            return false;
        }
    }

    //盤面を表示する
    function showArr(array $arr){
        echo '<table border="1">';
        for($i = 0;$i < 8;$i++){
            echo '<tr>';
            for($j = 0;$j < 8;$j++){
                echo '<td class="table-data"><a href="./index.php?' . $i . $j . '">' . $arr[$i][$j] . '</a></td>';
            }
            echo '</tr>';
            echo '<br>';
        }
        echo '</table>';
    }
    for($i = 0;$i < 8;$i++){
        for($j = 0;$j < 8;$j++){
            $arr[$i][$j] = '-';
        }
    }
    $arr[3][3] = '○';
    $arr[4][3] = '●';
    $arr[3][4] = '●';
    $arr[4][4] = '○';
    showArr($arr);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<a href="#">a</a>
</body>
</html>
