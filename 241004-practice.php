<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratice</title>
</head>
<body>

    <h1>流程練習1 - 分配成績等級</h1>
    <h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
    <ul>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
</ul>
    <?php
    $score = 9;
    $level = '';
    echo $score;
    echo "<br>";

    if ($score < 0 || $score > 100){
        echo "Input".$score." is in wrong interval.";
    } else {
        echo $pass = ($score >=60)?"及格":"不及格";
        if ($score < 60){
            $level = 'E'; 
        } else if ($score < 70) {
            $level = 'D';
        } else if ($score < 80) {
            $level = 'C';
        } else if ($score < 90) {
            $level = 'B';
        } else {
            $level = 'A';
        }
        echo "<br> 等級為".$level."<br>";
    }

    switch ($level) {
        case 'A':
            echo "很棒~~";
            break;
        case 'B':
            echo "下次會更好!";
            break;
        case 'C':
            echo "要繼續努力";
            break;
        case 'D':
            echo "再加油";
            break;
        case 'E':
            echo "這樣不行";
            break;
        default:
            break;
    }
    ?>



    <h1>流程練習2 - 閏年判斷</h1>
    <div>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</div>
<ul>
    <li>公元年分除以4不可整除，為平年。</li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>
    <?php
    $year = 5400;

    // first 
    if ($year > 0 && $year%1==0) {
        if (($year%4 != 0) || ($year%100 == 0 && $year%400 != 0)){
            echo "西元".$year."年是平年";
        } else if (($year%4 == 0 && $year%100 != 0) || ($year%400 == 0)){
            echo "西元".$year."年是閏年";
        } else {
            echo "Something went wrong!";
        }
    } else {
        echo "西元須為正整數";
    } 
    echo "<br>";

    // first exchange 把上面兩個if對換
    if ($year > 0 && $year%1==0) {
        if (($year%4 == 0) && ($year%100 != 0 || $year%400 == 0)){
            echo "西元".$year."年是閏年";
        } else {
            echo "西元".$year."年是平年";
        }
    } else {
        echo "西元須為正整數";
    } 
    echo "<br>";

    // second
    /* if ($year >0){
        if ($year%4==0) {
            if ($year%400==0) {
                echo "西元".$year."是閏年";
            } else {
                echo "西元".$year."是平年";
            }
        } else {
            echo "西元".$year."是平年";
        }
    } else {
        echo "西元須為正整數";
    } */

    //third
    /* if($year%4==0){
        if($year%100==0) {
            echo "西元".$year."年是平年";
        } else {
            echo "西元".$year."年是閏年";
        }
    } else {
        echo "西元".$year."年是平年";
    } */

    // fourth
    /* echo "<h3>&&</h3>";
    if($year%4==0){
        if($year%100==0 && $year%400!=0) {
            echo "西元".$year."年是平年"; 
        } else {
            echo "西元".$year."年是閏年";
        }
    } else {
        echo "西元".$year."年是平年"; 
    }
    echo "<h3>||</h3>";
    if($year%4==0){
        if($year%100!=0 || $year%400==0){
            echo "西元".$year."年是閏年"; 
        } else {
            echo "西元".$year."年是平年";
        }
    } else {
        echo "西元".$year."年是平年"; 
    } */
   
   // if ($year%4 == 0 ($year%100 == 0 && $year%400 !=0))
   // 2400 true      false (true   &&    false) ==> 閏年
   // 2500 true      true  (true   &&    true) ==> 平年
   // 2404 true      false (false  &&    true) ==> 閏年
   // 2403 false     false (false  &&    true) ==> 平年
   // 不管AND還是OR都是錯的,上面條件有誤

   if ($year%4 == 0 && ($year%100 != 0 || $year%400 == 0)) {
       echo "西元".$year."年是閏年";
   } else {
       echo "西元".$year."年是平年";
   }
   ?>


</body>
</html>