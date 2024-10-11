<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 程式語言基礎-流程 </title>
</head>
<body>

    <h1> 1. if-else </h1>
    <?php
    $score = 75;
    echo "score = $score <br>";
    if ($score >= 60){
        echo "及格";
    } else { //$score < 60
        echo "不及格";
    }
    ?>


    <h1> 2. switch-case</h1>
    <?php
    $level = 'B';
    echo " level = $level <br>";
    switch ($level){
        case"A":
            echo "表現優良，請繼續保持";
        break;
        case "B":
            echo "值得肯定，還有進步空間";
        break;
        case "C":
            echo "需要更多的練習";
        break;
        case "D":
            echo "需要加強基本功";
        break;
        default:
            echo "是否無心學業?";
    }
    ?>

    <h1> 3. 三源運算子 </h1>
    <?php
    $score = 55;
    echo ($score>=60)?"及格":"不及格"; //only 1 line accepted
    ?>



</body>
</html>